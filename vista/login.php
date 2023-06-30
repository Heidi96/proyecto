<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script type="text/javascript" src="../bootstrap/css/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <title></title>

    <style>
        body {
            background-image: url('../controlador/imagenesprendas/principio8.jpg');  /* Ruta de la imagen de fondo */
            /* background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../controlador/imagenesprendas/principio8.jpg'); */
            background-repeat: no-repeat; /* Evita la repetición de la imagen */
            background-size: cover; /* Ajusta la imagen para cubrir todo el fondo */
            /* filter: brightness(50%); */
            color: #ffffff;
            /* opacity: 0.7; */
            
        }
    </style>

</head>
<body>
    <div class="container">
    <div class="row"> 
    <div class="col-3"></div>
    <div class="col-6"><br><br><br>

            <h1>EMPRESA "CREDIBOL"</h1><br>
            <h2>INGRESO DE USUARIOS</h2>
            <form action="" method="post">
                <label for="">USUARIO</label>
                <input type="text" name="usuario" id="usuario" class="form-control">       
                <label for="">CONTRASEÑA</label>
                <input type="password" class="form-control" name="contra" id="contra">
                <br>
                <input type="submit" name="INGRESAR" value="INGRESAR" class="btn btn-success"><br>
            </form>
        
    </div>
    <div class="col-3"></div>
    </div>
    </div>
</body>
</html>