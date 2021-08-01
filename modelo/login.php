<?php

    class login_modelo
    {
        private $db;

        public function __construct()
        {
            require_once("conexion.php");
            $this->db=conexion::conexion();
        }
    }
?>