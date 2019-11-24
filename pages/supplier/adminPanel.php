	<?php require_once $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';?>
	<?php include'partials/head.php'; ?>
	<body>
		<section>
			<?php include'partials/nav.php'; ?>
		</section>
		<?php
			$current_user = $_SESSION['SBUser'];
			$result = $db->query("SELECT * FROM cart WHERE supplier_id = '$current_user' AND in_progress = 1");
			$result2 = $db->query("SELECT * FROM cart WHERE supplier_id = '$current_user' AND delivered = 1");
			$result3 = $db->query("SELECT * FROM cart WHERE supplier_id = '$current_user' AND delivered = 0");
		?>
		<section class="orders">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12"><h1 class="text-center" style="padding-top: 10px;"> ORDERS</h1><hr></div>
					<div class="col-md-12">
						<table class="table table-striped table-bordered">
							<thead>
								<th>NO.</th>
								<th>Name</th>
								<th>Quantity</th>
								<th>state</th>
							</thead>
							<tbody>
								
								<?php while($drug = mysqli_fetch_assoc($result)): ?>
								<tr>
									<td><?= $drug['id'] ?></td>
									<td><?= $drug['name'] ?></td>
									<td><?= $drug['quantity'] ?></td>
									<td>
										<a href="supControl.php?delivered=<?= $drug['id'] ?>" class="btn btn-sm btn-success">Delivered</a>
										<a href="supControl.php?failed=<?= $drug['id'] ?>" class="btn btn-sm btn-danger">Failed delivery</a>
									</td>
								</tr>
							<?php endwhile; ?>
							</tbody>
						</table>
					</div>
					<div class="col-md-12"><h1 class="text-center">Successful Deliveries</h1><hr></div>
					<div class="col-md-8">
						<table class="table table-striped table-bordered">
							<thead>
								<th>NO.</th>
								<th>Serial no.</th>
								<th>Name</th>
								<th>State</th>
							</thead>
							<tbody>
								<?php while($drug2 = mysqli_fetch_assoc($result2)): ?>
									<tr>
										<td><?= $drug2['id'] ?></td>
										<td><?= $drug2['name'] ?></td>
										<td><?= $drug2['quantity'] ?></td>
										<td><span class="badge badge-success">Success</span>
										</td>
									</tr>
								<?php endwhile; ?>
								
							</tbody>
						</table>
					</div>
						<div class="col-md-12"><h1 class="text-center">Failed Deliveries</h1><hr></div>
					<div class="col-md-8">
						<table class="table table-striped table-bordered">
							<thead>
								<th>NO.</th>
								<th>Serial no.</th>
								<th>Name</th>
								<th>State</th>
							</thead>
							<tbody>
								<?php while($drug2 = mysqli_fetch_assoc($result3)): ?>
									<tr>
										<td><?= $drug2['id'] ?></td>
										<td><?= $drug2['name'] ?></td>
										<td><?= $drug2['quantity'] ?></td>
										<td><span class="badge badge-danger">Failed</span>
										</td>
									</tr>
								<?php endwhile; ?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		<section class="deliveries">
			
		</section>
	</body>
	<footer>
		
	</footer>
</html>