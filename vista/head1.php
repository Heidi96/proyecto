<!DOCTYPE html>
<html>
<head>
    <title>CREDIBOL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <link href="../css/styles.css" rel="stylesheet" >

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
    .logo h1 {
        font-family: fantasy, monospace;
        color: silver;
        font-size: 500%;
        font-weight: 600;
        font-style: italic;
    }
    </style>

    <style>
    .h4 {
        position: static;
        top: 15;
        right: 5000;
        left: 1000;
    }
    </style>
    <style>
        .dropdown-menu {
            background-color: #696969; /* Cambia el color de fondo aquí */
        }
        .dropdown-item {
            color: #ffffff; /* Cambia el color del texto aquí */
        }
    </style>
    <style>
        body {
            margin-bottom: 10000px; /* Agrega un margen inferior al cuerpo para dar espacio al footer */
        }
        footer {
            position: static;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: #000;
            color: #fff;
            text-align: center;
            height:500px;
        }
    </style>

</head>
<body style="background-color: #D3D3D3; color: #ffffff; padding: 15px;">
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand">
            <img src="../controlador/imagenesprendas/logo.jpeg" alt="Logo" style="width:240px;">
        </a>
        <div class="container">
            <div class="row">
            <!--logo-->   
                <div class="col-xl-10">
                    <div class="logo" style="height:120px;"><br>
                        <h1>EMPRESA CREDIBOL</h1>                  
                        <!-- <a class="navbar-brand" >
                            <img id="logo" src="../controlador/imagenesprendas/logo2.jpeg" alt="Logo" >
                        </a> -->
                    </div>
                </div>
                <!-- <div class="col-1"> -->
                <div class="col-xl-2">
                    <div class="h4">
                        <?php
                            include("../controlador/nivel.php");
                        ?>
                        <?php
                            echo "
                                <br><font color='silver'>".$_SESSION['nombre']."</font>
                            ";
                        ?>
                        
                       <!--  <a href="../controlador/salir.php">SALIR</a> -->
                       <td><a href="../controlador/salir.php" class="btn btn-light">SALIR</a></td>
                    </div>
                </div>
                
            </div>
            
        </div>
    </nav>
    
    
    