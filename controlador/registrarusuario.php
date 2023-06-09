<?php
//sale de la carpeta controlador y entra a la carpeta vista, busca el form de registro   
    include("../modelo/empleado.php");
    $car=new empleado("","","","","","","","","","");
    $res=$car->listarempleado();

    include("../vista/FormularioRegistroUsuario.php");
    if(isset($_POST['REGISTRAR'])){

        $empleado=$_POST['empleado'];
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contra'];
        $contraseña1=$_POST['contra1'];
        $nivel=$_POST['nivel'];
        $estado='Activo';
        if(strcmp($contraseña,$contraseña1)==0){
            include("../modelo/usuario.php");
            $usu=new usuario("","$empleado","$usuario","$contraseña","$nivel","$estado");
            $resu=$usu->buscarusuario($empleado);
            $resu1=mysqli_num_rows($resu);
            if ($resu1!=0){
                echo"
                <script>
                    alert('El usuario ya existe');
                </script>";

            } else {
                $pa=md5($contraseña);
                $usu=new usuario("","$empleado","$usuario","$pa","$nivel","$estado");
                $res=$usu->grabarusuario();
                if ($res){
                    echo"
                    <script>
                        alert('Registro exitoso');
                        location.href='listausuario.php';
                    </script>";
                } else {
                    echo"
                    <script>
                        alert('Error, No se registró al usuario');
                    </script>";
                }
            }
        } else {
            echo"
            <script>
                alert('Error, contraseñas distintas');

            </script>";
        }
        
    }
?>