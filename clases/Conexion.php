<?php

class Conexion {
    //put your code here
    private $host;
    private $user;
    private $pass;
    private $bd;
    
    protected $con;

    public function __construct() {
        $this->host="localhost";
        $this->pass="123";
        $this->bd="alumnos";
        $this->user="root";
        
        $con = mysqli_connect($this->host, $this->user, $this->pass);
        if (!$con) {
            die("Database connection failed: " . mysqli_error());
            }
        $db_select = mysqli_select_db($con, $this->bd);
        
        if (!$db_select) {
            die("Database selection failed: " . mysqli_error());
        }
      
    }
    
     public function conectar()
        {
        $this->host="localhost";
        $this->user="root";
        $this->pass="123";
        $this->bd="alumnos";
        
         
        $this->con = mysqli_connect($this->host, $this->user,$this->pass);
        if (!$this->con) DIE("Lo sentimos, no se ha podido conectar con MySQL: " . mysqli_error());
        $this->bd = mysqli_select_db($this->con, $this->bd);
        if (!$this->bd) DIE("Lo sentimos, no se ha podido conectar con la base datos: " . DBNAME);
 
        return true;
 
    }
 
    public function desconectar()
    {
        if ($this->con) {
            mysqli_close($this->con);
        }
 
    }
    
    
    public function consultasimple($sql){
        mysqli_query($this->con,$sql) or die(mysqli_error($this->con));
    }
    
    public function consultaRetorno($sql) {
      
        $consulta= mysqli_query($this->con,$sql) or die(mysqli_error($this->con));
        return $consulta;
    }
    
    
  
}
