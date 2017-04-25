
<?php

require_once ("clases/Estudiante.php");
require_once ("modulos/Controlador.php");

//var_dump($_SESSION['u_usuario']);
      //if(isset($_SESSION['u_usuario'])){
      $controlador= new controladorEstudiantes();
      $resultado=$controlador->index();
//      }
//      else {
//          header('Location: index.php');
//      }
?>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<br><br>
<h1>Inicio de todo</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Promedio</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($resultado)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['cedula']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['promedio']; ?></td>
            <td>
                <a href="?cargar=ver&id=<?php echo $row['id']; ?>" class="text-success"> ver </a>
                <a href="?cargar=editar&id=<?php echo $row['id']; ?>"> editar </a>
                <a href="?cargar=eliminar&id=<?php echo $row['id']; ?>>" class="text-danger"> eliminar </a>
            </td>
        
        </tr>
        <?php endwhile; ?>
        
    </tbody>
</table>
                </div>
            </div>
    </div>
