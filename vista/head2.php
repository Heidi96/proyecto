<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  
    <title></title>


</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
            <!--logo-->
            <div class="col-5">
                <div class="logo" style="heigth:240px;">
                    <h1><a href="../principal2.html">EMPRESA CREDIBOL</a></h1>
                </div>
            </div>
            <div class="col-5">
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
            </div>
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
                </div>
                <a href="../controlador/salir.php">SALIR</a>
            </div>
        </div>
    </div>
</body>
</html>