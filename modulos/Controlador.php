<?php
include_once("clases/Estudiante.php");
include_once("clases/Usuario.php");
include_once("clases/ProductosEn.php");

class controladorEstudiantes {
    //put your code here
    
    private $estudiante;
    private $usuario;
    private $producto;
    
    public function __construct() {
        $this->estudiante=new Estudiante();
        $this->usuario=new Usuario();
        $this->producto=new ProductosEn();
    }
    
    public function index(){
        $resultado=$this->estudiante->listar();
        return $resultado;
    }
    
    public function ListarProductos(){
        $resultado=$this->producto->listar();
        return $resultado;
    }
    
      public function verProducto($id){
        $this->producto->set("id",$id);
        $datos=$this->producto->ver();
        return $datos;
    }
    
    
    public function crear($cedula,$nombre,$apellido,$telefono,$edad,$nota1,$nota2,$nota3){
        $promedio=($nota1 + $nota2 + $nota3)/3;
        $this->estudiante->set("cedula", $cedula);
        $this->estudiante->set("nombre", $nombre);
        $this->estudiante->set("apellido", $apellido);
        $this->estudiante->set("telefono", $telefono);
        $this->estudiante->set("edad", $edad);
        $this->estudiante->set("promedio", $promedio);
        
        $resultado=$this->estudiante->crear();
        return $resultado;
        
    }
 
    public function eliminar($id){
        
        $this->estudiante->set("id",$id);
        $this->estudiante->eliminar();
        
    }
    
    public function ver($id){
        $this->estudiante->set("id",$id);
        $datos=$this->estudiante->ver();
        return $datos;
    }
    
    public function verusuario($alias,$pass){
        $this->usuario->set("alias",$alias);
        $this->usuario->set("pass",$pass);
        $datos=$this->usuario->ver();
        return $datos;
    }
    
    public function editar($id,$nombre,$apellido,$edad,$telefono){
        $this->estudiante->set("id",$id);
        $this->estudiante->set("nombre",$nombre);
        $this->estudiante->set("apellido",$apellido);
        $this->estudiante->set("edad",$edad);
        $this->estudiante->set("telefono",$telefono);
        
        $this->estudiante->editar();
        
    }
    
    
}
