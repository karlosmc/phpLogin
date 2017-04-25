<?php

include_once('Conexion.php');

class ProductosEn {
    //put your code here
    
    private $id;
    private $name;
    private $price;
    
    
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
    
//    public function crear()
//    {
//        $this->con->conectar();
//        $sql2="SELECT *FROM estudiante where cedula= '{$this->cedula}'";
//        $resultado= $this->con->consultaRetorno($sql2);
//        $num= mysqli_num_rows($resultado);
//        
//        if ($num!=0)
//        {
//            return false;
//        }
//        else
//        {
//        $sql = "INSERT INTO estudiante (cedula,nombre,apellido,telefono,edad,promedio,fecha) VALUES ( 
//               '{$this->cedula}','{$this->nombre}','{$this->apellido}','{$this->telefono}','{$this->edad}',
//               '{$this->promedio}',NOW())";
//        $this->con->consultasimple($sql);
//            return true;
//            
//        }
//        $this->con->desconectar();
//       
//    }    
//    
//        public function eliminar(){
//         $this->con->conectar();
//         $sql="DELETE FROM estudiante where id='{$this->id}'";
//         $this->con->consultasimple($sql);
//         $this->con->desconectar();
//        }
        
       public function listar(){
           $sql="SELECT *FROM PRODUCT";
           $this->con->conectar();
           $resultado=$this->con->consultaRetorno($sql);
           $this->con->desconectar();
           return $resultado;
       }
        
       public function ver(){
           $sql="SELECT *FROM  product where id='{$this->id}'";
           $this->con->conectar();
           $resultado=$this->con->consultaRetorno($sql);
           $row= mysqli_fetch_row($resultado);
           $this->con->desconectar();
           
           return $row;
       }
        
//       public function editar(){
//           $this->con->conectar();
//           $sql= "UPDATE estudiante
//                    SET nombre='{$this->nombre}',
//                     apellido='{$this->apellido}',
//                     telefono='{$this->telefono}',
//                     edad='{$this->edad}'                        
//                      where id='{$this->id}'";
//           $this->con->consultasimple($sql);
//           $this->con->desconectar();
//                   
//       }
            
}