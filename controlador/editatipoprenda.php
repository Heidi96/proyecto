<?php
    $cod=$_GET['cod'];
    include("../modelo/tipoprenda.php");
    $ti=new tipoprenda($cod,"");
    $res=$ti->listartipoprenda();
    include("../vista/Vistaeditatipoprenda.php");
    //act
    if(isset($_GET['Editar'])){
        $tipo=$_GET['tipo'];
        $ti1=new tipoprenda($cod,$tipo);
        $res2=$ti1->editartipoprenda();
        
            if($res2){
                echo"
                    <script>
                        alert('Se modificó el tipo de prenda correctamente');
                        location.href='listatipoprenda.php';
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