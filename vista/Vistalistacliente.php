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
    <div class="col-1"></div>
    <div class="col-10"><br>
    <h1>LISTADO DE CLIENTES</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <TH scope="col">Id Cliente</TH>
                    <TH scope="col">CARNET</TH>
                    <TH scope="col">NOMBRE COMPLETO</TH>
                    <TH scope="col">DIRECCION</TH>
                    <TH scope="col">TELEFONO</TH>
                    <TH scope="col">GENERO</TH>
                    <TH scope="col" colspan="2">OPERACIONES</TH>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($reg=mysqli_fetch_array($res)){
                ?>

                        <div class="form_group">
                        <tr align="center" valign="middle">
                            <td><?php echo $reg['id_cliente'];?></td>
                         
                            <td><?php echo $reg['carnet_cliente'];?></td>
                            <td><?php echo $reg['nombre_cliente']." ".$reg['paterno_cliente']." ".$reg['materno_cliente'];?></td>
                            <td><?php echo $reg['direccion_cliente'];?></td>
                            <td><?php echo $reg['telefono_cliente'];?></td>
                            <td><?php echo $reg['genero_cliente'];?></td>

                            <td><a href='editacliente.php?cod=<?php echo $reg[0];?>' class="btn btn-success"><i class="bi bi-eraser"></i></a></td>
                            
                            <td><a href='eliminacliente.php?cid=<?php echo $reg[0];?>' class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <table>
            <tr>
                <td><a href="../controlador/registrarcliente.php" class="btn btn-info">Nuevo Cliente</a></td>
                <td><a href="../controlador/busquedacliente.php" class="btn btn-warning">Buscar Cliente</a></td>
                <td><a href="../reporte/reportecliente.php" class="btn btn-secondary">Reporte Cliente</a></td>
                <td><a href="../index.php" class="btn btn-danger">SALIR</a></td>
            </tr>
        </table>
    </div>
    <div class="col-1"></div>
    </div>
</div>
    <br><br><br><br><br><br>
    <br><br>

    <?php
        include("pie.php");
    ?>
</body>
</html>

