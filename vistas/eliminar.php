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
¿Desea eliminar al estudiante? <?php echo $row[2]. " " . $row[3]; ?>?
<br><br>
<form action="" method="post" >
    <input type="submit" name="enviar" value="Eliminar">
</form>