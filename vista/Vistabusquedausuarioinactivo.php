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
        <h1>USUARIO</h1>
        <div class="form_group">
            <label>Buscar Usuario inactivo por el nombre del empleado</label><br>
            <input class="form-control" type="text" name="ci" id="ci">
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
                    <th scope="col">NOMBRE EMPLEADO</th>
                    <th scope="col">NOMBRE USUARIO</th>
                    <th scope="col">NIVEL</th>
                    <th scope="col" colspan="2"><label>OPERACIONES</label></th>
            </tr>