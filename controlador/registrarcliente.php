<?php
//sale de la carpeta controlador y entra a la carpeta vista, busca el form de registro
    include("../vista/FormularioRegistroCliente.php");
    if(isset($_POST['registrarCliente'])){
        $ci=$_POST['ci'];
        $nombre=$_POST['nombre'];
        $paterno=$_POST['paterno'];
        $materno=$_POST['materno'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $genero=$_POST['genero'];
        $estado="Activo";

        //echo $ci."".$nombre."".$paterno."".$materno."".$direccion."".$telefono."".$genero;
        //salgo del controlador voy al modelo y llamo a cliente.php, para almacenar el registro
        include("../modelo/cliente.php");
        $cli=new cliente("",$ci,$nombre,$paterno,$materno,$direccion,$telefono,$genero,$estado);
        $res=$cli->grabarcliente();
        if ($res){
            ?>
                <script>
                    alert("REGISTRO EXITOSO");
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("ERROR EN EL REGISTRO");
                </script>
            <?php
        }
        
    }
?>