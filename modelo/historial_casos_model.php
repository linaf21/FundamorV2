<?php
    class historial_casos_model
    {
        private $db;
        private $reportes;


        public function __construct()
        {
            require_once("conexion.php");
            $this->db=conexion::conexion();

            $this->reportes=array();
        }
        public function get_reportes()
        {
            $consulta = "SELECT R.id_reporte, R.fecha_reporte, M.descripcion , R.direccion, R.descripcion FROM reporte R 
            LEFT JOIN municipio M ON R.fk_municipio = M.id_municipio ORDER BY R.fecha_reporte DESC ";
            $resultado = $this->db->query($consulta);
            while ($valores = mysqli_fetch_array($resultado)) 
            {
                $this->reportes[]=$valores;
            }
            return $this->reportes;
        }
    }
?>