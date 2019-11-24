<html>
	<?php 
	require_once $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';
	include'partials/head.php';
	if ($_GET) {
		$edit_id = $_GET['edit'];
		$result = mysqli_fetch_assoc($db->query("SELECT * FROM hospital WHERE id = $edit_id")); 
	}
	 ?>
	<body>
		<?php include 'partials/nav.php'; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center text-primary">Edit Hospital</h3><hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form action="../core/form_processing.php" method="POST" class="form-group">
						<input type="text" name="formtype" value="hospitalEdit" hidden>
						<input type="text" name="hospitalId" value="<?= $result['id']; ?>" hidden>
						<div class="col-md-12">
							<label for="hospitalName">Hospital Name</label>
							<input id="hospitalName" value="<?= $result['hospitalName']; ?>" name="hospitalName" class="form-control" type="text">
						</div>
						<div class="col-md-12">
							<label for="hospitalAdmin">Hospital Admin</label>
							<input id="hospitalAdmin" class="form-control" value="<?= $result['hospitalReg']; ?>" name="hospitalReg" type="text">
						</div>
						<div class="col-md-12">
							<label for="datereg">Date of registration</label>
							<input id="datereg" class="form-control" value="<?= $result['datereg']; ?>" name="datereg" type="date">
						</div>
						<div class="col-md-12" style="padding-top: 10px;">
							<button class="btn btn-md btn-primary float-right">Edit</button>
						</div>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</body>
</html>