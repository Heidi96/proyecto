<?php
    include("../modelo/cargo.php");
    $cargo=new cargo("","");
    $res=$cargo->lista();
//sale de la carpeta controlador y entra a la carpeta vista, busca el form de registro   

    include("../vista/FormularioRegistroEmpleado.php");

    if(isset($_POST['REGISTRAR'])){
        $ca=$_POST['cargo'];

        $ci=$_POST['ci'];
        $nombre=$_POST['nombre'];
        $paterno=$_POST['paterno'];
        $materno=$_POST['materno'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $fecha=$_POST['fecha'];
        $genero=$_POST['genero'];

        include("../modelo/empleado.php");
        $emp=new empleado("","$ca","$ci","$nombre","$paterno","$materno","$direccion","$telefono","$fecha","$genero");
        $res=$emp->grabarempleado();
        if ($res){
            echo"
            <script>
                alert('Registro exitoso');
                location.href='listaempleado.php';
            </script>";
        } else {
            echo"
            <script>
                alert('Error, No se registró');
                location.href='listaempleado.php';
            </script>";
        }
        
    }
?>