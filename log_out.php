<?php

include_once("modulos/sessions.php");
$objses = new Sessions();
$objses->init();

$objses->destroy();

header('Location: index.php');

?>