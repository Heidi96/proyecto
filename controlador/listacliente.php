<?php
    include("../modelo/cliente.php");
    $cli=new cliente("","","","","","","","","");
    $res=$cli->listarcliente();
    //para ver en la vista la lista de clientes
    include("../vista/Vistalistacliente.php");
?>