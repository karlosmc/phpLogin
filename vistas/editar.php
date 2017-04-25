<?php
$controlador=new controladorEstudiantes();
if(isset($_GET['id'])){
    $row=$controlador->ver($_GET['id']);
}
else
{
    header('Location: index_1.php');
}
if(isset($_POST['enviar'])){
    $controlador->editar($_GET['id'],$_POST['nombre'],$_POST['apellido'],$_POST['edad'],$_POST['telefono']);
    header('Location: index_1.php');
}

?>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<div class="container">
	<div class="col-md-12">
<h3>registro de estudiantes</h3>
<hr>
<form action="" method="post">
    Cedula: <br>
    <input type="number" name="cedula" value="<?php echo $row[1]; ?>" disabled>
    <br>
    Nombre: <br>
    <input type="text" name="nombre" value="<?php echo $row[2]; ?>" required>
    <br>
    Apellido: <br>
    <input type="text" name="apellido" value="<?php echo $row[3]; ?>" required>
    <br>
    Telefono: <br>
    <input type="number" name="telefono" value="<?php echo $row[4]; ?>" required>
    <br>
    Edad: <br>
    <input type="number" name="edad" value="<?php echo $row[5]; ?>" required>
    <br>  
    Promedio: <br>
    <input type="number" name="promedio" value="<?php echo $row[6]; ?>" disabled>
    <input type="submit" name="enviar" value="Editar" class="btn-success">
</form>
        </div>
</div>


