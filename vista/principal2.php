 <?php
    include("head2.php");
?>
<div class="page-content">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar" style="display: block;">
                <ul class="nav">

                    <li class="submenu">
                        <a href="../vista/principal2.php">
                            <i class="bi bi-list-ul">CLIENTE </i>
                            <i class="bi bi-caret-down"></i>
                        </a>

                            <ul>
                                <li><a href="../controlador/registrarcliente.php">NUEVO CLIENTE</a></li>
                                <li><a href="../controlador/listacliente.php">LISTA CLIENTE</a></li>
                                <li><a href="../controlador/busquedacliente.php">BUSCAR CLIENTE</a></li>
                                <li><a href="../controlador/reportecliente.php">REPORTE CLIENTE</a></li>
                            </ul>
                    </li>

                    <li class="submenu">
                        <a href="../vista/principal2.php">
                            <i class="bi bi-list-ul">PRENDA</i>
                            <i class="bi bi-caret-down"></i>
                        </a>

                        <ul>
                            <li><a href="../controlador/registrarprenda.php">NUEVA PRENDA</a></li>
                            <li><a href="../controlador/listaprenda.php">LISTA PRENDA</a></li>
                            <li><a href="../controlador/busquedaprenda.php">BUSCAR PRENDA</a></li>
                            <li><a href="../controlador/reporteprenda.php">REPORTE PRENDA</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-12">
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
<?php
    include("pie.php");
?>