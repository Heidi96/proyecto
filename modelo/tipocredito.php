<?php
class tipocredito{
    private $id_tipoc;
    private $tipoc;

    public function __construct($id_tipoc,$tipo){
        $this->setid_tipoc($id_tipoc);
        $this->settipoc($tipo);
    }
    public function grabartipoc(){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("INSERT INTO tipocredito(tipoc) values('$this->tipoc')");
        return($consulta);
    }
    public function listac(){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM tipocredito order by tipoc asc");
        return($consulta);
    }
    public function eliminartipocredito(){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("DELETE FROM tipocredito where id_tipoc='$this->id_tipoc'");
        return($consulta);
    }
    public function listartipocredito(){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM tipocredito where id_tipoc='$this->id_tipoc'");
        return($consulta);
    }
    public function editartipocredito(){
        $bd=new conexion();
        $consulta=$bd->query("UPDATE tipocredito SET tipoc='$this->tipoc' where id_tipoc='$this->id_tipoc'");
        return($consulta);
    }
    public function buscartipocredito($n){
        /* include("conexion.php"); */
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM tipocredito where tipoc like '%$n%'");
        return($consulta);
    }


    public function setid_tipoc($id_tipoc){
       $this->id_tipoc=$id_tipoc;
    }
    public function getid_tipoc(){
        return $this->id_tipoc;
    }
    public function settipoc($tipoc){
        $this->tipoc=$tipoc;
    }
    public function gettipoc(){
        return $this->tipoc;
    }

}

?>