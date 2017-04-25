<?php

include_once('Conexion.php');

class carrito {
    //put your code here
    
    private $id;
    private $client_email;
    private $created_at;
    
    
    private $con;
    
    public function __construct() {
        $this->con=new Conexion();
        
    }
    
    public function set($atributo,$contenido){
        $this->$atributo=$contenido;
        
    }
    
    public function get($atributo)
    {
        return $this->$atributo;
           
    }
    
    public function crear()
    {
        $this->con->conectar();
        $sql = "INSERT INTO cart (client_email,created_at) VALUES ( 
               '{$this->client_email}',NOW())";
               
        $id_max=$this->con->consultaAutoInc($sql);
        $this->con->desconectar();
        return $id_max;
        
       
    }    
            
}
