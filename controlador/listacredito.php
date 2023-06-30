<?php
    include("../modelo/conexion.php");
    include("../modelo/credito.php");
    $cre=new credito("","","","","","","","","");
    $res=$cre->listarcredito();
    //para ver en la vista la lista de clientes
    include("../vista/Vistalistacredito.php");
?>