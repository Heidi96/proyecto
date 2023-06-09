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

    <h1>REGISTRAR USUARIO</h1><br>
    <form role="form" method="post" enctype="multipart/form-data">
        <div class="form_group"></div>
        <label for="">EMPLEADO</label>
            <select name="empleado" id="empleado"  class="form-control"><br>
            <?php
                while($reg=mysqli_fetch_array($res)){
                    ?>
                    <option value="<?php echo $reg[0]?>"><?php echo $reg['nombre_e']." ".$reg['paterno_e']." ".$reg['materno_e']?></option>
                    <?php
                }
            ?>
            </select>
        <br>
        
        <label for="">USUARIO</label>
        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Nombre Usuario">
        <br>
        <label for="">CONTRASEÑA</label> 
        <input type="password" class="form-control" name="contra" id="contra">
        <br>
        <label for="">REPITA CONTRASEÑA</label> 
        <input type="password" class="form-control" name="contra1" id="contra1">
        <br>
        <label for="">NIVEL
            <select class="form-control" name="nivel" id="nivel">
                <option value="1">Administrador</option>
                <option value="2">Secretario</option>
                <option value="3">Vendedor</option>
            </select>
        </label> 

        <br>

        <input type="submit" name="REGISTRAR" value="REGISTRAR" class="btn btn-success">
        <a href="../controlador/listausuario.php" class="btn btn-danger">CANCELAR</a>
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