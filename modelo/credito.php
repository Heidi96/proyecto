<?php
class credito{
    private $id_credito;
    private $fechainicio;
    private $fechafin;
    private $id_prenda;
    private $id_tipoc;
    private $monto;
    private $id_tipoi;
    private $totalcredito;
    private $estadoc;


    public function __construct($i,$fi,$ff,$ip,$tc,$m,$ii,$t,$e){
        $this->setid_credito($i);
        $this->setfechainicio($fi);
        $this->setfechafin($ff);
        $this->setid_prenda($ip);
        $this->setid_tipoc($tc);
        $this->setmonto($m);
        $this->setid_tipoi($ii);
        $this->settotalcredito($t);
        $this->setestadoc($e);
    }
    public function grabarcredito(){
        $bd=new conexion();
        $consulta=$bd->query("INSERT INTO credito(fechainicio,fechafin,id_prenda,id_tipoc,monto,id_tipoi,totalcredito,estadoc) values('$this->fechainicio','$this->fechafin','$this->id_prenda','$this->id_tipoc','$this->monto','$this->id_tipoi','$this->totalcredito','$this->estadoc')");
        return($consulta);
    }
    public function listarcredito(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT c.id_credito,c.fechainicio,c.fechafin,t.tipoc,c.monto,i.tipoi,c.totalcredito,cl.nombre_cliente, tp.tipo, p.marca,p.color,p.detalle, c.estadoc
        from credito c, tipocredito t, tipointeres i,prenda p, cliente cl,tipoprenda tp
        where c.id_prenda=p.id_prenda and c.id_tipoc=t.id_tipoc and c.id_tipoi=i.id_tipoi and cl.id_cliente=p.id_cliente and tp.id_tipo=p.id_tipo and c.estadoc='Activo' order by cl.nombre_cliente asc");
        return($consulta);
    }
    public function listarcre(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT c.*,cl.nombre_cliente, tp.tipo, p.marca,p.color,p.detalle,i.tipoi,t.tipoc
        from credito c, tipocredito t, tipointeres i,prenda p, cliente cl,tipoprenda tp
        where id_credito='$this->id_credito' and c.id_prenda=p.id_prenda and c.id_tipoc=t.id_tipoc and c.id_tipoi=i.id_tipoi and cl.id_cliente=p.id_cliente and tp.id_tipo=p.id_tipo and c.estadoc='Activo'");
        return($consulta);
    }
    public function eliminarcredito(){
        $bd=new conexion();
        $consulta=$bd->query("UPDATE credito SET estadoc='Inactivo' where id_credito='$this->id_credito'");
        return($consulta);
    }
    public function editarcredito(){
        $bd=new conexion();
        $consulta=$bd->query("UPDATE credito SET fechainicio='$this->fechainicio',fechafin='$this->fechafin',monto='$this->monto',totalcredito='$this->totalcredito' where id_credito='$this->id_credito'");
        return($consulta);
    }
    public function buscarcredito($n){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("SELECT c.id_credito,c.fechainicio,c.fechafin,t.tipoc,c.monto,i.tipoi,c.totalcredito,cl.nombre_cliente, tp.tipo, p.marca,p.color,p.detalle, c.estadoc
        from credito c, tipocredito t, tipointeres i,prenda p, cliente cl,tipoprenda tp
        where c.id_prenda=p.id_prenda and c.id_tipoc=t.id_tipoc and c.id_tipoi=i.id_tipoi and cl.id_cliente=p.id_cliente and tp.id_tipo=p.id_tipo and c.estadoc='Activo' and cl.nombre_cliente like '%$n%'");
        return($consulta);
    }
    public function listarcreditoinactivo(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT c.id_credito,c.fechainicio,c.fechafin,t.tipoc,c.monto,i.tipoi,c.totalcredito,cl.nombre_cliente, tp.tipo, p.marca,p.color,p.detalle, c.estadoc
        from credito c, tipocredito t, tipointeres i,prenda p, cliente cl,tipoprenda tp
        where c.id_prenda=p.id_prenda and c.id_tipoc=t.id_tipoc and c.id_tipoi=i.id_tipoi and cl.id_cliente=p.id_cliente and tp.id_tipo=p.id_tipo and c.estadoc='Inactivo'");
        return($consulta);
    }
    public function activarcredito(){
        $bd=new conexion();
        $consulta=$bd->query("UPDATE credito SET estadoc='Activo' where id_credito='$this->id_credito'");
        return($consulta);
    }
    public function buscarcreditoinactivo($n){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("SELECT c.id_credito,c.fechainicio,c.fechafin,t.tipoc,c.monto,i.tipoi,c.totalcredito,cl.nombre_cliente, tp.tipo, p.marca,p.color,p.detalle, c.estadoc
        from credito c, tipocredito t, tipointeres i,prenda p, cliente cl,tipoprenda tp
        where c.id_prenda=p.id_prenda and c.id_tipoc=t.id_tipoc and c.id_tipoi=i.id_tipoi and cl.id_cliente=p.id_cliente and tp.id_tipo=p.id_tipo and c.estadoc='Inactivo' and cl.nombre_cliente like '%$n%'");
        return($consulta);
    }

    public function setid_credito($i){
        $this->id_credito=$i;
     }
     public function getid_credito(){
         return $this->id_credito;
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
    public function setid_prenda($ip){
        $this->id_prenda=$ip;
    }
    public function getid_prenda(){
        return $this->id_prenda;
    }
    public function setmonto($m){
        $this->monto=$m;
    }
    public function getmonto(){
        return $this->monto;
    }
    public function setid_tipoi($ii){
        $this->id_tipoi=$ii;
    }
    public function getid_interes(){
        return $this->id_tipoi;
    } 
    public function settotalcredito($t){
        $this->totalcredito=$t;
    }
    public function gettotalcredito(){
        return $this->totalcredito;
    }  
    public function setid_tipoc($tc){
        $this->id_tipoc=$tc;
    }
    public function getid_tipoc(){
        return $this->id_tipoc;
    } 
    public function setestadoc($e){
        $this->estadoc=$e;
    }
    public function getestadoc(){
        return $this->estadoc;
    } 
}
?>