<?php
    require_once("../../modelo/casos_agente_model.php");
    $casos=new casos_agente_model();
    $matrizCasos=$casos->get_casos();  
?>