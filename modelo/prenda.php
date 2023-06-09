<?php
class prenda{
    private $id_prenda;
    private $id_tipo;
    private $marca;
    private $color;
    private $detalle;


    public function __construct($id,$idt,$m,$c,$d){
        $this->setid_prenda($id);
        $this->setid_tipo($idt);
        $this->setmarca($m);
        $this->setcolor($c);
        $this->setdetalle($d);
    }
    public function grabarprenda(){
        $bd=new conexion();
        $consulta=$bd->query("INSERT INTO prenda(id_tipo,marca,color,detalle) values('$this->id_tipo','$this->marca','$this->color','$this->detalle')");
        return($consulta);
    }
    public function listarprenda(){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("SELECT p.*,t.tipo FROM prenda p INNER JOIN tipoprenda t ON p.id_tipo=t.id_tipo");
        return($consulta);
    }
    //eliminacion definitiva
    public function eliminarprenda(){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("DELETE FROM prenda where id_prenda='$this->id_prenda'");
        return($consulta);
    }
    public function editarprenda(){
        $bd=new conexion();
        $consulta=$bd->query("UPDATE prenda SET marca='$this->marca',color='$this->color',detalle='$this->detalle' where id_prenda=$this->id_prenda");
        return($consulta);
    }
    public function buscarprenda(){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("SELECT p.*,t.tipo FROM prenda p INNER JOIN tipoprenda t ON p.id_tipo=t.id_tipo where id_prenda='$this->id_prenda'");
        return($consulta);
    }
    public function buscarprenda1($n){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM prenda where marca like '%$n%'");
        return($consulta);
    }
    public function setid_prenda($id){
        $this->id_prenda=$id;
     }
     public function getid_prenda(){
         return $this->id_prenda;
     }
     public function setid_tipo($idt){
         $this->id_tipo=$idt;
     }
     public function getid_tipo(){
         return $this->id_tipo;
     }
     public function setmarca($m){
        $this->marca=$m;
     }
     public function getmarca(){
         return $this->marca;
     }
     public function setcolor($c){
         $this->color=$c;
     }
     public function getcolor(){
         return $this->color;
     } 
    public function setdetalle($d){
        $this->detalle=$d;
    }
    public function getdetalle(){
        return $this->detalle;
    } 

}
?>