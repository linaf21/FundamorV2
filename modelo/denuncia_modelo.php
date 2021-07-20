<?php
    class denuncia_modelo
    {
        private $db;
        private $municipios;
        private $documentos;


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
            $municipio = $_POST["select_usuario"];
            $direccion = $_POST["direccion"];
            $descripcion = $_POST["descripcion_reporte"];
            $nombres = $_POST["nombres_denunciante"];
            $apellidos = $_POST["apellidos_denunciante"];
            $tipo_documento = $_POST["tipo_documento"];
            $documento = $_POST["documento_identidad_denunciante"];
            $email = $_POST["email_denunciante"];
            $telefono = $_POST["telefono_denunciante"];
            $v1 = null;
            $v2 = null;
            $v3 = null;
            $v4 = null;
            $v5 = null;
            $v6 = null;
            $v7 = null;
            $v8 = null;
            $sql="INSERT INTO `reporte` (`id_reporte`, `fecha_reporte`, `fk_tipo_documento`, `nombres_denunciante`, `apellidos_denunciante`, `documento_identidad_denunciante`, 
            `email_denunciante`, `telefono_denunciante`, `descripcion`, `fk_municipio`, `direccion`, `hambre_sed`, `malestar_fisico`, `negligencia`, `miedo_estres`, `comportamiento_natural`, 
            `agresion_fisica`, `agresion_verbal`, `bienestar_animal`) VALUES (null , now(), $tipo_documento, $nombres, $apellidos, $documento, 
            $email, $telefono, $descripcion, $municipio, $direccion, $v1, $v2, $v3, $v4, $v5, $v6, $v7, $v8)";
            $result= $this->db->query($sql);
            
            if ($result) 
            {
                echo'<script type="text/javascript">
                alert("Tarea Guardada");
               window.location.href="index.php";
               </script>';
                return true;
               
            } else {
                echo'<script type="text/javascript">
                alert("Me voy a matar");
               window.location.href="index.php";
               </script>';
                return false;
            }
            echo mysql_errno($result) . ": " . mysql_error($result);
            
          
           
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