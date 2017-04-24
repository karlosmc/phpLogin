<?php

include_once("modulos/sessions.php");

//echo 'Bienvenido ' . $_SESSION['u_usuario'];

//if(isset($_SESSION['u_usuario'])){
    $sess=new Sessions();
    $sess->init();
    $user1= isset($_SESSION['alias']) ? $_SESSION['alias']:null;
    
    if ($user1 ==''){
        header('Location: index.php');
    }
    else {
        include_once("modulos/Enrutador.php");
        include_once("modulos/Controlador.php");
    }
    
//}
//else
//{
// echo 'No está autorizado a entrar a esta página';
// //header('Location: index.php');
//}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso POO con carlos PHP</title>
        
    </head>
    <body>
        
        <h1>
            <?php echo 'Bienvenido ' . $_SESSION['alias']; ?>
        </h1>   
        
        <nav>
            <ul>
                <li><a href="index_1.php"> inicio </a> </li>
                <li><a href="?cargar=crear">registrar</a></li>
                <li><a href="log_out.php">Salir</a></li>
            </ul>
        </nav>
        <section>
        <?php
        //include_once("vistas/inicio.php");
        
        $enrutador= new Enrutador();
          if($enrutador->validarGet(isset($_GET['cargar']))){
              $enrutador->cargarVista($_GET['cargar']);
          }
        ?>
        </section>
    </body>
</html>
