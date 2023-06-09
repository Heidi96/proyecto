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
        <h1>CARGOS</h1>
        <div class="form_group">
            <label>Cargo</label><br>
            <input class="form-control" type="text" name="cargo" id="cargo">
        </div>

        <div class="form_group"><center>
            <input type="submit" name="Buscar" value="Buscar" id="Buscar" class="btn btn-primary">
        </center>
        </div>

        <table class="table">
            <thead class="thead-dark">
            <tr align="center">
                    <th scope="col">CARGO</th>
                    <th scope="col" colspan="2"><label>OPERACIONES</label></th>
            </tr>