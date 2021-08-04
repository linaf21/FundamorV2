<?php
    require_once("../../modelo/detalle_reporte_model.php");
    $reportes=new detalle_reporte_model();
    $reporte=$reportes->get_reporte($id);  
    $matrizAgentes=$reportes->get_Agentes();
    $cantidadCasos=$reportes->get_caso($id);
    if(isset($_POST['submit_button']))
    {
        $insercionCaso=$reportes->set_caso($id);
    }
?>