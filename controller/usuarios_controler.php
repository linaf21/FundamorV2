<?php
    require_once("../../modelo/usuarios_modelo.php");
    $usuarios=new usuarios_modelo();
    $matrizRoles=$usuarios->get_roles();
    $matrizDocumentos=$usuarios->get_documentos();

    if(isset($_POST["submit_button"]))
    {
        $insercionReporte=$usuarios->set_usuarios();
    }    
?>