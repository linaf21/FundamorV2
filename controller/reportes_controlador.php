<?php
    require_once("../../modelo/denuncia_modelo.php");
    $municipios=new denuncia_modelo();
    $matrizDenuncias=$municipios->get_municipios();

?>