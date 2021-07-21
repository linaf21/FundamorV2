<?php
    class denuncia_modelo
    {
        private $db;
        private $municipios;
        private $documentos;
        public $message = '';


        public function __construct()
        {
            require_once("conexion.php");
            $this->db=conexion::conexion();

            $this->municipios=array();
            $this->documentos=array();
        }

        
        public function set_reporte()
        {
            $id_reporte=null;
            $fecha=date('Y-m-d H:i:s');
            $municipio = $_POST["select_usuario"];
            $adjunto=null;
            $departamento = null;
            $direccion = $_POST["direccion"];
            $descripcion = $_POST["descripcion_reporte"];
            $nombres = $_POST["nombres_denunciante"];
            $apellidos = $_POST["apellidos_denunciante"];
            $tipo_documento = $_POST["tipo_documento"];
            $documento =(int)$_POST["documento_identidad_denunciante"];
            $email = $_POST["email_denunciante"];
            $telefono =(int)$_POST["telefono_denunciante"];
            $v1 = $_POST["hambre_sed"];
            $v2 = $_POST["malestar_fisico"];
            $v3 = $_POST["negligencia"];
            $v4 = $_POST["miedo_estres"];
            $v5 = $_POST["comportamiento_natural"];
            $v6 = $_POST["agresion_fisica"];
            $v7 = $_POST["agresion_verbal"];
            $v8 = $_POST["bienestar_animal"];

            $sql= $this->db->prepare("INSERT INTO reporte (id_reporte, fecha_reporte, fk_tipo_documento, fk_adjunto, nombres_denunciante, 
            apellidos_denunciante, documento_identidad_denunciante, email_denunciante, telefono_denunciante, descripcion, fk_departamento, 
            fk_municipio, direccion, hambre_sed, malestar_fisico, negligencia, miedo_estres, comportamiento_natural, agresion_fisica, 
            agresion_verbal, bienestar_animal) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

            if ($sql=== false) 
            {
                print_r($sql) ;
                print_r($this->db->error);
            }

            $sql->bind_param('isisssssssiisssssssss',$id_reporte,$fecha,$tipo_documento,$adjunto,$nombres,$apellidos,$documento,$email,$telefono,$descripcion,
            $departamento,$municipio,$direccion,$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8);
            $sql->execute();

            if($sql->execute())
            {
                 $message = "Reporte registrado exitosamente";
            } else{
                $message = "Error al realizar el reporte";
            }
          
           
        }
        public function get_municipios()
        {
            $consulta = "SELECT * FROM `municipio` ORDER BY `id_municipio`";
            $resultado = $this->db->query($consulta);
            while ($valores = mysqli_fetch_array($resultado)) 
            {
                $this->municipios[]=$valores;
            }
            return $this->municipios;
        }
        public function get_documentos()
        {
            $consulta = "SELECT * FROM `tipo_documento` ORDER BY `id_tipo_documento`";
            $resultado = $this->db->query($consulta);
            while ($valores = mysqli_fetch_array($resultado)) 
            {
                $this->documentos[]=$valores;
            }
            return $this->documentos;
        }
    }
?>