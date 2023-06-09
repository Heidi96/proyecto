<?php
class credito{
    private $id_credito;
    private $id_cliente;
    private $id_prenda;
    private $fechainicio;
    private $fechafin;
    private $montocredito;
    private $id_interes;
    private $totalcredito;
    private $id_pago;
    private $id_tipo;

    public function __construct($i,$ic,$ip,$fi,$ff,$m,$ii,$t,$ipa,$ti){
        $this->id_credito=$i;
        $this->id_cliente=$ic;
        $this->id_prenda=$ip;
        $this->fechainicio=$fi;
        $this->fechafin=$ff;
        $this->montocredito=$m;
        $this->id_interes=$ii;
        $this->totalcredito=$t;
        $this->id_pago=$ipa;
        $this->id_tipo=$ti;

    }
    public function grabarcredito(){
        $bd=new conexion();
        $consulta=$bd->query("INSERT INTO usuario(id_empleado,usuario,contraseña,nivel,estado) values('$this->id_empleado','$this->usuario','$this->contraseña','$this->nivel','$this->estado')");
        return($consulta);
    }

    public function setid_credito($i){
        $this->id_credito=$i;
     }
     public function getid_credito(){
         return $this->id_credito;
     }

     public function setid_cliente($ic){
        $this->id_cliente=$ic;
     }
     public function getid_cliente(){
         return $this->id_cliente;
     }
     public function setid_prenda($ip){
         $this->id_prenda=$ip;
     }
     public function getid_prenda(){
         return $this->id_prenda;
     } 
     public function setfechainicio($fi){
        $this->fechainicio=$fi;
    }
    public function getfechainicio(){
        return $this->fechainicio;
    } 
    public function setfechafin($ff){
        $this->fechafin=$ff;
    }
    public function getfechafin(){
        return $this->fechafin;
    } 
    public function setmontocredito($m){
        $this->montocredito=$m;
    }
    public function getmontocredito(){
        return $this->montocredito;
    }
    public function setid_interes($ii){
        $this->id_interes=$ii;
    }
    public function getid_interes(){
        return $this->id_interes;
    } 
    public function settotalcredito($t){
        $this->totalcredito=$t;
    }
    public function gettotalcredito(){
        return $this->totalcredito;
    }  
    public function setid_pago($ipa){
        $this->id_pago=$ipa;
    }
    public function getid_pago(){
        return $this->id_pago;
    } 
    public function setid_tipo($ipa){
        $this->id_tipo=$ipa;
    }
    public function getid_tipo(){
        return $this->id_tipo;
    } 
}
?>