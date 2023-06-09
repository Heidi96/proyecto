<?php
    $cod=$_GET['cod'];
    include("../modelo/cliente.php");
    $cli=new cliente($cod,"","","","","","","","");
    $res=$cli->buscacliente();
    include("../vista/Vistaeditacliente.php");
    if(isset($_GET['Editar'])){
        $carnet=$_GET['ci'];
        $nombr=$_GET['nombre'];
        $patern=$_GET['paterno'];
        $matern=$_GET['materno'];
        $direccio=$_GET['direccion'];
        $telefon=$_GET['telefono'];
        $gener=$_GET['genero'];
       
        $res1=$cli->actualizarcliente($cod,$carnet,$nombr,$patern,$matern,$direccio,$telefon,$gener);
        
        if($res1){
            echo"
            <script>
                alert('Se modificó al cliente');
                location.href='listacliente.php';
            </script>";
        } else {
            echo"
            <script>
                alert('Error, No se modificó al cliente');
            </script>";
        }
            
    }

?>