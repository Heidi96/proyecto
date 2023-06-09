<?php
    $cod=$_GET['cod'];

    include("../modelo/empleado.php");
    $emp=new empleado($cod,"","","","","","","","","");

    $res=$emp->buscarempleado();

    include("../vista/Vistaeditaempleado.php");
    if(isset($_GET['Editar'])){

        $carnet=$_GET['carnet'];
        $nombre=$_GET['nombre'];
        $paterno=$_GET['paterno'];
        $materno=$_GET['materno'];
        $direccion=$_GET['direccion'];
        $telefono=$_GET['telefono'];
        $fechanac=$_GET['fechanac'];
        $genero=$_GET['genero'];
       
        $emp=new empleado($cod,"","$carnet","$nombre","$paterno","$materno","$direccion","$telefono","$fechanac","$genero");
        $res=$emp->editarempleado();
        if($res){
            echo"
            <script>
                alert('Se modificó al empleado');
                location.href='listaempleado.php';
            </script>";
        } else {
            echo"
            <script>
                alert('Error, No se modificó al empleado');
            </script>";
        }
            
    }

?>