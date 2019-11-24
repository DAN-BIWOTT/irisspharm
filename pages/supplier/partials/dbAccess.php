<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';

$query1 = "SELECT * FROM products WHERE deleted = 0";
$results = $db->query($query1);

$query2 = "SELECT * FROM products WHERE deleted = 1";
$resultsArchive = $db->query($query2);

// DELETE PRODUCTS BY SENDING THEM TO ARCHIVE
if ($_GET) {
	if ($_GET['delete']) {
	$deleted = $_GET['delete'];var_dump($deleted);
	$myquery = "UPDATE products SET deleted = 1 WHERE id = '$deleted'";
	$db->query($myquery);
	header('Location: ../store.php');
 }

 // RESTORE DELETED PRODUCTS
 	if ($_GET['restore']) {
	$restore = $_GET['restore'];var_dump($deleted);
	$myquery = "UPDATE products SET deleted = 0 WHERE id = '$restore'";
	$db->query($myquery);
	header('Location: ../store.php');
 }

 // EDIT PRODUCTS

 	
}

?>