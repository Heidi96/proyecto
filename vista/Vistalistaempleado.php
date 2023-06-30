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
    <h1>LISTADO DE EMPLEADOS</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <TH scope="col">CARGO</TH>
                    <TH scope="col">CARNET</TH>
                    <TH scope="col">NOMBRE COMPLETO</TH>
                    <TH scope="col">DIRECCION</TH>
                    <TH scope="col">TELEFONO</TH>
                    <TH scope="col">FECHA NACIMIENTO</TH> 
                    <TH scope="col">GENERO</TH>
                    <TH scope="col" colspan="2">OPERACIONES</TH>
                </tr>
            </thead>
            <tbody>
            <?php
                    while($r=mysqli_fetch_array($res)){
            ?>
                    <div class="form_group">
                        <tr align="center" valign="middle">
                            <td><?php echo $r[10];?></td>
                            
                            <td><?php echo $r[2];?></td>
                            <td><?php echo $r[3]." ".$r[4]." ".$r[5];?></td>

                            <td><?php echo $r[6];?></td>
                            <td><?php echo $r[7];?></td>
                            <td><?php echo $r[8];?></td>
                            <td><?php echo $r[9];?></td>

                            <td><a href='editaempleado.php?cod=<?php echo $r[0];?>' class="btn btn-success"><i class="bi bi-eraser"></i></a></td>
                            
                            <td><a href='eliminaempleado.php?cid=<?php echo $r[0];?>' class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
            <?php
                }
            ?>
            </tbody>
        </table>
            <tr>
                <td><a href="../controlador/registrarempleado.php" class="btn btn-info">Nuevo Empleado</a></td>
                <td><a href="../controlador/busquedaempleado.php" class="btn btn-warning">Buscar Empleado</a></td>
                <td><a href="../reportes/reporteempleado.php" class="btn btn-secondary">Reporte Empleado</a></td>
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