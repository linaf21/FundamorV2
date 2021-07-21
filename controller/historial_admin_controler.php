<?php
    require_once("../../modelo/historial_casos_model.php");
    $reportes=new historial_casos_model();
    $matrizReportes=$reportes->get_reportes();  
?>