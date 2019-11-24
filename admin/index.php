<html>
	<?php include'partials/head.php'; 
			include 'partials/index_control.php';
	?>
	<body>
		<?php include 'partials/nav.php'; ?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center text-primary">Hospitals on record</h3><hr>
					<table class="table table-bordered table-striped">
						<thead>
							<th>id</th>
							<th>Name</th>
							<th>hospital admin</th>
							<th>date registered</th>
							<th></th>
						</thead>
						<tbody>
							<?php while($h = mysqli_fetch_assoc($result)): ?>
							<tr>
								<td><?= $h['id']; ?></td>
								<td><?= $h['hospitalName']; ?></td>
								<td><?= $h['hospitalReg']; ?></td>
								<td><?= $h['datereg']; ?></td>
								<td>
									<button class="btn btn-md btn-outline-danger" onclick="deleteMe('hospital','id',<?= $h['id']; ?>);">DELETE</button>
									<a href="hospitalEdit.php?edit=<?= $h['id']; ?>" class="btn btn-md btn-outline-success">Edit</a>
								</td>
							</tr>
						<?php endwhile ?>
						</tbody>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center text-primary">Suppliers on record</h3><hr>
					<table class="table table-bordered table-striped">
						<thead>
							<th>id</th>
							<th>Name</th>
							<th>Suppliers</th>
							<th>date registered</th>
							<th></th>
						</thead>
						<tbody>
							<?php while($s = mysqli_fetch_assoc($result2)): ?>
							<tr>
								<td><?= $s['id'] ;?></td>
								<td><?= $s['supplierName'] ;?></td>
								<td><?= $s['supplierAdmin'] ;?></td>
								<td><?= $s['datereg'] ;?></td>
								<td>
									<button class="btn btn-md btn-outline-danger" onclick="deleteMe('supplier','id',<?= $s['id']; ?>);">DELETE</button>
									<a href="SupplierEdit.php?edit=<?= $s['id']; ?>" class="btn btn-md btn-outline-success">Edit</a>
								</td>
							</tr>
							<?php endwhile ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
	<footer>
		
	</footer>
</html>