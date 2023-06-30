<?php
    include("../modelo/conexion.php");
    include("../modelo/prenda.php");
    $prenda=new prenda("","","","","","");
    $res=$prenda->listarprenda();
    //para ver en la vista la lista de clientes
    include("../vista/Vistalistaprenda.php");
?>