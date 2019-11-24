<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';

$result = $db->query("SELECT * FROM hospital");
$result2 = $db->query("SELECT * FROM supplier");
?>