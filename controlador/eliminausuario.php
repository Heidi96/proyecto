<?php
    include("../modelo/conexion.php");
    $co=$_GET['cid'];
    include("../modelo/usuario.php");
    $usu=new usuario($co,"","","","","");
    $res=$usu->eliminarusuario();
    if ($res){
        echo"
            <script>
                alert('Eliminacion exitosa');
                location.href='listausuario.php';
            </script>";
    } else {
        echo"
        <script>
            alert('Error, No se eliminó al usuario');
        </script>";
    }
?>