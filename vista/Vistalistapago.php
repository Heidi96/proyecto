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
    <h1>LISTADO DE PAGOS</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <TH scope="col">FECHA PAGO</TH>
                    <TH scope="col">CLIENTE</TH>
                    <TH scope="col">TIPO CONTRATO</TH>
                    <TH scope="col">TIPO PRENDA</TH>
                    <TH scope="col">CREDITO TOTAL</TH>
                    <TH scope="col">CUOTA DIARIA (30 dias)</TH>
                    <TH scope="col">PAGO DIAS</TH>
                    <TH scope="col">MONTO CANCELADO</TH>
                    <TH scope="col">SALDO A DEBER</TH>
                    <TH scope="col" colspan="2">OPERACIONES</TH>
                </tr>
            </thead>
            <tbody>
            <?php
                    while($r=mysqli_fetch_array($res)){
            ?>
                    <div class="form_group">
                        <tr align="center" valign="middle">
                            <td><?php echo $r[0];?></td>
                            <td><?php echo $r[1];?></td>
                            <td><?php echo $r[2];?></td>
                            <td><?php echo $r[3];?></td>
                            <td><?php echo $r[4]?></td>
                            <td><?php echo $r[5];?></td>
                            <td><?php echo $r[6];?></td>
                            <td><?php echo $r[7];?></td>
                            <td><?php echo $r[8];?></td>

                            <td><a href='editapago.php?cod=<?php echo $r[0];?>' class="btn btn-success"><i class="bi bi-eraser"></i></a></td>
                            
                            <td><a href='eliminapago.php?cid=<?php echo $r[0];?>' class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                    
            <?php
                }
            ?>
            </tbody>
        </table>
            <tr>
                <td><a href="../controlador/registrarpago.php" class="btn btn-info">Nuevo Pago</a></td>
                <td><a href="../controlador/busquedapago.php" class="btn btn-warning">Buscar Pago</a></td>
                <td><a href="../reportes/reportepago.php" class="btn btn-secondary">Reporte Pago</a></td>

            </tr>
    </div>
    <div class="col-1"></div>
    </div>
    </div>
    <br><br>
    <?php
        include("pie.php");
    ?>
</body>
</html>
