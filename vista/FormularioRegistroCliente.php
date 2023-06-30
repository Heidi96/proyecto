<?php
    include("head1.php");
    if($_SESSION['nivel']==1){
        include("encabezado1.php");
    }else{
        if($_SESSION['nivel']==2){
            include("encabezado2.php");
        }
    }
?>
<body>
    <div class="container">
    <div class="row">
    <div class="col-3"></div>
    <div class="col-6">

    <h1>REGISTRAR CLIENTE</h1><br>
    <form method="post">
        <label for="">CARNET</label>
        <input type="text" class="form-control" name="ci" id="ci">
        <br>
        <label for="">NOMBRE</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
        <br>
        <label for="">PATERNO</label> 
        <input type="text" class="form-control" name="paterno" id="paterno">
        <br>
        <label for="">MATERNO</label> 
        <input type="text" class="form-control" name="materno" id="materno">
        <br>
        <label for="">DIRECCION</label> 
        <input type="text" class="form-control" name="direccion" id="direccion">
        <br>
        <label for="">TELEFONO</label> 
        <input type="text" class="form-control" class="form-control" name="telefono" id="telefono">
        <br>
        <label for="">GENERO</label><br>
        <input type="radio" name="genero" id="genero" value="F"> Femenino <br>
        <input type="radio" name="genero" id="genero" value="M"> Masculino 
        <br><br>
 

        <input type="submit" name="registrarCliente" value="REGISTRAR" class="btn btn-success">
        <a href="../controlador/listacliente.php" class="btn btn-danger">CANCELAR</a>
    </form>
    </div>
    <div class="col-3"></div>
    </div>
    </div>
    <br><br>

<?php
    include("pie.php");
?>
</body>
</html>