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
    <div class="col-2"></div>
    <div class="col-8">
    <h1>LISTADO DE CLIENTES</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <TH scope="col">Id Cliente</TH>
                    <TH scope="col">CARNET</TH>
                    <TH scope="col">NOMBRE</TH>
                    <TH scope="col">PATERNO</TH>
                    <TH scope="col">MATERNO</TH>
                    <TH scope="col">DIRECCION</TH>
                    <TH scope="col">TELEFONO</TH>
                    <TH scope="col">GENERO</TH>
                    <TH scope="col" colspan="2">OPERACIONES</TH>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($reg=mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>".$reg['id_cliente']."</td>";
                        echo "<td>".$reg['carnet_cliente']."</td>";
                        echo "<td>".$reg['nombre_cliente']."</td>";
                        echo "<td>".$reg['paterno_cliente']."</td>";
                        echo "<td>".$reg['materno_cliente']."</td>";
                        echo "<td>".$reg['direccion_cliente']."</td>";
                        echo "<td>".$reg['telefono_cliente']."</td>";
                        echo "<td>".$reg['genero_cliente']."</td>";

                        echo"<td><a href='../controlador/editacliente.php?cod=$reg[0]' class='btn btn-success'>EDITAR</a>";

                        echo"<td><a href='../controlador/eliminacliente.php?cid=$reg[id_cliente]' class='btn btn-danger'>ELIMINAR</a>";

                        echo "</tr>";
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
    <div class="col-2"></div>
    
    <br><br>

    <?php
        include("pie.php");
    ?>
</body>
</html>

