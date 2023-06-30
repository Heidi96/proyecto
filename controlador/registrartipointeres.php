<?php
//sale de la carpeta controlador y entra a la carpeta vista, busca el form de registro
    include("../modelo/conexion.php");    
    include("../vista/FormularioRegistroTipoInteres.php");
    if(isset($_POST['REGISTRAR'])){
        $tic=$_POST['tipoi'];
        //salgo del controlador voy al modelo y llamo a cliente.php, para almacenar el registro
        include("../modelo/tipointeres.php");
        $tipo=new tipointeres("",$tic);
        $res=$tipo->grabartipointeres();
        if ($res){
            echo"
            <script>
                alert('Registro exitoso');
                location.href='listatipointeres.php';
            </script>";
        } else {
            echo"
            <script>
                alert('Error, No se registró');
            </script>";
        }
        
    }
?>