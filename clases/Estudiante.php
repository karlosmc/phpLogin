<?php

include_once('Conexion.php');

class Estudiante {
    //put your code here
    
    private $id;
    private $cedula;
    private $nombre;
    private $apellido;
    private $telefono;
    private $edad;
    private $promedio;
    private $fecha;
    
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
        $sql2="SELECT *FROM estudiante where cedula= '{$this->cedula}'";
        $resultado= $this->con->consultaRetorno($sql2);
        $num= mysqli_num_rows($resultado);
        
        if ($num!=0)
        {
            return false;
        }
        else
        {
        $sql = "INSERT INTO estudiante (cedula,nombre,apellido,telefono,edad,promedio,fecha) VALUES ( 
               '{$this->cedula}','{$this->nombre}','{$this->apellido}','{$this->telefono}','{$this->edad}',
               '{$this->promedio}',NOW())";
        $this->con->consultasimple($sql);
            return true;
            
        }
        $this->con->desconectar();
       
    }    
    
        public function eliminar(){
         $this->con->conectar();
         $sql="DELETE FROM estudiante where id='{$this->id}'";
         $this->con->consultasimple($sql);
         $this->con->desconectar();
        }
        
       public function listar(){
           $sql="SELECT *FROM ESTUDIANTE";
           $this->con->conectar();
           $resultado=$this->con->consultaRetorno($sql);
           $this->con->desconectar();
           return $resultado;
       }
        
       public function ver(){
           $sql="SELECT *FROM  estudiante where id='{$this->id}'";
           $this->con->conectar();
           $resultado=$this->con->consultaRetorno($sql);
           $row= mysqli_fetch_row($resultado);
           $this->con->desconectar();
           
           $this->id=$row[0];
           $this->cedula=$row[1];
           $this->nombre=$row[2];
           $this->apellido=$row[3];
           $this->telefono=$row[4];
           $this->edad=$row[5];
           $this->promedio=$row[6];
           $this->fecha=$row[7];
           
           return $row;
       }
        
       public function editar(){
           $this->con->conectar();
           $sql= "UPDATE estudiante
                    SET nombre='{$this->nombre}',
                     apellido='{$this->apellido}',
                     telefono='{$this->telefono}',
                     edad='{$this->edad}'                        
                      where id='{$this->id}'";
           $this->con->consultasimple($sql);
           $this->con->desconectar();
                   
       }
            
}
