<?php
    include("../modelo/conexion.php");
    include("../modelo/tipointeres.php");
    $ti=new tipointeres("","");
    $res=$ti->listai();
    //para ver en la vista la lista de clientes
    include("../vista/Vistalistatipointeres.php");
?>