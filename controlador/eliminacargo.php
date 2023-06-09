<?php
    $co=$_GET['cid'];
    include("../modelo/cargo.php");
    $car=new cargo($co,"");
    $res=$car->eliminarcargo();
    if($res){
        echo"
            <script>
                alert('Se eliminó el cargo correctamente');
                location.href='listacargo.php';
            </script>";
            
    }
    else{
        echo"
            <script>
                alert('Error, No se eliminó');
            </script>";
    }
?>