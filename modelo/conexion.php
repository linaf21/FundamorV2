<?php
    class conexion
    {
        public static function conexion()
        {
            try
            {
                $conexion = mysqli_connect("localhost","root","root","database_animal");
                mysqli_set_charset($conexion,"utf8");
            }
            catch(Exception $e)
            {
                die("Error" . $e->getMessage());
                echo "Linea del error " . $e ->getLine();
            }

            return $conexion;
        }
    }