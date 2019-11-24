	<?php include'partials/head.php'; ?>
	<body>
		<section>
			<?php include'partials/nav.php'; ?>
			<?php include'partials/dbAccess.php'; ?>
		</section>
		<section class="orders">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12"><h1 class="text-center" style="padding-top: 10px;"> In Store</h1><hr></div>
					<div class="col-md-12">
						<table class="table table-striped table-bordered">
							<thead>
								<th>NO.</th>
								<th>Serial no.</th>
								<th>Name</th>
								<th>Quantity</th>
								<th></th>
							</thead>
							<tbody>
								<?php while ($p = mysqli_fetch_assoc($results)): ?>
								<tr>
									<td><?= $p['id']; ?></td>
									<td><?= $p['serialNumber']; ?></td>
									<td><?= $p['productName']; ?></td>
									<td><?= $p['productQuantity']; ?></td>
									<td>
										<a class="btn btn-sm btn-success" href="partials/dbAccess.php?edit=<?= $p['id']; ?>"><i class="fa fa-pencil"></i></a>
										<a class="btn btn-sm btn-danger" href="partials/dbAccess.php?delete=<?= $p['id']; ?>"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								<?php endwhile ?>
							</tbody>
						</table>
					</div>				</div>
			</div>
		</section>
		<section class="deliveries">
			
		</section>
	</body>
	<footer>
		
	</footer>
</html>