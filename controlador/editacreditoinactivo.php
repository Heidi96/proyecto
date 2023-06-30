<?php
    include("../modelo/conexion.php");
    $cod=$_GET['cod'];
    include("../modelo/credito.php");
    $cre=new credito($cod,"","","","","","","","");
    $res=$cre->activarcredito();

        if ($res){
            echo"
                <script>
                    alert('Se activó el credito');
                    location.href='listacredito.php';
                </script>";
        } else {
            echo"
            <script>
                alert('Error, No se activó el credito');
            </script>";
        }

?>