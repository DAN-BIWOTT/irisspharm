<?php
$db = mysqli_connect('127.0.0.1','root','Kibiwott_254','irispharm');
 	
if(mysqli_connect_errno()){
	echo "Error due to the following causalities: ".mysqli_connect_error();
	die();
}
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/irisspharm/config.php';
require_once BASEURL.'helpers/helpers.php';
// session_destroy();
$cart_id = '';
if (isset($_COOKIE[CART_COOKIE])) {
	$cart_id = $_COOKIE[CART_COOKIE];
}

if (isset($_SESSION['success_flash'])) {
	echo('<div class="bg-success"><p class="text-white text-center">'.$_SESSION['success_flash'].'</p></div>');
	unset($_SESSION['success_flash']);
}

if (isset($_SESSION['error_flash'])) {
	echo('<div class="bg-danger"><p class="text-danger text-center">'.$_SESSION['error_flash'].'</p></div>');
	unset($_SESSION['error_flash']);
}
?>