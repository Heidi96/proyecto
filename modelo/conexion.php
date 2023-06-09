<?php
    class conexion extends mysqli{
        public function __construct(){
            parent::__construct("localhost","root","12345","base_credibol");
        }
    }
?>