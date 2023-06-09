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
        <h1>REGISTRAR TIPO PRENDA</h1><br>
        <div class="form_group"></div>

        <label for="">TIPO PRENDA</label>
        <select name="tipo" id="tipo" class="form-control"><br>
            <?php
                while($reg=mysqli_fetch_array($res)){
                    ?>
                    <option value="<?php echo $reg['id_tipo']?>"><?php echo $reg['tipo']?>
                    </option> 
                    <?php
                }
               /////como hacer q lo seleccionado habilite 
                if($reg['tipo']=='JOYA'){
                    ?><label for="">MARCA</label>
                    <input type="text" class="form-control" name="marca" id="marca"><?php
                }else{
                    if($reg['tipo']=='LAPTOP'){
                        ?><label for="">MARCA</label>
                        <input type="text" class="form-control" name="marca" id="marca"><?php
                    }
                }
                ////
                
            ?>

        </select>


        <br>
        <label for="">MARCA</label>
        <input type="text" class="form-control" name="marca" id="marca">
        <br>
        <label for="">COLOR</label>
        <input type="text" class="form-control" name="color" id="color">
        <br>
        <label for="">DETALLE</label> 
        <input type="text" class="form-control" name="detalle" id="detalle">
        <br>

        
        <input type="submit" name="REGISTRAR" value="REGISTRAR" class="btn btn-success">
        <a href="../controlador/listaprenda.php" class="btn btn-danger">CANCELAR</a>
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