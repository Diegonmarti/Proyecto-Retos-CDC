<?php

class BBDD {
   
    private $servidor;
    private $usuario;
    private $password;
    private $nombre;
    public $mysql;
    
    public function __construct() {
        $this->usuario = "root"; 
        $this->password = "";
        $this->nombre="landing_cdc";
        $this->servidor="localhost";
        $this->mysql = new mysqli($this->servidor, $this->usuario, $this->password, $this->nombre);
        if ($this->mysql->connect_errno) {
            die("error de conexión: " . $this -> mysql ->connect_error);
    
        }
    }

    public function getConn(){
        return $this -> mysql;
    }
}