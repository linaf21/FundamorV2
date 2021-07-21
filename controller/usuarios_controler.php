<?php
    require_once("../../modelo/usuarios_modelo.php");
    $usuarios=new usuarios_modelo();
    $matrizDocumentos=$usuarios->get_documentos();
    $matrizRoles=$usuarios->get_roles();
    $matrizUsuarios=$usuarios->get_usuarios();
    if(isset($_POST["submit_button"]))
    {
        $insercionUsuario=$usuarios->set_usuarios();
    }   
?>