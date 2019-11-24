<html>
<!-- HEAD -->
<?php include'partials/head.php'; ?>
	<body>
	<!-- Navigation -->
  <?php include'partials/nav.php'; ?>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-12"><h1 class="text-primary text-center">Add items to stock</h1><hr></div>
  		<div class="col-md-3"></div>
  		<div class="col-md-6">
  			<form action="../../core/form_processing.php" method="post" enctype="multipart/form-data">
          <input type="text" name="formtype" value="addProduct" hidden>
  				<div class="form-group">
  					<label for="SerialNumber">Serial Number</label>
  					<input type="text" class="form-control" name="serialNumber">
  				</div>
  				<div class="form-group">
  					<label for="Name">Product Name</label>
  					<input type="text" class="form-control" name="productName">
  				</div>
  				<div class="form-group">
  					<label for="Quantity">Quantity</label>
  					<input type="Number" class="form-control" name="productQuantity">
  				</div>
          <div class="form-group">
            <label for="photo">Image</label>
            <input type="file" class="form-control" name="photo">
          </div>
  				<div class="form-group">
  					<button type="submit" class="btn btn-md btn-primary">Submit</button>
  				</div>
  			</form>
  		</div>
  		<div class="col-md-3"></div>
  	</div>
  </div>
	</body>
	<footer>
		<div class="jumbotron">
			
		</div>
	</footer>
</html>
<html>