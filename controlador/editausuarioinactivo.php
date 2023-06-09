<?php
    $cod=$_GET['cod'];
    include("../modelo/usuario.php");
    $usu=new usuario($cod,"","","","","");
    $res=$usu->activarusuario();

        if ($res){
            echo"
                <script>
                    alert('Se activó al usuario');
                    location.href='listausuario.php';
                </script>";
        } else {
            echo"
            <script>
                alert('Error, No se activó al usuario');
            </script>";
        }

?>