<?php
    include("../modelo/conexion.php");

    include("../modelo/cliente.php");
    $cli=new cliente("","","","","","","","","");
    $res1=$cli->listarcliente(); 

    include("../modelo/credito.php");
    $cre=new credito("","","","","","","","","");
    $res_cre=$cre->listarcredito();  

//sale de la carpeta controlador y entra a la carpeta vista, busca el form de registro   
    
    include("../vista/FormularioRegistroPago.php");

    if(isset($_POST['REGISTRAR'])){
        $cliente=$_POST['cliente'];
        $credito=$_POST['credito'];
        $fecha=$_POST['fecha'];
        $deudatotal=$_REQUEST['saldo'];
        $pagopordia=$_POST['deuda_por_dia'];
        $deudapordia=$_POST['dia_mes_input'];
        $deuda=$_POST['cuota'];
        $pago=$_POST['pago'];

        include("../modelo/pago.php");
        $pa=new pago("","$cliente","$credito","","$deudatotal","","","","","");
        $resultado=$pa->buscarpago($credito);
        $resu1=mysqli_num_rows($resultado);  

        if($resu1=0){
           //si es el primer pago el saldo se descuenta de la deudatotal
           $saldoadeber=$deudatotal-$deuda;
           //include("../modelo/pago.php");
           $p=new pago("","$cliente","$credito","$fecha","$deudatotal","$pagopordia","$deudapordia","$deuda","$pago","$saldoadeber");
           $resu=$p->grabarpago();       
           if ($resu){
               echo"
               <script>
                   alert('Registro exitoso');
                   location.href='listapago.php';
               </script>";
           } else {
               echo"
               <script>
                   alert('Error, No se registró');
               </script>";
           }
        }else{
            $resultado1 = floatval($resultado);
            $deuda1 = floatval($deuda);
            echo"
            <script>
                alert('Registro + $resultado1');
                alert('Registro + $deuda');
            </script>";
             //ya hay un pago entonces el saldo se tiene q actualizar
             $saldoadeber=$resultado1-$deuda1;
                 //include("../modelo/pago.php");
                 echo"
                 <script>
                     alert('Registro + $saldoadeber');
                 </script>";
                 $p=new pago("","$cliente","$credito","$fecha","$deudatotal","$pagopordia","$deudapordia","$deuda","$pago","$saldoadeber");
                 //$resu=$p->grabarpago();
                 
                 if ($resu){
                     echo"
                     <script>
                         alert('Registro de pago exitoso');
                         location.href='listapago.php';
                     </script>";
                 } else {
                     echo"
                     <script>
                         alert('Error, No se registró pago');
                     </script>";
                 }

        }
       
    } 
?>