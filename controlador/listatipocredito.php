<?php
    include("../modelo/conexion.php");
    include("../modelo/tipocredito.php");
    $ti=new tipocredito("","");
    $res=$ti->listac();
    //para ver en la vista la lista de clientes
    include("../vista/Vistalistatipocredito.php");
?>