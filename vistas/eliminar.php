<?php
$controlador=new controladorEstudiantes();
if(isset($_GET['id'])){
    $row=$controlador->ver($_GET['id']);
}
else
{
    header('Location: index.php');
}
if(isset($_POST['enviar'])){
    $controlador->eliminar($_GET['id']);
    header('Location: index_1.php');
}
?>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<div class="container">
	<div class="col-md-12">
¿Desea eliminar al estudiante? <?php echo $row[2]. " " . $row[3]; ?>?
<br><br>
<form action="" method="post" >
    <input type="submit" name="enviar" value="Eliminar" class="btn-danger">
</form>
        </div>
</div>