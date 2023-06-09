<?php
    include "fpfp.php";
    require "../modelo/conexion.php";
    include "../modelo/cliente.php";

    class pdf extends fpdf
    {
        //cabecera de pagina
        function Header(){
            //logo
            $this->Image('imagenes/logo.png',30,8,25);
            //Arial bold 15
            $this->setfont('Arial','B',15);
            //Movernos a la derecha
            $this->cell(60);
            //titulo
            $this->cell(120,25,'Reporte Clientes',1,1,'C');
            //salto de linea
            $this->Ln(15);
        }
         //pie de pagina
         function Footer(){
            //posicion: a 1,5 cm del final
            $this->sety(-15);
            //Arial italic 8
            $this->setfont('Arial','I',8);
            //Numero de pagina
            $this->cell(60);
            //titulo
            $this->cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }

    //creacion del objeto de la clase heredada
    $pdf=new pdf();
    $c=1;
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->setfont('Times','',10);
    $pdf->cell(20);
    //$pdf->selfillcolor(98,170,254);
    $pdf->setfillcolor(192,192,192);

        $this->setfont('Arial','B',12);
        $this->cell(20,10,'No',1,0,'C',1);
        $this->cell(40,10,'CARNET',1,1,'C',1);

        $this->setfont('Arial','',10);

        $cli=new cliente("","","","","","","","","");
        $res=$cli->reporte();
        while($row=$res->fetch_assoc()){
            $pdf->cell(20);
            $pdf->cell(20,6,utf8_decode($c),1,0,'C');
            $pdf->cell(100,6,utf8_encode($row['nombre_cliente']),1,0,'C');

            $c++;
        }
        $pdf->output();
?>