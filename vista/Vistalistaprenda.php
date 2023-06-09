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
    <div class="col-10">
    <h1>LISTADO DE PRENDAS</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <TH scope="col">TIPO PRENDA</TH>
                    <TH scope="col">MARCA</TH>
                    <TH scope="col">COLOR</TH>
                    <TH scope="col">DETALLE</TH>
                    <TH scope="col" colspan="2">OPERACIONES</TH>
                </tr>
            </thead>
            <tbody>
            <?php
                    while($r=mysqli_fetch_array($res)){
            ?>
                    <div class="form_group">
                        <tr align="center" valign="middle">
                            <td><?php echo $r[5];?></td>
                            
                            <td><?php echo $r[2];?></td>
                            <td><?php echo $r[3]?></td>
                            <td><?php echo $r[4];?></td>

                            <td><a href='editaprenda.php?cod=<?php echo $r[0];?>' class="btn btn-success"><i class="bi bi-eraser"></i></i></i></a></td>
                            
                            <td><a href='eliminaprenda.php?cid=<?php echo $r[0];?>' class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
            <?php
                }
            ?>
            </tbody>
        </table>
            <tr>
                <td><a href="../controlador/registrarprenda.php" class="btn btn-info">Nueva Prenda</a></td>
                <td><a href="../controlador/busquedaprenda.php" class="btn btn-warning">Buscar Prenda</a></td>
                <td><a href="../reportes/reporteprenda.php" class="btn btn-secondary">Reporte Prenda</a></td>
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

