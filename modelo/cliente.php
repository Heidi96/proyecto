<?php
class cliente{
    private $id;
    private $ci;
    private $nombre;
    private $paterno;
    private $materno;
    private $direccion;
    private $telefono;
    private $genero;
    private $estado;

    public function __construct($i,$c,$n,$p,$m,$d,$t,$g,$e){
        $this->id=$i;
        $this->ci=$c;
        $this->nombre=$n;
        $this->paterno=$p;
        $this->materno=$m;
        $this->direccion=$d;
        $this->telefono=$t;
        $this->genero=$g;
        $this->estado=$e;
    }
    public function grabarcliente(){
        include("conexion.php");
        $db=new conexion();
        $consulta=$db->query("INSERT into cliente(carnet_cliente,nombre_cliente,paterno_cliente,materno_cliente,direccion_cliente,telefono_cliente,genero_cliente,estado_cliente) values('$this->ci','$this->nombre','$this->paterno','$this->materno','$this->direccion',' $this->telefono','$this->genero','$this->estado')");
        //me devolvera un valor booleano
        return($consulta);
    }
    public function listarcliente(){
        include("conexion.php");
        $db=new conexion();
        $consulta=$db->query("SELECT * from cliente where estado_cliente='Activo'");
        return($consulta);
    }
    public function eliminarcliente(){
        include("conexion.php");
        $db=new conexion();
        $consulta=$db->query("UPDATE cliente set estado_cliente='Inactivo' where id_cliente='$this->id'");
        return($consulta);
    }
    public function buscacliente(){
        include("conexion.php");
        $db=new conexion();
        $consulta=$db->query("SELECT id_cliente,carnet_cliente,nombre_cliente,paterno_cliente,materno_cliente,direccion_cliente,telefono_cliente,genero_cliente from cliente where estado_cliente='Activo' and id_cliente='$this->id'");
        return($consulta);
    }
    public function buscarcliente1($n){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM cliente where nombre_cliente like '%$n%' and estado_cliente='Activo'");
        return($consulta);
    }
    public function actualizarcliente($cod,$carnet,$nombr,$patern,$matern,$direccio,$telefon,$gener){
        $bd=new conexion();
        $consulta1=$bd->query("UPDATE cliente set carnet_cliente='$carnet',nombre_cliente='$nombr',paterno_cliente='$patern',materno_cliente='$matern',direccion_cliente='$direccio',telefono_cliente='$telefon',genero_cliente='$gener'where id_cliente='$cod'");
        return($consulta1);
    }
    public function reporte(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM cliente where estado_cliente='Activo'");
        return($consulta);
    }

    public function setid($id){
        $this->id=$id;
     }
     public function getid(){
         return $this->id;
     }

     public function setci($ci){
        $this->ci=$ci;
     }
     public function getci(){
         return $this->ci;
     }
     public function setnombre($nombre){
         $this->nombre=$nombre;
     }
     public function getnombre(){
         return $this->nombre;
     } 
     public function setpaterno($paterno){
        $this->paterno=$paterno;
    }
    public function getpaterno(){
        return $this->paterno;
    } 
    public function setmaterno($materno){
        $this->materno=$materno;
    }
    public function getmaterno(){
        return $this->materno;
    } 
    public function setdireccion($direccion){
        $this->direccion=$direccion;
    }
    public function getdireccion(){
        return $this->direccion;
    }
    public function settelefono($telefono){
        $this->telefono=$telefono;
    }
    public function gettelefono(){
        return $this->telefono;
    } 
    public function setgenero($genero){
        $this->genero=$genero;
    }
    public function getgenero(){
        return $this->genero;
    }  
    public function setestado($estado){
        $this->estado=$estado;
    }
    public function getestado(){
        return $this->estado;
    } 
}
?>