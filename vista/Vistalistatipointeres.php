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
    <h1>LISTADO TIPOS DE INTERES</h1><br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <TH scope="col">Id TIPO</TH>
                    <TH scope="col">TIPO INTERES</TH>
                    <TH scope="col" colspan="2">OPERACIONES</TH>
                </tr>
            </thead>
            <tbody> 
                <?php
                    while($reg=mysqli_fetch_array($res)){
                ?>  
                    <div class="form_group">
                        <tr align="center" valign="middle">
                        <td><?php echo $reg[0];?></td>
                        <td><?php echo $reg['tipoi'];?></td>
                        
                        <td><a href='editatipointeres.php?cod=<?php echo $reg[0];?>' class="btn btn-success"><i class="bi bi-eraser"></i></a></td>
                            
                        <td><a href='eliminatipointeres.php?cid=<?php echo $reg[0];?>' class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                <?php
                    }
                ?>
            </tbody>
        </table>
            <tr>
                <td><a href="../controlador/registrartipointeres.php" class="btn btn-info">NUEVO TIPO INTERES</a></td>
                <td><a href="../controlador/busquedatipointeres.php" class="btn btn-warning">BUSCAR TIPO INTERES</a></td>
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