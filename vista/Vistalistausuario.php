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
<div class="container">
    <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
    <h1>LISTADO DE USUARIOS</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>

                    <TH scope="col">EMPLEADO</TH>
                    <TH scope="col">USUARIO</TH>
                    <TH scope="col">NIVEL</TH>
                    <TH scope="col">ESTADO</TH>
                    <TH scope="col" colspan="2">OPERACIONES</TH>
                </tr>
            </thead>
            <tbody>
            <?php
                    while($r=mysqli_fetch_array($res)){
            ?>
                    <div class="form_group">
                        <tr align="center" valign="middle">
                            <td><?php echo $r['nombre_e']." ".$r['paterno_e']." ".$r['materno_e'];?></td>
                            <td><?php echo $r[2];?></td>
                            <td>
                                <?php
                                if($r['4']==1){
                                    echo 'Administrador';
                                }else{
                                    if($r['4']==2){
                                        echo 'Secretario';
                                    }else{
                                        echo 'Vendedor';
                                    }
                                }
                                ?>
                            </td>
                            <td><?php echo $r[5];?></td>
                            <td><a href='editausuario.php?cod=<?php echo $r[0];?>' class="btn btn-success">EDITA<i class="glyphicon glyphicon-edit"></i></a></td>
                            
                            <td><a href='eliminausuario.php?cid=<?php echo $r[0];?>' class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></td>
            <?php
                }
            ?>
            </tbody>
        </table>
            <tr>
                <td><a href="../controlador/registrarusuario.php" class="btn btn-info">Nuevo Usuario</a></td>
                <td><a href="../controlador/busquedausuario.php" class="btn btn-warning">Buscar Usuario</a></td>
                <td><a href="../reportes/reporteusuario.php" class="btn btn-secondary">Reporte Usuario</a></td>
                <td><a href="../controlador/listausuarioinactivo.php" class="btn btn-dark">Lista Usuarios Inactivos</a></td>
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