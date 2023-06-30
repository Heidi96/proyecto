<?php
class usuario{
    private $id_usuario;
    private $id_empleado;
    private $usuario;
    private $contraseña;
    private $nivel;
    private $estado;

    public function __construct($id,$ide,$u,$con,$n,$es){
        $this->setid_usuario($id);
        $this->setid_empleado($ide);
        $this->setusuario($u);
        $this->setcontraseña($con);
        $this->setnivel($n);
        $this->setestado($es);

    }
    public function grabarusuario(){
        $bd=new conexion();
        $consulta=$bd->query("INSERT INTO usuario(id_empleado,usuario,contraseña,nivel,estado) values('$this->id_empleado','$this->usuario','$this->contraseña','$this->nivel','$this->estado')");
        return($consulta);
    }
    public function listarusuario(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT u.*, emp.nombre_e, emp.paterno_e, emp.materno_e FROM usuario u INNER JOIN empleado emp ON u.id_empleado=emp.id_empleado where estado='Activo'");
        return($consulta);
    }
    //si existe el usuario
    public function buscarusuario($empleado){
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM usuario where id_empleado='$this->id_empleado' and estado='Activo' and id_usuario='$this->id_usuario'");
        return($consulta);
    }

    //busca a un solo usuario por el id
    public function listarusu(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT u.*, emp.nombre_e, emp.paterno_e, emp.materno_e FROM usuario u JOIN empleado emp ON u.id_empleado = emp.id_empleado where u.id_usuario=$this->id_usuario and u.estado='Activo'");
        return($consulta);
    }

    public function eliminarusuario(){
        $bd=new conexion();
        $consulta=$bd->query("UPDATE usuario SET estado='Inactivo' where id_usuario='$this->id_usuario'");
        return($consulta);
    }
    public function editarusuario(){
        $bd=new conexion();
        $consulta=$bd->query("UPDATE usuario SET usuario='$this->usuario',contraseña='$this->contraseña', nivel='$this->nivel' 
        where id_usuario='$this->id_usuario' and estado='Activo'");
        return($consulta);
    }
    public function actualizarusuario(){
        $bd=new conexion();
        $consulta=$bd->query("UPDATE usuario SET usuario='$this->usuario', nivel='$this->nivel' 
        where id_usuario='$this->id_usuario' and estado='Activo'");
        return($consulta);
    }
    public function listarusuarioinactivo(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT u.*, emp.nombre_e, emp.paterno_e, emp.materno_e FROM usuario u INNER JOIN empleado emp ON u.id_empleado=emp.id_empleado where estado='Inactivo'");
        return($consulta);
    }
    public function activarusuario(){
        $bd=new conexion();
        $consulta=$bd->query("UPDATE usuario SET estado='Activo' where id_usuario='$this->id_usuario'");
        return($consulta);
    }
    /////
    public function verificar1(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT concat(emp.nombre_e,emp.paterno_e,emp.materno_e)as EMPLEADO, u.usuario,u.nivel,u.estado FROM usuario u inner join empleado emp on u.id_empleado=emp.id_empleado where estado='Activo'");
        return($consulta);
    }
    public function verificar(){
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM usuario where usuario='$this->usuario' and contraseña='$this->contraseña' and estado='Activo'");
        return($consulta);
    }
    public function buscarusuarioinactivo($n){
        $bd=new conexion();
        $consulta=$bd->query("SELECT u.*, e.nombre_e,e.paterno_e,e.materno_e FROM usuario u INNER JOIN empleado e ON u.id_empleado=e.id_empleado where e.nombre_e like '%$n%' and estado='Inactivo'");
        return($consulta);
    }
    //BUSCA POR NOMBRE DE USUARIO
    public function buscarusuario1($n){
        $bd=new conexion();
        $consulta=$bd->query("SELECT * FROM usuario where usuario like '%$n%' and estado='Activo'");
        return($consulta);
    }
    //busca por nombre de empleado
    public function buscarusuario2($n){
        $bd=new conexion();
        $consulta=$bd->query("SELECT u.*, e.nombre_e,e.paterno_e,e.materno_e FROM usuario u INNER JOIN empleado e ON u.id_empleado=e.id_empleado where e.nombre_e like '%$n%' and estado='Activo'");
        return($consulta);
    }

    public function setid_usuario($id){
        $this->id_usuario=$id;
     }
     public function getid(){
         return $this->id_usuario;
     }
     public function setid_empleado($ide){
         $this->id_empleado=$ide;
     }
     public function getid_empleado(){
         return $this->id_empleado;
     }
     public function setusuario($u){
        $this->usuario=$u;
     }
     public function getusuario(){
         return $this->usuario;
     }
     public function setcontraseña($contraseña){
         $this->contraseña=$contraseña;
     }
     public function getcontraseña(){
         return $this->contraseña;
     } 
     public function setnivel($nivel){
        $this->nivel=$nivel;
    }
    public function getnivel(){
        return $this->nivel;
    } 
    public function setestado($estado){
        $this->estado=$estado;
    }
}
?>