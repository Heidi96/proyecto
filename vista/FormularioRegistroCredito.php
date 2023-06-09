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

    <h1>REGISTRAR CREDITO</h1><br>
    <form role="form" method="post" enctype="multipart/form-data">
        

        <div class="form_group"></div>
        <label for="">TIPO PRENDA</label>
            <select name="tipo" id="tipo"  class="form-control"><br>
            <?php
                while($reg=mysqli_fetch_array($res)){
                    ?>
                    <option value="<?php echo $reg[0]?>"><?php echo $reg['tipo']?></option>
                    <?php
                }
            ?>
            </select>
        <br>

        <div class="form_group"></div>
        <label for="">CLIENTE</label>
            <select name="cliente" id="cliente"  class="form-control"><br>
            <?php
                while($reg=mysqli_fetch_array($res)){
                    ?>
                    <option value="<?php echo $reg[0]?>"><?php echo $reg['nombre_cliente']." ".$reg['paterno_cliente']." ".$reg['materno_cliente']?></option>
                    <?php
                }
            ?>
            </select>
        <br>

        <label for="">FECHA INICIO CREDITO</label>
        <input type="date" class="form-control" name="fechai" id="fechai">
        <br>
        <label for="">FECHA FIN CREDITO</label>
        <input type="date" class="form-control" name="fechaf" id="fechaf">
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