<?php
    include("../modelo/conexion.php");
    $cod=$_GET['cod'];
    include("../modelo/tipocredito.php");
    $ti=new tipocredito($cod,"");
    $res=$ti->listartipocredito();
    include("../vista/Vistaeditatipocredito.php");
    //act
    if(isset($_GET['Editar'])){
        $tipo=$_GET['tipoc'];
        $ti1=new tipocredito($cod,$tipo);
        $res2=$ti1->editartipocredito();
        
            if($res2){
                echo"
                    <script>
                        alert('Se modificó el tipo de prenda correctamente');
                        location.href='listatipocredito.php';
                    </script>";
                    
            }
            else{
                echo"
                    <script>
                        alert('Error, No se modificó');
                    </script>";
            }
           
    }

?>