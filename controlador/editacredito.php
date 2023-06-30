<?php
    include("../modelo/conexion.php");
    $cod=$_GET['cod'];

    include("../modelo/prenda.php");
    $cre=new prenda($cod,"","","","","");

    include("../modelo/tipocredito.php");
    $tc=new tipocredito($cod,"");

    include("../modelo/tipointeres.php");
    $ti=new tipointeres($cod,"");

    include("../modelo/credito.php");
    $cre=new credito($cod,"","","","","","","","");
    $res=$cre->listarcre();

    include("../vista/Vistaeditacredito.php");
    if(isset($_GET['Editar'])){
        $t=$_REQUEST['monto'];
        $fechai=$_GET['fechai'];
        $fechaf=$_GET['fechaf'];
        $mont=$_GET['monto'];

        if($_GET['tipoi'] ==1){
            $x=$t*0.10;
            echo "alert('Registro 1')".$x;
            $total=$t+$x;
        }else{
            $x=$t*0.15;
            echo "alert('Registro 2')".$x;
            $total=$t+$x;
        }

        $cre=new credito($cod,"$fechai","$fechaf","","","$mont","","$total","");
        $res1=$cre->editarcredito();
        if($res1){
            echo"
            <script>
                alert('Se modificó el credito');
                location.href='listacredito.php';
            </script>";
        } else {
            echo"
            <script>
                alert('Error, No se modificó la prenda');
            </script>";
        }
            
    }

?>