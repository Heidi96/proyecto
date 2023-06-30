<?php
    include("../modelo/conexion.php");
    $cod=$_GET['cod'];

    include("../modelo/usuario.php");
    $usu=new usuario($cod,"","","","","");
    $res=$usu->listarusu(); 
    
    include("../vista/Vistaeditausuario.php");
    if(isset($_GET['Editar'])){
        $usuario=$_GET['usuario'];
        $contraseña=$_GET['contra'];
        $contraseña1=$_GET['contra1'];
        $nivel=$_GET['nivel'];

        if(empty($contraseña) and empty($contraseña1)){
            $usu=new usuario($cod,"","$usuario","","$nivel","");
            $res1=$usu->actualizarusuario();
            if ($res1){
                echo"
                    <script>
                        alert('Se modificó al usuario');
                        location.href='listausuario.php';
                    </script>";
            } else {
                echo"
                <script>
                    alert('Error, No se modificó al usuario');
                </script>";
            }
        }else{
            if(strcmp($contraseña,$contraseña1)==0){
                $contraseña=md5($contraseña);
                $usu1=new usuario($cod,"","$usuario","$contraseña","$nivel","");
                $res2=$usu1->editarusuario();
                if ($res2){
                    echo"
                        <script>
                            alert('Se modificó al usuario');
                            location.href='listausuario.php';
                        </script>";
                } else {
                    echo"
                    <script>
                        alert('Error, No se modificó al usuario');
                    </script>";
                }
            }else{
                echo"
                <script>
                    alert('Error, contraseñas diferentes');
                </script>";
            }
        }
        
           
    }

?>


