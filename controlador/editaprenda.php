<?php
    include("../modelo/conexion.php");
    $cod=$_GET['cod'];

    include("../modelo/cliente.php");
    $cli=new cliente("","","","","","","","","");
    
    include("../modelo/prenda.php");
    $prenda=new prenda($cod,"","","","","");
    $res=$prenda->buscarprenda();

    include("../vista/Vistaeditaprenda.php");
    if(isset($_GET['Editar'])){
        $marca=$_GET['marca'];
        $color=$_GET['color'];
        $detalle=$_GET['detalle'];
       
        $prenda=new prenda($cod,"","$marca","$color","$detalle","");
        $res1=$prenda->editarprenda();
        if($res1){
            echo"
            <script>
                alert('Se modificó a la prenda');
                location.href='listaprenda.php';
            </script>";
        } else {
            echo"
            <script>
                alert('Error, No se modificó la prenda');
            </script>";
        }
            
    }

?>