<html>
<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';
	if (!is_logged_in()) {
		login_error_redirect();
	}
	if (!has_permission($_SESSION['SBUser'],'hospital')) {
		permission_redirect('index.php');
	}
	$myId = $_SESSION['SBUser'];
	$result = $db->query("SELECT * FROM cart WHERE delivered = 1 AND user_id = '$myId'");

 ?>
	<head>
		<title>pharm|Home</title>
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
	    <link rel="stylesheet" href="../../css/custom.css">
		<script src="../../js/jquery.min.js" charset="utf-8"></script>
	    <script src="../../js/popper.js" charset="utf-8"></script>
	    <script src="../../js/bootstrap.min.js" charset="utf-8"></script>
	    <script src="../../js/custom.js" charset="utf-8"></script>
	</head>
	<body>
	<?php include 'hospitalNav.php'; ;?>
<!-- Warehouse -->
<table class="table table-bordered table-striped">
	<thead>
		<h2 class="text-center">WAREHOUSE STOCK</h2><hr>
		<th>name</th>
		<th>Quantity</th>
	</thead>
	<tbody>
		<?php while($del = mysqli_fetch_assoc($result)): ?>
			<tr>
				<td><?= $del['name'] ;?></td>
				<td><?= $del['quantity'] ;?></td>
			</tr>
		<?php endwhile; ?>
	</tbody>
</table>
<!-- end warehouse -->
	</body>
	<footer>
		<div class="jumbotron">
			
		</div>
	</footer>
</html>