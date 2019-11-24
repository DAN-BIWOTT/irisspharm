<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';
$user = $_SESSION['SBUser'];
$result = $db->query("SELECT * FROM cart WHERE user_id = '$user' ");
$result2 = mysqli_fetch_assoc($result);
$result3 = mysqli_num_rows($result);
?>