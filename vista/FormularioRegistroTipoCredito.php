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
    <h1>REGISTRAR TIPO DE CREDITO</h1><br>
        <form role="form" method="post">
            <div class="form_group"></div>
            
            <label for="">LAPSO DE CREDITO</label>
            <input type="text" class="form-control" name="tipoc" id="tipoc">
            <br>

   
            <input type="submit" name="REGISTRAR" value="REGISTRAR" class="btn btn-success">
            <a href="../controlador/listatipocredito.php" class="btn btn-danger">CANCELAR</a>
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