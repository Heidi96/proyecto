<?php
class cargo{
    private $id_cargo;
    private $cargo;

    public function __construct($id,$car){
        $this->setid_cargo($id);
        $this->setcargo($car);
    }
    public function grabarcargo(){
        $bd=new conexion();
        $consulta=$bd->query("INSERT INTO cargo(cargo) values('$this->cargo')");
        return($consulta);
    }
    //busca cargo
    public function buscarcargo($n){
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM cargo where cargo like '%$n%'");
        return($consulta);
    }
    public function lista(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM cargo");
        return($consulta);
    }
    //
    public function listarcargo(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM cargo where id_cargo=$this->id_cargo");
        return($consulta);
    }
    public function eliminarcargo(){
        $bd=new conexion();
        $consulta=$bd->query("DELETE FROM cargo where id_cargo='$this->id_cargo'");
        return($consulta);
    }
    public function editarcargo(){
        $bd=new conexion();
        $consulta=$bd->query("UPDATE cargo SET cargo='$this->cargo' where id_cargo='$this->id_cargo'");
        return($consulta);
    }
    public function reporte(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM cargo");
        return($consulta);
    }
    public function setid_cargo($id){
       $this->id_cargo=$id;
    }
    public function getid_cargo(){
        return $this->id_cargo;
    }
    public function setcargo($car){
        $this->cargo=$car;
    }
    public function getcargo(){
        return $this->cargo;
    }

}

?>