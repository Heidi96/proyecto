<?php
    session_start();
    if($_SESSION['ingreso']!="si"){
        echo"
        <script>
            alert('INICIAR SESIÓN');
            location.href='control.php';
        </script>";
    }
?>
