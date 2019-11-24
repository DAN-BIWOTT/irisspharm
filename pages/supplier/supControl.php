<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';
if ($_GET['delivered']) {
	$myId = $_GET['delivered'];
	$db->query("UPDATE cart SET delivered = 1 WHERE id = '$myId'");
	header('Location: adminpanel.php');
}if($_GET['failed']){
	$myId = $_GET['failed'];
	$db->query("UPDATE cart SET delivered = 0 WHERE id = '$myId'");
	header('Location: adminpanel.php');
}

?>