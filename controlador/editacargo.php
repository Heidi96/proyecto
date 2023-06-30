<?php
    include("../modelo/conexion.php");
    $cod=$_GET['cod'];
    include("../modelo/cargo.php");
    $car=new cargo($cod,"");
    $res=$car->listarcargo();
    include("../vista/Vistaeditacargo.php");
    //act
    if(isset($_GET['Editar'])){
        $cargo=$_GET['cargo'];
        $car1=new cargo($cod,$cargo);
        $res2=$car1->editarcargo();
        
            if($res2){
                echo"
                    <script>
                        alert('Se modificó el cargo correctamente');
                        location.href='listacargo.php';
                    </script>";
                    
            }
            else{
                echo"
                    <script>
                        alert('Error, No se modificó');
                        location.href='listacargo.php';
                    </script>";
            }
           
    }

?>