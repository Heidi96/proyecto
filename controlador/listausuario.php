<?php
    include("../modelo/conexion.php");
    include("../modelo/usuario.php");
    $usu=new usuario("","","","","","");
    $res=$usu->listarusuario();
    //para ver en la vista la lista de clientes
    include("../vista/Vistalistausuario.php");
?>