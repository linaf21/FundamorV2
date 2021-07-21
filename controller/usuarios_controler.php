<?php
    require_once("../../modelo/usuarios_modelo.php");
    $usuarios=new usuarios_modelo();
    $matrizDocumentos=$usuarios->get_documentos();
    $matrizRoles=$usuarios->get_roles();
    if(isset($_POST["submit_button"]))
    {
        $insercionUsuario=$usuarios->set_usuarios();
    }   
?>