<?php
    $co=$_GET['cid'];
    include("../modelo/empleado.php");
    $emp=new empleado($co,"","","","","","","","","");
    $res=$emp->eliminarempleado();
    if ($res){
        echo"
            <script>
                alert('Eliminacion exitosa');
                location.href='listaempleado.php';
            </script>";
    } else {
        echo"
        <script>
            alert('Error, No se eliminó al empleado');
        </script>";
    }
?>