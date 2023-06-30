<?php
class prenda{
    private $id_prenda;
    private $id_tipo;
    private $marca;
    private $color;
    private $detalle;
    private $id_cliente;

    public function __construct($id,$idt,$m,$c,$d,$idc){
        $this->setid_prenda($id);
        $this->setid_tipo($idt);
        $this->setmarca($m);
        $this->setcolor($c);
        $this->setdetalle($d);
        $this->setid_cliente($idc);
    }
    public function grabarprenda(){
        $bd=new conexion();
        $consulta=$bd->query("INSERT INTO prenda(id_tipo,marca,color,detalle,id_cliente) values('$this->id_tipo','$this->marca','$this->color','$this->detalle','$this->id_cliente')");
        return($consulta);
    }
    public function listarprenda(){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("SELECT p.*, t.tipo, c.nombre_cliente,c.paterno_cliente,c.materno_cliente, c.carnet_cliente
        from prenda p,tipoprenda t, cliente c 
        where t.id_tipo=p.id_tipo and p.id_cliente=c.id_cliente order by c.nombre_cliente asc");
        return($consulta);
    }
    //eliminacion definitiva
    public function eliminarprenda(){
        /* include("conexion.php"); */
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
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("SELECT p.*, t.tipo, c.nombre_cliente,c.paterno_cliente,c.materno_cliente, c.carnet_cliente
        from prenda p,tipoprenda t, cliente c 
        where t.id_tipo=p.id_tipo and p.id_cliente=c.id_cliente and id_prenda='$this->id_prenda'");
        return($consulta);
    }
    //busca por carnet del cliente,las prendas que tiene
    public function buscarprenda1($n){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("SELECT p.*, t.tipo, c.nombre_cliente,c.paterno_cliente,c.materno_cliente, c.carnet_cliente
        from prenda p,tipoprenda t, cliente c 
        where t.id_tipo=p.id_tipo and p.id_cliente=c.id_cliente and carnet_cliente like '%$n%'");
        return($consulta);
    }
    //busca por tipo prenda
    public function buscarprenda2($n){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("SELECT p.*, t.tipo, c.nombre_cliente,c.paterno_cliente,c.materno_cliente, c.carnet_cliente
        from prenda p,tipoprenda t, cliente c 
        where t.id_tipo=p.id_tipo and p.id_cliente=c.id_cliente and t.tipo like '%$n%'");
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
    public function setid_cliente($id){
        $this->id_cliente=$id;
     }
     public function getid_cliente(){
         return $this->id_cliente;
     }

}
?>