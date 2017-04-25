<?php 
include_once '../modulos/sessions.php';
include_once '../clases/carrito.php';
include_once '../clases/detailCarrito.php';
include_once '../clases/Conexion.php';

$sess=new Sessions();
$con=new Conexion();
$sess->init();

$carrito=new carrito();


$detail=new detailCarrito();


if(!empty($_POST)){


$carrito->set('client_email', $_POST['email']);
$carrito->set('created_at', 'Now()');


$q1=$carrito->crear();    

if($q1){
$cart_id = $q1;
foreach($_SESSION["cart"] as $c)
{
$detail->set('product_id', $c['product_id']);
$detail->set('q', $c['q']);
$detail->set('cart_id', $cart_id);

$q1=$detail->crear();

}

unset($_SESSION["cart"]);
}
}

print "<script>alert('Venta procesada exitosamente');window.location='../products.php';</script>";
?>