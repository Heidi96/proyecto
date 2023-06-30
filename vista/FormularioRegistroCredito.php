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

        <div class="form_group"></div>
        <label for="">CLIENTE / PRENDA</label>
            <select name="prenda" id="prenda"  class="form-control"><br>
            <?php
                while($reg=mysqli_fetch_array($res_prenda)){
                    ?>
                    <option value="<?php echo $reg[0]?>"><?php echo $reg['nombre_cliente']." ".$reg['paterno_cliente']." ".$reg['materno_cliente']." / ".$reg['tipo']." / ".$reg['marca']." / ".$reg['color']?></option>
                    <?php
                }
            ?>
            </select>
        <br>

        <button class="btn btn-dark btn-lg" data-toggle="modal" data-target="registrarprenda.php">
            <a href="../controlador/registrarprenda.php">Agregar Prenda</a>
        </button>
        <br>
        <br>

        <div class="form_group"></div>
        <label for="">LAPSO DE CREDITO</label>
            <select name="tipoc" id="tipoc"  class="form-control"><br>
            <?php
                while($reg=mysqli_fetch_array($res_cre)){
                    ?>
                    <option value="<?php echo $reg[0]?>"><?php echo $reg['tipoc']?></option>
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
        
        <label for="">MONTO DE CREDITO</label>
        <!-- <input type="number" class="form-control" name="monto" id="monto" min=10 max=10000> -->
        <input type="text" class="form-control" name="monto" id="monto">
        <br>

        <label for="">INTERES DE CREDITO [ % ]</label>
            <select name="tipoi" id="tipoi"  class="form-control"><br>
            <?php
                while($reg=mysqli_fetch_array($res_int)){
                    ?>
                    <option value="<?php echo $reg[0]?>"><?php echo $reg['tipoi']?></option>
                    <?php
                    
                }
            ?>
            </select>
        <br>
        <!-- <input type="submit" name="calcular" value="calcular" class="btn btn-success">
        <br> -->

        <!-- <label for="">TOTAL DE CREDITO</label>
         <input type="number" class="form-control" name="total" id="total"> --> 

        <input type="submit" name="REGISTRAR" value="REGISTRAR" class="btn btn-success">
        <a href="../controlador/listacredito.php" class="btn btn-danger">CANCELAR</a>
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