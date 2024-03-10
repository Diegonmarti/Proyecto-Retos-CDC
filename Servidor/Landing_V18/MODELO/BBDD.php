<?php

class BBDD {
   
    private $servidor;
    private $usuario;
    private $contrasenia;
    private $nombreBase;
    public $conn;
    
    public function __construct() {
        $this -> usuario = "root"; 
        $this -> contrasenia = "";
        $this -> nombreBase="landing_cdc";
        $this -> servidor="localhost";
        
        try {
            $this -> conn = new PDO("mysql:host={$this -> servidor};dbname={$this -> nombreBase}", $this -> usuario, $this -> contrasenia);
            $this -> conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("error de conexión: " . $e);
        }
    }

    public function getConn(){
        return $this -> conn;
    }
}