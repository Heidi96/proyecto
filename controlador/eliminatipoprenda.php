<?php
    $co=$_GET['cid'];
    include("../modelo/tipoprenda.php");
    $ti=new tipoprenda($co,"");
    $res=$ti->eliminartipoprenda();
    if($res){
        echo"
            <script>
                alert('Se eliminó el tipo de prenda correctamente');
                location.href='listatipoprenda.php';
            </script>";
            
    }
    else{
        echo"
            <script>
                alert('Error, No se eliminó');
            </script>";
    }
?>