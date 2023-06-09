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
    <h1>LISTADO TIPOS DE PRENDAS</h1><br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <TH scope="col">Id TIPO</TH>
                    <TH scope="col">TIPO PRENDA</TH>
                    <TH scope="col" colspan="2">OPERACIONES</TH>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($reg=mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>".$reg[0]."</td>";
                        echo "<td>".$reg['tipo']."</td>";


                        echo"<td><a href='../controlador/editatipoprenda.php?cod=$reg[0]' class='btn btn-success'>EDITAR</a></td>";

                        echo"<td><a href='../controlador/eliminatipoprenda.php?cid=$reg[id_tipo]' class='btn btn-danger'>ELIMINAR</a>";

                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
            <tr>
                <td><a href="../controlador/registrartipoprenda.php" class="btn btn-info">NUEVO TIPO PRENDA</a></td>
                <td><a href="../controlador/busquedatipoprenda.php" class="btn btn-warning">BUSCAR TIPO PRENDA</a></td>
                <td><a href="../reportes/reportetipoprenda.php" class="btn btn-secondary">REPORTE TIPO PRENDA</a></td>
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