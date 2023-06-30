<?php
    include("../modelo/conexion.php");
    $co=$_GET['cid'];
    include("../modelo/cliente.php");
    $cli=new cliente($co,"","","","","","","","");
    $res=$cli->eliminarcliente();
    if ($res){
        ?>
            <script>
                alert("ELIMINACION EXITOSA");
            </script>
        <?php
    } else {
        ?>
            <script>
                alert("ERROR EN LA ELIMINACION");
            </script>
        <?php
    }
?>