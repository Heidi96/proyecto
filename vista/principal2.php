 <?php
    include("head1.php");
?>
<div class="page-content">
    <div class="row">

        <div class="col-md-3">
<br>
            <div class="sidebar content-box" style="background-color: #8D9394; color: #ffffff; padding: 5px; width: 300px;">
                <ul class="nav-list"><br>
                        <i class="bi bi-house-fill">  HOME</i><br>
                        <div class="dropdown dropright"><br>
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-list-ul"> CLIENTE </i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../controlador/registrarcliente.php">NUEVO CLIENTE</a>
                                <a class="dropdown-item" href="../controlador/listacliente.php">LISTA CLIENTE</a>
                                <a class="dropdown-item" href="../controlador/busquedacliente.php">BUSCAR CLIENTE</a>
                                <a class="dropdown-item" href="../controlador/reportecliente.php">REPORTE CLIENTE</a>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown dropright">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-list-ul"> PRENDA </i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../controlador/registrarprenda.php">NUEVO PRENDA</a>
                                <a class="dropdown-item" href="../controlador/listaprenda.php">LISTA PRENDA</a>
                                <a class="dropdown-item" href="../controlador/busquedaprenda.php">BUSCAR PRENDA</a>
                                <a class="dropdown-item" href="../controlador/reporteprenda.php">REPORTE PRENDA</a>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown dropright">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-list-ul"> CRÉDITO </i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../controlador/registrarcredito.php">NUEVO CREDITO</a>
                                <a class="dropdown-item" href="../controlador/listacredito.php">LISTA CREDITO</a>
                                <a class="dropdown-item" href="../controlador/busquedacredito.php">BUSCAR CREDITO</a>
                                <a class="dropdown-item" href="../controlador/reportecredito.php">REPORTE CREDITO</a>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown dropright">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" class="form-control">
                                <i class="bi bi-list-ul"> PAGO </i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../controlador/registrarpago.php">NUEVO PAGO</a>
                                <a class="dropdown-item" href="../controlador/listapago.php">LISTA PAGO</a>
                                <a class="dropdown-item" href="../controlador/busquedapago.php">BUSCAR PAGO</a>
                                <a class="dropdown-item" href="../controlador/reportepago.php">REPORTE PAGO</a>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown dropright">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-list-ul"> TIPO DE PRENDA </i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../controlador/registrartipoprenda.php">NUEVO TIPO PRENDA</a>
                                <a class="dropdown-item" href="../controlador/listatipoprenda.php">LISTA TIPO PRENDA</a>
                                <a class="dropdown-item" href="../controlador/busquedatipoprenda.php">BUSCAR TIPO PRENDA</a>
                            </div>
                        </div>
                        <br>
                </ul>
            </div>

        </div>

        

        <div class="col-md-9">
            <div class="row">
                <div class="col-12">
                    <br>
                    <div class="content-box-header">
                        <div class="panel-title">EMPRESA CREDIBOL</div>
                    </div>
                    <div class="content-box-large box-with-header">
                        BIENVENIDOS AL SOFTWARE DE GESTION DE CREDITOS Y COBRANZAS CREDIBOL<br>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<br>
<?php
    include("pie.php");
?>