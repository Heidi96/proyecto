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
    <h1>EDITAR PRENDA</h1>
        <form role="form" method="get">
            
            
            <?php 
                $reg=mysqli_fetch_array($res);
            ?>
            <input class="form-control" type="hidden" name="cod" id="cod" value='<?=$reg[0];?>'>
            <div class="form-group">
                <label>CLIENTE</label><br>
                <input type="text" class="form-control" name="cliente" readonly value='<?=$reg['nombre_cliente'].' '.$reg['paterno_cliente'].' '.$reg['materno_cliente'];?>'>
            </div>
            <div class="form-group">
                <label>CARNET</label><br>
                <input type="text" class="form-control" name="carnet" readonly value='<?=$reg['carnet_cliente'];?>'>
            </div>
            <div class="form-group">
                <label>TIPO PRENDA</label><br>
                <input type="text" class="form-control" name="tipo" readonly value='<?=$reg['tipo'];?>'>
            </div>

            <div class="form-group">
                <label>MARCA</label><br>
                <input type="text" class="form-control" name="marca" value='<?=$reg['marca'];?>'>
            </div>
            <div class="form-group">
                <label>COLOR</label><br>
                <input type="text" class="form-control" name="color" value='<?=$reg['color'];?>'>
            </div>
            <div class="form-group">
                <label>DETALLE</label><br>
                <input type="text" class="form-control" name="detalle" value='<?=$reg['detalle'];?>'>
            </div>            


            <div class="form-group">
                <input type="submit" value="Editar" name="Editar" id="Editar" class="btn btn-success">
                <a href="../controlador/listaprenda.php" class="btn btn-danger">CANCELAR</a>
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