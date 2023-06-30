<?php
    include("../modelo/conexion.php");
    $co=$_GET['cid'];
    include("../modelo/tipocredito.php");
    $ti=new tipocredito($co,"");
    $res=$ti->eliminartipocredito();
    if($res){
        echo"
            <script>
                alert('Se eliminó el tipo de prenda correctamente');
                location.href='listatipocredito.php';
            </script>";
            
    }
    else{
        echo"
            <script>
                alert('Error, No se eliminó');
            </script>";
    }
?>