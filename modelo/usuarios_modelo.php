<?php
    class usuarios_modelo
    {
        private $db;
        private $roles;
        private $documentos;
    }

    public function __construct()
    {
        require_once("conexion.php");
        $this->db=conexion::conexion();

        $this->municipios=array();
        $this->documentos=array();
    }

    public function set_usuarios()
    {

    }

    public function get_roles()
    {
        $consulta = "SELECT * FROM `rol` ORDER BY `id_rol`";
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
?>