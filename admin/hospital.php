<html>
	<?php include'partials/head.php';
	 ?>
	<body>
		<?php include 'partials/nav.php'; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center text-primary">Add Hospital</h3><hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form action="../core/form_processing.php" method="POST" class="form-group">
						<input type="text" name="formtype" value="hospitalreg" hidden>
						<div class="col-md-12">
							<label for="hospitalName">Hospital Name</label>
							<input id="hospitalName" name="hospitalName" class="form-control" type="text">
						</div>
						<div class="col-md-12">
							<label for="hospitalAdmin">Hospital Admin</label>
							<input id="hospitalAdmin" class="form-control" name="hospitalReg" type="text">
						</div>
						<div class="col-md-12">
							<label for="cart_id">Cart</label>
							<input id="hospitalAdmin" class="form-control" name="cart" type="number">
						</div>
						<div class="col-md-12">
							<label for="datereg">Date of registration</label>
							<input id="datereg" class="form-control" name="datereg" type="date">
						</div>
						<div class="col-md-12" style="padding-top: 10px;">
							<button class="btn btn-md btn-primary float-right">REGISTER</button>
						</div>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</body>
</html>