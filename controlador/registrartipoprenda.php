<?php
//sale de la carpeta controlador y entra a la carpeta vista, busca el form de registro
    include("../modelo/conexion.php");    
    include("../vista/FormularioRegistroTipoPrenda.php");
    if(isset($_POST['registrar'])){
        $ti=$_POST['tipo'];
        //salgo del controlador voy al modelo y llamo a cliente.php, para almacenar el registro
        include("../modelo/tipoprenda.php");
        $tipo=new tipoprenda("",$ti);
        $res=$tipo->grabartipo();
        if ($res){
            echo"
            <script>
                alert('Registro exitoso');
                location.href='listatipoprenda.php';
            </script>";
        } else {
            echo"
            <script>
                alert('Error, No se registró');
            </script>";
        }
        
    }
?>