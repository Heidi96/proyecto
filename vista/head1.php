<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title></title>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
            <!--logo-->
            <div class="col-6">
                <div class="logo" style="heigth:240px;"><br>
                    <h1><a href="../principal1.html">EMPRESA CREDIBOL</a></h1>
                </div>
            </div>
            <div class="col-5">
                <div class="row">
                    <div class="col-lg-12"><br>
                        <div class="input-group form">
                            <input type="text" class="form-control" placeholder="BUSCAR...">
                            <span class="input group-btn">
                                <button class="btn btn-success" typer="button">BUSCAR</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="h4">
                    <?php
                        include("../controlador/nivel.php");
                    ?>
                    <?php
                        echo "
                            <br><font color='silver'>".$_SESSION['nombre']."</font>
                        ";
                    ?>
                </div>
                <a href="../controlador/salir.php">SALIR</a>
            </div>
        </div>
    </div>
</body>
</html>