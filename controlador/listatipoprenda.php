<?php
    include("../modelo/tipoprenda.php");
    $ti=new tipoprenda("","");
    $res=$ti->lista();
    //para ver en la vista la lista de clientes
    include("../vista/Vistalistatipoprenda.php");
?>