<?php
    include("../modelo/conexion.php");
    include("../modelo/pago.php");
    $pago=new pago("","","","","","","","","","");
    $res=$pago->listarpago();
    //para ver en la vista la lista de clientes
    include("../vista/Vistalistapago.php");
?>