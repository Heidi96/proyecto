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
    <h1>EDITA CARGO</h1>
        <?php 
            $reg=mysqli_fetch_array($res);
        
        ?>
        <form action="" method="get">
            <input type="text" name="cod" id="cod" hidden value="<?php echo $reg[0];?>">

            <label for="">CARGO</label>
            <input type="text" name="cargo" id="cargo" value="<?php echo $reg[1];?>" class="form-control"> <br>

            <input type="submit" value="Editar" name="Editar" class="btn btn-success" id="Editar">

            <a href="../controlador/listacargo.php" class="btn btn-danger">CANCELAR</a>
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