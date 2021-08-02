<?php
    class conexion
    {
        public static function conexion()
        {
            try
            {
                $conexion = mysqli_connect("fundamordb.cwya5ptaphcc.us-east-2.rds.amazonaws.com","admin","fundamor","database_animal");
                
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
?>