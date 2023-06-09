
<?php
    include("../controlador/nivel.php");
        include("head1.php");
        if($_SESSION['nivel']==1){
            header("location:principal1.php");

        }else{
            if($_SESSION['nivel']==2){
                header("location:principal2.php");
            }else{
                //header("location:principal3.php");
                echo"<h1>eres vend</h1>";
            }
        }
?>
