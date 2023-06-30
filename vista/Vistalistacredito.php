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
    <h1>LISTADO DE CREDITOS</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <TH scope="col">ID CREDITO</TH>
                    <TH scope="col">FECHA INICIO</TH>
                    <TH scope="col">FECHA FIN</TH>
                    <TH scope="col">TIPO CREDITO</TH>
                    <TH scope="col">MONTO CREDITO</TH>
                    <TH scope="col">TIPO INTERES</TH>
                    <TH scope="col">TOTAL CREDITO</TH>
                    <TH scope="col">CLIENTE</TH>
                    <TH scope="col">TIPO PRENDA</TH>
                    <TH scope="col">MARCA</TH>
                    <TH scope="col">COLOR</TH>
                    <TH scope="col">DETALLE</TH>
                    <TH scope="col">ESTADO CREDITO</TH>
                    <TH scope="col" colspan="2">OPERACIONES</TH>
                </tr>
            </thead>
            <tbody>
            <?php
                    while($r=mysqli_fetch_array($res)){
            ?>
                    <div class="form_group">
                        <tr align="center" valign="middle">
                            <td><?php echo $r[0]?></td>
                            <td><?php echo $r[1];?></td>
                            <td><?php echo $r[2];?></td>
                            <td><?php echo $r[3];?></td>
                            <td><?php echo $r[4]?></td>
                            <td><?php echo $r[5];?></td>
                            <td><?php echo $r[6]?></td>
                            <td><?php echo $r[7];?></td>
                            <td><?php echo $r[8];?></td>
                            <td><?php echo $r[9];?></td>
                            <td><?php echo $r[10]?></td>
                            <td><?php echo $r[11];?></td>
                            <td><?php echo $r[12];?></td>

                            <td><a href='editacredito.php?cod=<?php echo $r[0];?>' class="btn btn-success"><i class="bi bi-eraser"></i></a></td>
                            
                            <td><a href='eliminacredito.php?cid=<?php echo $r['id_credito'];?>' class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                    
            <?php
                }
            ?>
            </tbody>
        </table>
            <tr>
                <td><a href="../controlador/registrarcredito.php" class="btn btn-info">Nuevo Credito</a></td>
                <td><a href="../controlador/busquedacredito.php" class="btn btn-warning">Buscar Credito</a></td>
                <td><a href="../reportes/reportecredito.php" class="btn btn-secondary">Reporte Credito</a></td>
                <td><a href="../controlador/listacreditoinactivo.php" class="btn btn-dark">Lista Creditos Inactivos</a></td>
                <td><a href="../index.php" class="btn btn-danger">SALIR</a></td>
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
