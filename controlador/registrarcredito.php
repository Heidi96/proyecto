<?php
//sale de la carpeta controlador y entra a la carpeta vista, busca el form de registro     
    /* include("../modelo/cliente.php");
    $cli=new cliente("","","","","","","","","");
    $res=$cli->listarcliente();  */

    include("../modelo/tipoprenda.php");
    $tip=new tipoprenda("","");
    $res=$tip->lista();
    //echo ($res);


    /*include("../modelo/prenda.php");
    $tip=new prenda("","","","","");
    $res=$tip->listarprenda(); */

    
    include("../vista/FormularioRegistroCredito.php");
    if(isset($_POST['REGISTRAR'])){

        $cliente=$_POST['cliente'];
        $tipo=$_POST['tipo'];
        $prenda=$_POST['prenda'];

        include("../modelo/credito.php");
        $cre=new credito("","$","$","$","$","$","","","","");
        //$res=$cre->grabarusuario();
        if ($res){
            echo"
            <script>
                alert('Registro exitoso');
                location.href='listausuario.php';
            </script>";
        } else {
            echo"
            <script>
                alert('Error, No se registró al usuario');
            </script>";
        }

        
    }
?>