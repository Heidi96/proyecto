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
    <h1>EDITAR USUARIO</h1>
        <form role="form" method="get">
            <?php 
                $reg=mysqli_fetch_array($res);
            ?>
            <input class="form-control" type="hidden" name="cod" id="cod" value='<?=$reg[0];?>'>

            <div class="form-group">
                <label>EMPLEADO</label><br>
                <input type="text" class="form-control" name="empleado" readonly value='<?=$reg['nombre_e'].' '.$reg['paterno_e'].' '.$reg['materno_e'];?>'>
            </div>
            <div class="form-group">
                <label>USUARIO</label><br>
                <input type="text" class="form-control" name="usuario" value='<?=$reg['usuario'];?>'>
            </div>
            <div class="form-group">
                <label>NIVEL</label><br>
                <select name="nivel" id="nivel" class="form-control">
                    <?php
                        if($reg['nivel']==1){
                            echo "<option value='1'>Administrador</option>";
                            echo "<option value='2'>Secretario</option>";
                            echo "<option value='3'>Vendedor</option>";
                        }else{
                            echo "<option value='2'>Secretario</option>";
                            echo "<option value='3'>Vendedor</option>";
                            echo "<option value='1'>Administrador</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>CONTRASEÑA</label><br>
                <input type="password" class="form-control" name="contra">
            </div>
            <div class="form-group">
                <label>REPITA CONTRASEÑA</label><br>
                <input type="password" class="form-control" name="contra1">
            </div>
            <div class="form-group">
                <input type="submit" value="Editar" name="Editar" id="Editar" class="btn btn-success">
                <a href="../controlador/listausuario.php" class="btn btn-danger">CANCELAR</a>
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