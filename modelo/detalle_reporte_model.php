<?php
    class detalle_reporte_model
    {
        private $db;
        private $agentes;
        public function __construct()
        {
            require_once("conexion.php");
            $this->db=conexion::conexion();

            $this->reportes=array();
            $this->agentes=array();
        }
        public function get_reporte($id)
        {
            $consulta = $this->db->prepare("SELECT R.id_reporte, R.fecha_reporte, D.descripcion AS tipo_documento, R.nombres_denunciante, R.apellidos_denunciante, 
            R.documento_identidad_denunciante, R.email_denunciante, R.telefono_denunciante, R.descripcion, M.descripcion AS municipio,
            R.direccion, R.hambre_sed, R.malestar_fisico, R.negligencia, R.miedo_estres, R.comportamiento_natural, R.agresion_fisica,
            R.agresion_verbal, R.bienestar_animal
            FROM reporte R 
            LEFT JOIN tipo_documento D  ON R.fk_tipo_documento = D.id_tipo_documento 
            LEFT JOIN municipio M ON R.fk_municipio = M.id_municipio
            WHERE R.id_reporte = ?");
            $consulta->bind_param('i',$id);
            if($consulta->execute())
            {
            }
            else
            {
                echo "Falló la ejecución: (" . $consulta->errno . ") " . $consulta->error;
            }
            $resultado = $consulta->get_result()->fetch_assoc();
            return $resultado;
        }

        public function get_Agentes()
        {
            $consulta = "SELECT * FROM usuario WHERE fk_rol = 02 ORDER BY id_usuario";
            $resultado = $this->db->query($consulta);
            while ($valores = mysqli_fetch_array($resultado)) 
            {
                $this->agentes[]=$valores;
            }
            return $this->agentes;
        }
        
        public function set_caso($id)
        {

            $fk_reporte=$id;
            $contraseña="CMA#".$id;
            $estado=01;
            $usuario=$_POST['nombreAgentes'];
            $nombre=null;
            $anotaciones=null;
            $sql= $this->db->prepare("INSERT INTO caso_maltrato (fk_reporte,contraseña,fk_estado,fk_usuario,nombre,anotaciones) 
                                    VALUES (?,?,?,?,?,?)");

            $sql->bind_param('isiiss',$fk_reporte,$contraseña,$estado,$usuario,$nombre,$anotaciones);
            
            if($sql->execute())
            {
                echo "<script> alert('Caso agregado'); </script>";
            }
            else
            {
                echo "Falló la ejecución: (" . $sql->errno . ") " . $sql->error;
            }
        }
        public function get_caso($id)
        {
            $consulta = $this->db->prepare("SELECT COUNT(*) FROM caso_maltrato WHERE fk_reporte = ?");
            $consulta->bind_param('i',$id);
            if($consulta->execute())
            {
            }
            else
            {
                echo "Falló la ejecución: (" . $consulta->errno . ") " . $consulta->error;
            }
            $resultado = $consulta->get_result()->fetch_row();
            return $resultado;
        }
    }
?>