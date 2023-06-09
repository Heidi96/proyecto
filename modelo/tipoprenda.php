<?php
class tipoprenda{
    private $id_tipo;
    private $tipo;

    public function __construct($id,$tipo){
        $this->setid_tipo($id);
        $this->settipo($tipo);
    }
    public function grabartipo(){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("INSERT INTO tipoprenda(tipo) values('$this->tipo')");
        return($consulta);
    }
    public function lista(){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM tipoprenda order by tipo asc");
        return($consulta);
    }
    public function eliminartipoprenda(){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("DELETE FROM tipoprenda where id_tipo='$this->id_tipo'");
        return($consulta);
    }
    public function listartipoprenda(){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM tipoprenda where id_tipo='$this->id_tipo'");
        return($consulta);
    }
    public function editartipoprenda(){
        $bd=new conexion();
        $consulta=$bd->query("UPDATE tipoprenda SET tipo='$this->tipo' where id_tipo='$this->id_tipo'");
        return($consulta);
    }
    public function buscartipoprenda($n){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM tipoprenda where tipo like '%$n%'");
        return($consulta);
    }


    public function setid_tipo($id){
       $this->id_tipo=$id;
    }
    public function getid_tipo(){
        return $this->id_tipo;
    }
    public function settipo($tipo){
        $this->tipo=$tipo;
    }
    public function gettipo(){
        return $this->tipo;
    }

}

?>