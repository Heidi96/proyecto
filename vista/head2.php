<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>


</head>
<body style="background-color: #D3D3D3; color: #ffffff; padding: 15px;">
    <div class="header" style="background-color: #13585D;color: #ffffff; padding: 10px; ">
        <div class="container">
            <div class="row">
            <!--logo-->
            <div class="col-10">
                <div class="logo" style="height:120px;">
                    <h1><a href="../controlador/imagenesprendas/logo.jpeg">EMPRESA CREDIBOL</a></h1>
                </div>
            </div>
            <!-- <div class="col-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group form">
                            <input type="text" class="form-control" placeholder="BUSCAR...">
                            <span class="input group-btn">
                                <button class="btn btn-success" typer="button">BUSCAR</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-2">
                <div class="h4">
                    <?php
                        include("../controlador/nivel.php");
                    ?>
                    <?php
                        echo "
                            <br><font color='silver'>".$_SESSION['nombre']."</font>
                        ";
                    ?>
                    <a href="../controlador/salir.php">SALIR</a>
                </div>
                
            </div>
            </div>
        </div>
    </div>
