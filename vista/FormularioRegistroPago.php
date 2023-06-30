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
    <div class="col-3"></div>
    <div class="col-6">

    
    <form role="form" method="post">
        <h1>REGISTRAR PAGO</h1><br>
        <div class="form_group"></div>
        <label for="">CLIENTE</label>
        <select name="cliente" id="cliente" class="form-control"><br>
            <?php
                while($reg=mysqli_fetch_array($res1)){
                    ?>
                    <option value="<?php echo $reg['id_cliente']?>"><?php echo $reg['nombre_cliente']." ".$reg['paterno_cliente']." ".$reg['carnet_cliente']?>
                    </option> 
                    <?php
                } 
            ?>
        </select>
<br>
        <!-- lista de creditos -->
        <br>
        <div class="form_group"></div>
        <label for="credito">CREDITO</label>
            <select name="credito" id="credito" class="form-control">
                <?php while ($reg = mysqli_fetch_array($res_cre)) { ?>
                    <option value="<?php echo $reg[0]?>" data-totalcredito="<?php echo $reg['totalcredito'] ?>">
                        <?php echo $reg['nombre_cliente']." / ".$reg['tipoc']." / ".$reg['tipo']." / ".$reg['marca']." / ".$reg['color']." / ".$reg['monto']." / CREDITO TOTAL DE : ".$reg['totalcredito'] ?>
                    </option>
                <?php } ?>
            </select>
<br>
        <!-- Saca el valor del credito dado, del cliente seleccionado -->
        <!-- <label for="saldo">TOTAL CREDITO:</label>
        <span id="saldo"></span> -->

        <label for="saldo_input">TOTAL CREDITO :</label>
        <input type="number" id="saldo" name="saldo" readonly>

        <script>
            var selectElement = document.getElementById("credito");
            /* var saldoElement = document.getElementById("saldo"); */
            var saldoInput = document.getElementById("saldo");

            selectElement.addEventListener("change", function() {
                var selectedOption = selectElement.options[selectElement.selectedIndex];
                var totalCreditoValue = selectedOption.dataset.totalcredito;

                saldoInput.textContent = totalCreditoValue;
                saldoInput.value = totalCreditoValue;
            });
        </script>
        <br>
        <!-- El credito lo divide en 30 dias, el resultado sera por cuotas diarias -->
        <!-- El total del credito / 30 dias = cuanto debe pagar por dia -->
        <!-- <label for="deuda_por_dia">DEUDA POR DIA:</label>
        <span id="deuda_por_dia"></span> -->

        <label for="deuda_por_dia_input">DEUDA POR DIA:</label>
        <input type="text" id="deuda_por_dia" name="deuda_por_dia" readonly>

        <script>
            var selectElement = document.getElementById("credito");
            /* var deudaPorDiaElement = document.getElementById("deuda_por_dia"); */
            var deudaPorDiaInput = document.getElementById("deuda_por_dia");

            selectElement.addEventListener("change", function() {
                var selectedOption = selectElement.options[selectElement.selectedIndex];
                var totalCreditoValue = selectedOption.dataset.totalcredito;
                var daysInMonth = new Date(new Date().getFullYear(), new Date().getMonth() + 1, 0).getDate();
                var deudaPorDia = totalCreditoValue / daysInMonth;

                deudaPorDiaInput.textContent = deudaPorDia.toFixed(2);
                deudaPorDiaInput.value = deudaPorDia.toFixed(2);
            });
        </script>
<br><br>
        <!-- Lista dias del mes -->
        <label for="dias_mes">CANTIDAD DE DÍAS DEL MES:</label>
        <select name="dias_mes" id="dias_mes" class="form-control">
            <?php
            // Generar las opciones del select con los números del 1 al 31
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
<br>
        <label for="dia_mes_input">DÍA DEL MES SELECCIONADO:</label>
        <input type="text" id="dia_mes_input" name="dia_mes_input" readonly>

        <script>
            var diasMesSelect = document.getElementById("dias_mes");
            var diaMesInput = document.getElementById("dia_mes_input");

            diasMesSelect.addEventListener("change", function() {
                var selectedValue = diasMesSelect.value;
                diaMesInput.value = selectedValue;
            });
        </script>
        <br>
        <!-- Saca el valor del pago por dia * el numero de dia seleccionado -->
        <!-- <label for="cuota">CUOTA:</label>
        <span id="cuota"></span> -->

        <label for="cuota_input">CUOTA :</label>
        <input type="text" id="cuota" name="cuota" readonly>

        <script>
            var selectElement = document.getElementById("credito");
            var deudaPorDiaElement = document.getElementById("deuda_por_dia");
            var diasMesSelect = document.getElementById("dias_mes");
            /* var cuotaElement = document.getElementById("cuota"); */
            var cuotaInput = document.getElementById("cuota");

            selectElement.addEventListener("change", function() {
                var selectedOption = selectElement.options[selectElement.selectedIndex];
                var totalCreditoValue = selectedOption.dataset.totalcredito;
                var daysInMonth = new Date(new Date().getFullYear(), new Date().getMonth() + 1, 0).getDate();
                var deudaPorDia = totalCreditoValue / daysInMonth;

                deudaPorDiaElement.textContent = deudaPorDia.toFixed(2);

                updateCuota();
            });

            diasMesSelect.addEventListener("change", function() {
                updateCuota();
            });

            function updateCuota() {
                var diasMes = parseInt(diasMesSelect.value);

                if (diasMes > 0) {
                    var deudaPorDia = parseFloat(deudaPorDiaElement.textContent);
                    var cuota = deudaPorDia * diasMes;

                    cuotaInput.textContent = cuota.toFixed(2);
                    cuotaInput.value = cuota.toFixed(2);
                } else {
                    cuotaInput.textContent = "Seleccione una cantidad válida de días";
                    cuotaInput.value = "";
                }
            }
        </script>
        <br><br>
        <!-- Fecha de pago -->
        <label for="">FECHA DE PAGO</label>
        <input type="datetime-local" class="form-control" name="fecha" id="fecha">
        <br>
        <!-- Monto -->
        <label for="">MONTO DE PAGO</label>
        <input type="text" step="any" class="form-control" name="pago" id="pago">
        <br>




        
        <input type="submit" name="REGISTRAR" value="REGISTRAR" class="btn btn-success">
        <a href="../controlador/listapago.php" class="btn btn-danger">CANCELAR</a>
    </form>

    </div>
    <div class="col-3"></div>
    </div>
    </div>
    <br><br>

<?php
    include("pie.php");
?>
</body>
</html>