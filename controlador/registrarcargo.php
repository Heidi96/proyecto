<?php
//sale de la carpeta controlador y entra a la carpeta vista, busca el form de registro
    include("../modelo/conexion.php");
    include("../vista/FormularioRegistroCargo.php");
    if(isset($_POST['registrarcargo'])){
        $ca=$_POST['cargo'];
        //salgo del controlador voy al modelo y llamo a cliente.php, para almacenar el registro
        include("../modelo/cargo.php");
        $car=new cargo("",$ca);
        $res=$car->grabarcargo();
        if ($res){
            echo"
            <script>
                alert('Registro exitoso');
                location.href='listacargo.php';
            </script>";
        } else {
            echo"
            <script>
                alert('Error, No se registró');
                location.href='listacargo.php';
            </script>";
        }
        
    }
?>