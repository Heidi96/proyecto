<?php
    include("../modelo/usuario.php");
    $usu=new usuario("","","","","","");
    $res=$usu->listarusuarioinactivo();
    //para ver en la vista la lista de clientes
    include("../vista/Vistalistausuarioinactivo.php");
?>