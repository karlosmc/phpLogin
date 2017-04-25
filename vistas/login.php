<?php
include_once("modulos/Enrutador.php");
include_once("modulos/Controlador.php");
include_once("modulos/sessions.php");

$controlador=new controladorEstudiantes();
$enrutador=new Enrutador();
$sess=new Sessions();


if(isset($_POST['login'])){
    $sess->init();
    $user=$_POST['usuario'];
    $contra=$_POST['contrasena'];
    
    $res=$controlador->verusuario($user, $contra);
    if($res>0){
        $sess->set('alias', $user);
    //$_SESSION['alias']=$user;
    
    header('Location: index_1.php');
    }
    else {
        echo 'ERROR EN USUARIO Y/O CONTRASEÑA';
        //header('Location: index.php');
    }
    
    }

?>

<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <div class="container">
    <body>
        
            <form action="" method="POST">
                <input type="text" name="usuario" placeholder="usuario" /><br><br>
                <input type="password" name="contrasena" placeholder="contrasena" /><br><br>
                <input type="submit" name="login" value="Aceptar" class="btn-success"/>
            </form>
        
    </body>
    </div>
    </head>
    
</html>