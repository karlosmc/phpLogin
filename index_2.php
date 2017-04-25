<?php

include_once("modulos/sessions.php");


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
	<title>Carrito Basico PHP</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<div class="container">
	<div class="row">
<body>


		<div class="col-md-12">
		<h1>Ejemplo de carrito de compras</h1>
		<p>A continuacion el menu de opciones.</p>
		<br>
			<ul>
                                <li><a href="index_1.php"> inicio </a> </li>
                                <li><a href="index_2.php">Comprar online</a></li>
				<li><a href="products.php">Productos</a></li>
				<li><a href="cart.php">Carrito</a></li>
			</ul>
			<br><br><hr>
<!--			<p>Powered by <a href="http://evilnapsis.com/" target="_blank">Evilnapsis</a></p>-->
		</div>
	</div>
</div>

</body>
</html>