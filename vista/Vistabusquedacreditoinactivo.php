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
        <form role="form" method="get">
        
        <h1>CREDITO</h1>
        <div class="form_group">
            <label>Credito inactivo por nombre cliente</label><br>
            <input class="form-control" type="text" name="tipo" id="tipo">
        </div>
<br>
        <div class="form_group"><center>
            <input type="submit" name="Buscar" value="Buscar" id="Buscar" class="btn btn-primary">
        </center>
        </div>
<br>
        <table class="table">
            <thead class="thead-dark">
            <tr align="center">
            
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