<?php
class tipointeres{
    private $id_tipoi;
    private $tipoi;

    public function __construct($id_tipoi,$tipoi){
        $this->setid_tipoi($id_tipoi);
        $this->settipoi($tipoi);
    }
    public function grabartipointeres(){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("INSERT INTO tipointeres(tipoi) values('$this->tipoi')");
        return($consulta);
    }
    public function listai(){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM tipointeres order by tipoi asc");
        return($consulta);
    }
    public function eliminartipointeres(){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("DELETE FROM tipointeres where id_tipoi='$this->id_tipoi'");
        return($consulta);
    }
    public function listartipointeres(){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM tipointeres where id_tipoi='$this->id_tipoi'");
        return($consulta);
    }
    public function editartipointeres(){
        $bd=new conexion();
        $consulta=$bd->query("UPDATE tipointeres SET tipoi='$this->tipoi' where id_tipoi='$this->id_tipoi'");
        return($consulta);
    }
    public function buscartipointeres($n){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM tipointeres where tipoi like '%$n%'");
        return($consulta);
    }


    public function setid_tipoi($id_tipoi){
       $this->id_tipoi=$id_tipoi;
    }
    public function getid_tipoi(){
        return $this->id_tipoi;
    }
    public function settipoi($tipoi){
        $this->tipoi=$tipoi;
    }
    public function gettipoi(){
        return $this->tipoi;
    }

}

?>