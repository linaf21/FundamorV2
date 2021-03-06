<?php
    class usuarios_modelo
    {
        private $db;
        private $roles;
        private $documentos;    
        private $usuario;

        public function __construct()
        {
            require_once("conexion.php");
            $this->db=conexion::conexion();

            $this->roles=array();
            $this->documentos=array();
        }

        public function set_usuarios()
        {
            $id_usuario = $_POST["documento_identidad"];
            $nombres = $_POST["nombres"];
            $apellidos= $_POST["apellidos"];
            $tipo_documento = $_POST["tipo_documento"];
            $documento_identidad = $_POST["documento_identidad"];
            $rol = $_POST["rol"];
            $email = $_POST["email"];
            $telefono = $_POST["telefono"];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);   
            $fecha=date('Y-m-d H:i:s'); 

            $sql= $this->db->prepare("INSERT INTO usuario(id_usuario, fk_tipo_documento, fk_rol, password, nombres, apellidos, 
            documento_identidad, email, telefono,  registro_ultimo_acceso) VALUES (?,?,?,?,?,?,?,?,?,?)");

            if ($sql=== false) 
            {
                print_r($sql) ;
                print_r($this->db->error);
            }

            $sql->bind_param('siisssssss', $id_usuario, $tipo_documento, $rol, $password, $nombres, $apellidos, $documento_identidad,
            $email, $telefono, $fecha);
            if($sql->execute())
            {

                echo "<script> alert('Usuario agregado'); </script>";
            }
            else
            {
                echo "Falló la ejecución: (" . $sql->errno . ") " . $sql->error;
            }
        }   

        public function get_roles()
        {
            $consulta = "SELECT * FROM `rol` ORDER BY `id_rol`";
            $resultado = $this->db->query($consulta);
            while ($valores = mysqli_fetch_array($resultado)) 
            {
                $this->roles[]=$valores;
            }
            return $this->roles;
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

        public function get_usuarios()
        {
            $consulta = "SELECT u.id_usuario, CONCAT_WS(' ',u.nombres,u.apellidos), u.email, r.descripcion FROM usuario u LEFT JOIN rol r ON u.fk_rol = r.id_rol ORDER BY registro_ultimo_acceso DESC";
            $resultado = $this->db->query($consulta);
            
            while ($valores = mysqli_fetch_array($resultado)) 
            {
                $this->usuario[]=$valores;
            }
            return $this->usuario;
        }
    }

?>