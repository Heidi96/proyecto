<?php
    include("../modelo/conexion.php");
    $co=$_GET['cid'];
    include("../modelo/credito.php");
    $cre=new credito($co,"","","","","","","","");
    $res=$cre->eliminarcredito();
    if ($res){
        echo"
            <script>
                alert('Eliminacion exitosa');
                location.href='listacredito.php';
            </script>";
    } else {
        echo"
        <script>
            alert('Error, No se eliminó al usuario');
        </script>";
    }
?>