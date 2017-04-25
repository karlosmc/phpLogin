<?php
/*
* Eliminar un producto del carrito
*/
include_once '../modulos/sessions.php';

$sess=new Sessions();
$sess->init();

if(!empty($_SESSION["cart"])){
	$cart  = $_SESSION["cart"];
	if(count($cart)==1){ unset($_SESSION["cart"]); }
	else{
		$newcart = array();
		foreach($cart as $c){
			if($c["product_id"]!=$_GET["id"]){
				$newcart[] = $c;
			}
		}
		$_SESSION["cart"] = $newcart;
	}
}
print "<script>window.location='../cart.php';</script>";

?>

