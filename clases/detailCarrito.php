<?php

include_once('Conexion.php');

class detailCarrito {
    //put your code here
    
    private $id;
    private $product_id;
    private $q;
    private $cart_id;
    
    
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
        $sql = "INSERT INTO cart_product (product_id,q,cart_id) VALUES ( 
               '{$this->product_id}','{$this->q}','{$this->cart_id}')";
        $this->con->consultasimple($sql);
        $this->con->desconectar();
        
        return true;
        
       
    }    
            
}
