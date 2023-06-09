<?php
class empleado{
    private $id;
    private $id_cargo;
    private $ci;
    private $nombre;
    private $paterno;
    private $materno;
    private $direccion;
    private $telefono;
    private $fechanac;
    private $genero;
    //private $intereses;

    public function __construct($i,$idc,$c,$n,$p,$m,$d,$t,$f,$g){
        $this->setid($i);
        $this->setid_cargo($idc);
        $this->setci($c);
        $this->setnombre($n);
        $this->setpaterno($p);
        $this->setmaterno($m);
        $this->setdireccion($d);
        $this->settelefono($t);
        $this->setfechanac($f);
        $this->setgenero($g);

    }
    public function grabarempleado(){
        $bd=new conexion();
        $consulta=$bd->query("INSERT INTO empleado(id_cargo,carnet_e,nombre_e,paterno_e,materno_e,direccion_e,telefono_e,fechanac_e,genero_e) values('$this->id_cargo','$this->ci','$this->nombre','$this->paterno','$this->materno','$this->direccion','$this->telefono','$this->fechanac','$this->genero')");
        return($consulta);
    }
    public function listarempleado(){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("SELECT e.*,c.cargo FROM empleado e INNER JOIN cargo c ON e.id_cargo=c.id_cargo order by e.nombre_e asc");
        return($consulta);
    }
    public function buscarempleado(){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("SELECT e.*,c.cargo FROM empleado e INNER JOIN cargo c ON e.id_cargo=c.id_cargo where id_empleado='$this->id'");
        return($consulta);
    }
    ////
    public function lista(){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM empleado");
        return($consulta);
    }
    ///
    public function reporte(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM empleado");
        return($consulta);
    }
    ///podemos crear atributo estado para pòner empleados inactivos en lugar de eliminarlos definitivamente
    public function eliminarempleadositieneestado(){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("UPDATE empleado set estado_e='Inactivo' where id_empleado='$this->id'");
        return($consulta);
    }
    
    public function eliminarempleado(){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("DELETE FROM empleado where id_empleado='$this->id'");
        return($consulta);
    }
    public function editarempleado(){
        $bd=new conexion();
        $consulta=$bd->query("UPDATE empleado SET carnet_e='$this->ci',nombre_e='$this->nombre',paterno_e='$this->paterno',materno_e='$this->materno',direccion_e='$this->direccion', telefono_e='$this->telefono',fechanac_e='$this->fechanac',genero_e='$this->genero' where id_empleado=$this->id");
        return($consulta);
    }
    public function buscarempleado1($n){
        include("conexion.php");
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM empleado where nombre_e like '%$n%'");
        return($consulta);
    }

    public function setid($id){
        $this->id=$id;
     }
     public function getid(){
         return $this->id;
     }
     public function setid_cargo($idc){
         $this->id_cargo=$idc;
     }
     public function getcargo(){
         return $this->id_cargo;
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
    public function setfechanac($fecha_naci){
        $this->fechanac=$fecha_naci;
    }
    public function getfechanac(){
        return $this->fechanac;
    } 
    public function setgenero($genero){
        $this->genero=$genero;
    }
    public function getgenero(){
        return $this->genero;
    }  

}
?>