<?php
$controlador=new controladorEstudiantes();
if(isset($_POST['enviar'])){
$r=$controlador->crear($_POST['cedula'], $_POST['nombre'], 
        $_POST['apellido'], $_POST['telefono'], $_POST['edad'], 
        $_POST['nota1'], $_POST['nota2'], $_POST['nota3']);
if($r){
    echo 'Se ha registrado a ' .$_POST['nombre'];
}
else {
    echo 'La cedula que intenta  ingresar ya existe';
    
}
}
?>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<div class="container">
	<div class="col-md-12">
<h3>registro de estudiantes</h3>
<hr>
<form action="" method="post">
    <label>cedula</label><br>
    <input type="number" name="cedula" maxlength="8" required>
    <br><br>
    <label>nombre</label><br>
    <input type="text" name="nombre" required>
    <br><br>
    <label>apellido</label><br>
    <input type="text" name="apellido" required>
    <br><br>    
    <label>telefono</label><br>
    <input type="number" name="telefono"  maxlength="8" required>
    <br><br>    
    <label>edad</label><br>
    <input type="number" name="edad" min="" max="100" required>
    <br><br>    
    <label>Nota 1</label>
    <input type="number" name="nota1" min="1" max="10" required>
    <label>Nota 2</label>
    <input type="number" name="nota2" min="1" max="10" required>
    <label>Nota 3</label>
    <input type="number" name="nota3" min="1" max="10" required>
    <br><br>    
    <input type="submit" name="enviar" value="Crear" class="btn-success">
</form>
        </div>
</div>
