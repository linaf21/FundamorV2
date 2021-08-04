<?php
    class casos_agente_model
    {
        private $db;
        private $casos;


        public function __construct()
        {
            require_once("conexion.php");
            $this->db=conexion::conexion();

            $this->reportes=array();
        }
        public function get_casos()
        {
            $consulta = "SELECT R.id_reporte, R.fecha_reporte, M.descripcion , R.direccion FROM caso_maltrato C 
            LEFT JOIN reporte R ON C.fk_reporte = R.id_reporte 
            LEFT JOIN municipio M ON R.fk_municipio = M.id_municipio
            ORDER BY R.fecha_reporte DESC ";
            $resultado = $this->db->query($consulta);
            while ($valores = mysqli_fetch_array($resultado)) 
            {
                $this->reportes[]=$valores;
            }
            return $this->reportes;
        }
    }
?>