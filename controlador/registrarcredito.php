<?php
//sale de la carpeta controlador y entra a la carpeta vista, busca el form de registro     
    include("../modelo/conexion.php");

    include("../modelo/prenda.php");
    $prenda=new prenda("","","","","","");
    $res_prenda=$prenda->listarprenda();   

    include("../modelo/tipocredito.php");
    $cre=new tipocredito("","");
    $res_cre=$cre->listac();

    include("../modelo/tipointeres.php");
    $int=new tipointeres("","");
    $res_int=$int->listai();

    include("../vista/FormularioRegistroCredito.php");
   
    //echo "alert('Pocentaje 0')".$ss;
    if(isset($_POST['REGISTRAR'])){
        //$ss=$_POST['tipoi'];
        $t=$_REQUEST['monto'];
        $prenda=$_POST['prenda'];
        $tipoc=$_POST['tipoc'];
        $fechai=$_POST['fechai'];
        $fechaf=$_POST['fechaf'];
        
        $monto=$_POST['monto'];
        $tipoi=$_POST['tipoi'];
        $estado='Activo';
        //$fi=date("dd/mm/YY", strtotime($fechai));
        if($_POST['tipoi'] ==1){
            $x=$t*0.10;
            echo "alert('Registro 1')".$x;
            $total=$t+$x;
        }else{
            $x=$t*0.15;
            echo "alert('Registro 2')".$x;
            $total=$t+$x;
        }

        include("../modelo/credito.php");
        $credi=new credito("","$fechai","$fechaf","$prenda","$tipoc","$monto","$tipoi","$total","$estado");
        $res1=$credi->grabarcredito();
    
        if ($res1){
            echo"
            <script>
                alert('Registro exitoso');
                location.href='listacredito.php';
            </script>";
        } else {
            echo"
            <script>
                alert('Error, No se registró al usuario');
            </script>";
        }

        
    }
?>