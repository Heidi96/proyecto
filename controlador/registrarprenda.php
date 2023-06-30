<?php
    include("../modelo/conexion.php");

    include("../modelo/cliente.php");
    $cli=new cliente("","","","","","","","","");
    $res1=$cli->listarcliente();

    include("../modelo/tipoprenda.php");
    $tipo=new tipoprenda("","");
    $res=$tipo->lista();
//sale de la carpeta controlador y entra a la carpeta vista, busca el form de registro   
    
    include("../vista/FormularioRegistroPrenda.php");

    if(isset($_POST['REGISTRAR'])){
        $clie=$_POST['cliente'];
        $ti=$_POST['tipo'];

        $marca=$_POST['marca'];
        $color=$_POST['color'];
        $detalle=$_POST['detalle'];


        include("../modelo/prenda.php");
        $prenda=new prenda("","$ti","$marca","$color","$detalle","$clie");
        $res=$prenda->grabarprenda();
        if ($res){
            echo"
            <script>
                alert('Registro exitoso');
                location.href='listaprenda.php';
            </script>";
        } else {
            echo"
            <script>
                alert('Error, No se registró');
                location.href='listaprenda.php';
            </script>";
        }
        
    }
?>