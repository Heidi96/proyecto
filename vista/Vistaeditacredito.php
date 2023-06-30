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
    <h1>EDITAR CREDITO</h1>
        <form role="form" method="get">
            <?php 
                $reg=mysqli_fetch_array($res);
            ?>
            <input class="form-control" type="hidden" name="cod" id="cod" value='<?=$reg[0];?>'>

            <div class="form-group">
                <label>CLIENTE</label><br>
                <input type="text" class="form-control" name="cliente" readonly value='<?=$reg['nombre_cliente'];?>'>
            </div>
  
            <div class="form-group">
                <label>TIPO PRENDA</label><br>
                <input type="text" class="form-control" name="tipo" readonly value='<?=$reg['tipo'];?>'>
            </div>

            <div class="form-group">
                <label>MARCA</label><br>
                <input type="text" class="form-control" name="marca" readonly value='<?=$reg['marca'];?>'>
            </div>
            <div class="form-group">
                <label>COLOR</label><br>
                <input type="text" class="form-control" name="color" readonly value='<?=$reg['color'];?>'>
            </div>
            <div class="form-group">
                <label>DETALLE</label><br>
                <input type="text" class="form-control" name="detalle" readonly value='<?=$reg['detalle'];?>'>
            </div>            
            <div class="form-group">
                <label>FECHA INICIO</label><br>
                <input type="date" class="form-control" name="fechai" value='<?=$reg['fechainicio'];?>'>
            </div>
            <div class="form-group">
                <label>FECHA FIN</label><br>
                <input type="date" class="form-control" name="fechaf" value='<?=$reg['fechafin'];?>'>
            </div>
            <div class="form-group">
                <label>TIPO CREDITO</label><br>
                <input type="text" class="form-control" name="tipoc" readonly value='<?=$reg['tipoc'];?>'>
            </div>
            <div class="form-group">
                <label>TIPO INTERES</label><br>
                <input type="text" class="form-control" name="tipoi" readonly value='<?=$reg['tipoi'];?>'>
            </div>
            <div class="form-group">
                <label>MONTO CREDITO</label><br>
                <input type="text" class="form-control" name="monto" value='<?=$reg['monto'];?>'>
            </div>
            

            <div class="form-group">
                <input type="submit" value="Editar" name="Editar" id="Editar" class="btn btn-success">
                <a href="../controlador/listacredito.php" class="btn btn-danger">CANCELAR</a>
            </div>

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