<?php
    include("../modelo/conexion.php");
    include("../modelo/cargo.php");
    $car=new cargo("","");
    $res=$car->lista();
    //para ver en la vista la lista de clientes
    include("../vista/Vistalistacargo.php");
?>