<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';

  $user_id = ((isset($_SESSION['SBUser']))?$_SESSION['SBUser']:'') ;
  $sp_ids_result = mysqli_fetch_assoc($db->query("SELECT * FROM hospital WHERE user_id = '$user_id'"));
 
  $result = $db->query("SELECT * FROM products");
  $sql = $db->query("SELECT * FROM supplier");

?>