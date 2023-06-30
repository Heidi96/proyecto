<?php
//sale de la carpeta controlador y entra a la carpeta vista, busca el form de registro
    include("../modelo/conexion.php");    
    include("../vista/FormularioRegistroTipoCredito.php");
    if(isset($_POST['REGISTRAR'])){
        $tic=$_POST['tipoc'];
        //salgo del controlador voy al modelo y llamo a cliente.php, para almacenar el registro
        include("../modelo/tipocredito.php");
        $tipo=new tipocredito("",$tic);
        $res=$tipo->grabartipoc();
        if ($res){
            echo"
            <script>
                alert('Registro exitoso');
                location.href='listatipocredito.php';
            </script>";
        } else {
            echo"
            <script>
                alert('Error, No se registró');
            </script>";
        }
        
    }
?>