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
    <h1>EDITA CLIENTE</h1>
        <?php 
            $reg=mysqli_fetch_array($res);
        
        ?>
        <form action="" method="get">
            <input type="text" name="cod" id="cod" hidden value="<?php echo $reg[0];?>">

            <label for="">CARNET</label>
            <input type="text" name="ci" id="ci" value="<?php echo $reg[1];?>" class="form-control"> <br><br>
            <label for="">NOMBRE</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $reg[2];?>" class="form-control"> <br><br>
            <label for="">PATERNO</label>
            <input type="text" name="paterno" id="paterno" value="<?php echo $reg[3];?>" class="form-control"> <br><br>
            <label for="">MATERNO</label>
            <input type="text" name="materno" id="materno" value="<?php echo $reg[4];?>" class="form-control"> <br><br>
            <label for="">DIRECCION</label>
            <input type="text" name="direccion" id="direccion" value="<?php echo $reg[5];?>" class="form-control"> <br><br>
            <label for="">TELEFONO</label>
            <input type="text" name="telefono" id="telefono" value="<?php echo $reg[6];?>" class="form-control"> <br><br>
            <label for="">GENERO</label><br>
            <input type="text" name="genero" id="genero" value="<?php echo $reg[7];?>" class="form-control">Femenino <br>

            <input type="submit" value="Editar" name="Editar" class="btn btn-success" id="Editar">

            <a href="../controlador/listacliente.php" class="btn btn-danger">CANCELAR</a>
        </form>




    <div class="col-3"></div>
    </div>
</div>
<br><br>

<?php
    include("pie.php");
?>
</body>
</html>