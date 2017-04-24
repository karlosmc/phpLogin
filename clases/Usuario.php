<?php
include_once('Conexion.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author carlosmc
 */
class Usuario {
    //put your code here

    private $idusuario;
    private $alias;
    private $nombres;
    private $pass;
    
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
        $sql2="SELECT *FROM usuario where alias= '{$this->alias}'";
        $resultado= $this->con->consultaRetorno($sql2);
        $num= mysqli_num_rows($resultado);
        
        if ($num!=0)
        {
            return false;
        }
        else
        {
        $sql = "INSERT INTO usuario (alias,nombres,pass) VALUES ( 
               '{$this->alias}','{$this->nombres}','{$this->pass}')";
        $this->con->consultasimple($sql);
            return true;
            
        }
        $this->con->desconectar();
       
    }    
    
        public function eliminar(){
         $this->con->conectar();
         $sql="DELETE FROM usuario where idusuario='{$this->id}'";
         $this->con->consultasimple($sql);
         $this->con->desconectar();
        }
        
       public function listar(){
           $sql="SELECT *FROM usuario";
           $this->con->conectar();
           $resultado=$this->con->consultaRetorno($sql);
           $this->con->desconectar();
           return $resultado;
       }
        
       public function ver(){
           $sql="SELECT *FROM  usuario where alias='{$this->alias}' and pass='{$this->pass}'";
           $this->con->conectar();
           $resultado=$this->con->consultaRetorno($sql);
           $row= mysqli_fetch_row($resultado);
           $this->con->desconectar();
           
           $this->idusuario=$row[0];
           $this->alias=$row[1];
           $this->nombres=$row[2];
           $this->pass=$row[3];
           
           return $row;
       }
        
       public function editar(){
           $this->con->conectar();
           $sql= "UPDATE usuario
                    SET nombres='{$this->nombres}',
                    pass='{$this->pass}',
                    where idusuario='{$this->idusuario}'";
           $this->con->consultasimple($sql);
           $this->con->desconectar();
                   
       }
            
}
