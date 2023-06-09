<?php
    include("../modelo/empleado.php");
    $emp=new empleado("","","","","","","","","","");
    $res=$emp->listarempleado();
    //para ver en la vista la lista de clientes
    include("../vista/Vistalistaempleado.php");
?>