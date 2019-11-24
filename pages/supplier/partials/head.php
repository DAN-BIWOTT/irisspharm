<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';
	if (!is_logged_in()) {
		login_error_redirect();
	}
	if (!has_permission($_SESSION['SBUser'],'supplier')) {
		permission_redirect('index.php');
	}
 ?>
	<head>
		<title>pharm|Home</title>
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
	    <link rel="stylesheet" href="../../css/custom.css">
		<script src="../../js/jquery.min.js" charset="utf-8"></script>
	    <script src="../../js/popper.js" charset="utf-8"></script>
	    <script src="../../js/bootstrap.min.js" charset="utf-8"></script>
	    <script src="../../js/custom.js" charset="utf-8"></script>
	    <link rel="stylesheet" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>