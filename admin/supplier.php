<html>
	<?php include'partials/head.php'; ?>
	<body>
		<?php include 'partials/nav.php'; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center text-primary">Add Supplier</h3><hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form action="../core/form_processing.php" method="POST" class="form-group">
						<input type="text" name="formtype" value="supplierreg" hidden>
						<div class="col-md-12">
							<label for="supplierName">Supplier Name</label>
							<input id="supplierName" name="supplierName" class="form-control" type="text">
						</div>
						<div class="col-md-12">
							<label for="supplierAdmin">Supplier Admin</label>
							<input id="supplierAdmin" name="supplierAdmin" class="form-control" type="text">
						</div>
						<div class="col-md-12">
							<label for="datereg">Date of registration</label>
							<input id="datereg" name="datereg" class="form-control" type="date">
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