<?php
    require_once("../../modelo/denuncia_modelo.php");
    $denuncia=new denuncia_modelo();
    $matrizMunicipios=$denuncia->get_municipios();
    $matrizDocumentos=$denuncia->get_documentos();
    if(isset($_POST["submit_button"]))
    {
        $insercionReporte=$denuncia->set_reporte();
    }
    


?>