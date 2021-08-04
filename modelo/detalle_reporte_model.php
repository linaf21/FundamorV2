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
                echo "<script> alert('Reporte agregado'); </script>";
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
            $consulta = "SELECT * FROM `rol` ORDER BY `id_rol`";
            $resultado = $this->db->query($consulta);
            while ($valores = mysqli_fetch_array($resultado)) 
            {
                $this->agentes[]=$valores;
            }
            return $this->agentes;
        }
    }
?>