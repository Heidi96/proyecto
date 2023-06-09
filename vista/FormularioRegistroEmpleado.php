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

    
    <form role="form" method="post">
        <h1>REGISTRAR EMPLEADO</h1><br>
        <div class="form_group"></div>

        <label for="">CARGO</label>
        <select name="cargo" id="cargo" class="form-control"><br>
        <?php
            while($reg=mysqli_fetch_array($res)){
                ?>
                <option value="<?php echo $reg['id_cargo']?>"><?php echo $reg['cargo']?></option>
                <?php
            }
        ?>
        </select>

        <br>
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
        <label for="">FECHA NACIMIENTO</label> 
        <input type="date" class="form-control" class="form-control" name="fecha" id="fecha">
        <br>
        <label for="">GENERO</label><br>
        <input type="radio" name="genero" id="genero" value="F"> Femenino <br>
        <input type="radio" name="genero" id="genero" value="M"> Masculino 
        <br><br>
        
        <input type="submit" name="REGISTRAR" value="REGISTRAR" class="btn btn-success">
        <a href="../controlador/listaempleado.php" class="btn btn-danger">CANCELAR</a>
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