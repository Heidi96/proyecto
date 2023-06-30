<?php
    include("../modelo/conexion.php");
    $co=$_GET['cid'];
    include("../modelo/prenda.php");
    $prenda=new prenda($co,"","","","");
    $res=$prenda->eliminarprenda();
    if ($res){
        echo"
            <script>
                alert('Eliminacion exitosa');
                location.href='listaprenda.php';
            </script>";
    } else {
        echo"
        <script>
            alert('Error, No se eliminó al empleado');
        </script>";
    }
?>