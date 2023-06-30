<?php
class pago{
    private $id_pago;
    private $id_cliente;
    private $id_credito;
    private $fechapago;
    private $saldo;
    private $pagopordia;
    private $deudapordia;
    private $deuda;
    private $montopago;
    private $saldoactualizado;


    public function __construct($id,$idcl,$idc,$fp,$s,$pd,$dd,$d,$m,$sa){
        $this->setid_pago($id);
        $this->setid_cliente($idcl);
        $this->setid_credito($idc);
        $this->setfechapago($fp);
        $this->setsaldo($s);
        $this->setpagopordia($pd);
        $this->setdeudapordia($dd);
        $this->setdeuda($d);
        $this->setmontopago($m);
        $this->setsaldoactualizado($sa);
    }

    public function grabarpago(){
        $bd=new conexion();
        $consulta=$bd->query("INSERT INTO pago(id_cliente,id_credito,fechapago,saldo,pagopordia,deudapordia,deuda,montopago,saldoactualizado) values('$this->id_cliente','$this->id_credito','$this->fechapago','$this->saldo','$this->pagopordia','$this->deudapordia','$this->deuda','$this->montopago','$this->saldoactualizado')");
        return($consulta);
    }
    public function listarpago(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT pa.fechapago,cl.nombre_cliente,t.tipoc, tp.tipo,pa.saldo,pa.pagopordia,pa.deudapordia,pa.montopago, pa.saldoactualizado
        from pago pa, credito c, tipocredito t, tipointeres i,prenda p, cliente cl,tipoprenda tp
        where pa.id_credito=c.id_credito and c.id_prenda=p.id_prenda and c.id_tipoc=t.id_tipoc and c.id_tipoi=i.id_tipoi and cl.id_cliente=p.id_cliente and tp.id_tipo=p.id_tipo and c.estadoc='Activo' order by cl.nombre_cliente");
        return($consulta);
    }

    public function buscarpago($pago){
        $bd=new conexion();
        $consulta=$bd->query("SELECT max(p.saldoactualizado) FROM pago p
        where p.id_cliente='$this->id_cliente' and p.id_credito='$this->id_credito'");
        return $consulta;
    }

    public function setid_pago($id){
        $this->id_pago=$id;
     }
     public function getid_pago(){
         return $this->id_pago;
     }
     public function setid_cliente($id){
        $this->id_cliente=$id;
     }
     public function getid_cliente(){
         return $this->id_cliente;
     }

     public function setid_credito($idc){
         $this->id_credito=$idc;
     }
     public function getid_credito(){
         return $this->id_credito;
     }
     public function setfechapago($m){
        $this->fechapago=$m;
     }
     public function getfechapago(){
         return $this->fechapago;
     }
     public function setsaldo($c){
         $this->saldo=$c;
     }
     public function getsaldo(){
         return $this->saldo;
     } 
    public function setpagopordia($d){
        $this->pagopordia=$d;
    }
    public function getpagopordia(){
        return $this->pagopordia;
    } 
    public function setdeudapordia($d){
        $this->deudapordia=$d;
    }
    public function getdeudapordia(){
        return $this->deudapordia;
    }
    public function setdeuda($d){
        $this->deuda=$d;
    }
    public function getdeuda(){
        return $this->deuda;
    }
    public function setmontopago($d){
        $this->montopago=$d;
    }
    public function getmontopago(){
        return $this->montopago;
    }
    public function setsaldoactualizado($d){
        $this->saldoactualizado=$d;
    }
    public function getsaldoactualizado(){
        return $this->saldoactualizado;
    }
}
?>