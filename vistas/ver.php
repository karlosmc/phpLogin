<?php
$controlador=new controladorEstudiantes();
if(isset($_GET['id'])){
    
    $row=$controlador->ver($_GET['id']);
    
}
else
{
    header('Location: index.php');
}

?>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<div class="container">
	<div class="col-md-12">
<b>cedula:</b> <?php echo $row[1];?>
<br><br>
<b>nombre:</b> <?php echo $row[2];?>
<br><br>
<b>apellido:</b> <?php echo $row[3];?>
<br><br>
<b>telefono:</b> <?php echo $row[4];?>
<br><br>
        </div>
</div>



