<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';
session_destroy();
header('Location: ../../index.php');
?>