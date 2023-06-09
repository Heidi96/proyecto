<?php
    include("../vista/login.php");
    if(isset($_POST['INGRESAR'])){
        $usu=$_POST['usuario'];
        $contra=$_POST['contra'];
        $pa=md5($contra);
        include("../modelo/usuario.php");
        $usuario=new usuario("","",$usu,$pa,"","");
        $res=$usuario->verificar();
        //consulta si el numero de filas del resultado es distinto de 0
        //al mens que haya un usuario registrado en la BD
        if(mysqli_num_rows($res)!=0){
            session_start();
            $_SESSION['ingreso']="si";
            $res1=mysqli_fetch_array($res);
            $_SESSION['id']=$res1['id_empleado'];
            $_SESSION['nombre']=$res1['usuario'];
            $_SESSION['nivel']=$res1['nivel'];
            header("location:../vista/admin.php");
        }else{
            echo"
            <script>
                alert('Error, usuario y/o contraseñas incorrectos');
                location.href='control.php';
            </script>";
        }

    }
//''''
?>