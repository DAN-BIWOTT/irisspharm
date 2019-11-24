<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';
$sp_id = $_GET['add'];
// $sp_id .= ':';
$cr_user = $_SESSION['SBUser'];
$db->query("UPDATE hospital SET sup_ids = '$sp_id' WHERE user_id = '$cr_user'");
header('Location: ../index.php');
 ?>