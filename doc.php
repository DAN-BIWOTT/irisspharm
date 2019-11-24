<html>
<!-- head -->
	<?php include'partials/head.php'; ?>
	<body>
		<?php 
include $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';
include 'partials/index_controller.php';
 ?>
		<!-- Navbar -->
		<?php include 'partials/nav.php'; ?>
		
		<!-- Header wrapper -->
		<div id="backpicture">
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="padding-top: 20px;">
					<div class="jumbotron jumbotron-fluid">
					  <div class="container">
					    <h1 class="display-4">Lorem ipsum</h1>
					    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo provident praesentium aliquid reiciendis quidem aliquam quasi facilis omnis facere architecto, maxime perferendis recusandae, maiores modi culpa eum ducimus voluptates repellat!</p>
					  </div>
					</div>
				</div>
				<div class="col-md-8">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia maxime sed iusto earum est, velit commodi, ea reprehenderit cum hic fugiat minus fugit necessitatibus? Expedita eligendi magni assumenda consequatur nemo!</p>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="images/headers/Mac_canon-a60c4a74-b828-4480-a0bb-a4a716f0235d.jpg" alt="Card image cap">
					  <div class="card-body">
					    <p class="card-text">Lorem ipsum dolor sit amet.</p>
					  </div>
					</div>
				</div>
			</div>
			<div class="row">
<?php while($p = mysqli_fetch_assoc($result)): ?>
				<div class="col-md-4 customDistance">
					<div class="card" style="width: 18rem;">
						<form action="add_to_cart.php" method="post">
							<input type="text" name="productName" value="<?= $p['productName']; ?>" hidden>
							<input type="text" name="product" value="<?= $p['id']; ?>" hidden>
							<input type="text" name="productQuantity" value="<?= $p['productQuantity']; ?>" hidden>
							<input type="text" name="photo" value="<?= $p['photo']; ?>" hidden>
							<a data-target="#medical" data-toggle="modal">
								<img class="card-img-top" src="<?= $p['photo']; ?>" alt="Card image cap" style="max-height: 160px;">
							</a>
						
					  <div class="card-body">
					    <p class="card-text">Medical name: <?= $p['productName']; ?></p><hr>
					    <p class="card-text">Items left: <?= $p['productQuantity']; ?></p>
					    <button class="btn btn-sm btn-success">Add to cart</button>
					  </div>
					  </form>
					</div>
				</div>
<?php endwhile; ?>
			</div>

		</div>
		<div class="jumbotron customDistance">
		<section id="contact">
          <div class="bg container-fluid">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" action="mail/contact_me.php" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="phone" class="form-control" required="required" placeholder="Phone Number...">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>Iriss Inc.</p>
							<p>Kabarak Main Campus</p>
							<p>NAKURU, KENYA</p>
							<p>Mobile: +254 753525665</p>
							
							<p>Email: info@Iriss.Inc</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>
        </section>
		</div>	
	</body>
	<!-- FOOTER -->
	<?php include'partials/footer.php'; ?>
	<!-- modal -->
	<!-- Button trigger modal -->
<!-- Modal -->
<?php include'partials/login.php';?>
</html>