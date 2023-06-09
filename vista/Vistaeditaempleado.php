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
    <h1>EDITAR EMPLEADO</h1>
        <form role="form" method="get">
            <?php 
                $reg=mysqli_fetch_array($res);
            ?>
            <input class="form-control" type="hidden" name="cod" id="cod" value='<?=$reg[0];?>'>


            <div class="form-group">
                <label>CARGO</label><br>
                <input type="text" class="form-control" name="cargo" readonly value='<?=$reg['cargo'];?>'>
            </div>

            <div class="form-group">
                <label>CARNET</label><br>
                <input type="text" class="form-control" name="carnet" value='<?=$reg['carnet_e'];?>'>
            </div>
            <div class="form-group">
                <label>NOMBRE</label><br>
                <input type="text" class="form-control" name="nombre" value='<?=$reg['nombre_e'];?>'>
            </div>
            <div class="form-group">
                <label>PATERNO</label><br>
                <input type="text" class="form-control" name="paterno" value='<?=$reg['paterno_e'];?>'>
            </div>
            <div class="form-group">
                <label>MATERNO</label><br>
                <input type="text" class="form-control" name="materno" value='<?=$reg['materno_e'];?>'>
            </div>
            <div class="form-group">
                <label>DIRECCION</label><br>
                <input type="text" class="form-control" name="direccion" value='<?=$reg['direccion_e'];?>'>
            </div>
            <div class="form-group">
                <label>TELEFONO</label><br>
                <input type="text" class="form-control" name="telefono" value='<?=$reg['telefono_e'];?>'>
            </div>            
            <div class="form-group">
                <label>FECHA NACIMIENTO</label><br>
                <input type="date" class="form-control" name="fechanac" value='<?=$reg['fechanac_e'];?>'>
            </div>            

            <div class="form-group">
                <label>GENERO</label><br>
                <select name="genero" id="genero" class="form-control">
                    <?php
                        if($reg['genero_e']=="F"){
                            echo "<option value='F'>Femenino</option>";
                            echo "<option value='M'>Masculino</option>";

                        }else{
                            echo "<option value='M'>Masculino</option>";
                            echo "<option value='F'>Femenino</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" value="Editar" name="Editar" id="Editar" class="btn btn-success">
                <a href="../controlador/listaempleado.php" class="btn btn-danger">CANCELAR</a>
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