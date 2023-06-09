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
    <h1>LISTADO DE CARGOS</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <TH scope="col">Id Cargo</TH>
                    <TH scope="col">CARGO</TH>
                    <TH scope="col" colspan="2">OPERACIONES</TH>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($reg=mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>".$reg[0]."</td>";
                        echo "<td>".$reg['cargo']."</td>";


                        echo"<td><a href='../controlador/editacargo.php?cod=$reg[0]' class='btn btn-success'>EDITAR</a></td>";

                        echo"<td><a href='../controlador/eliminacargo.php?cid=$reg[id_cargo]' class='btn btn-danger'>ELIMINAR</a>";

                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
            <tr>
                <td><a href="../controlador/registrarcargo.php" class="btn btn-info">Nuevo Cargo</a></td>
                <td><a href="../controlador/busquedacargo.php" class="btn btn-warning">Buscar Cargo</a></td>
                <td><a href="../reportes/reportecargo.php" class="btn btn-secondary">Reporte Cargo</a></td>
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