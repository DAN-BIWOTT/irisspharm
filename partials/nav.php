<nav class="navbar navbar-expand-large bg-light fixed-top">
			<div class="container">
				<div class="navbar-head">
					<a href="index.php" class="navbar-brand">Iriss pharmaceuticals</a>
				</div>
				
			<ul class="nav nav-tabs">
				<?php
					if (!is_logged_in()):
				?>
			  <li class="nav-item">
			    <a class="nav-link Active" href="#">Home</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="modal" data-target="#loginModal">Hospital Log in</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="modal" data-target="#loginModal2">Supplier Log in</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="modal" data-target="#loginModal3">Admin</a>
			  </li>
			<?php endif; ?>
			<?php
				if (is_logged_in() && has_permission($_SESSION['SBUser'],'hospital')):
			?>
				<li class="nav-item">
				  <a class="nav-link" href="pages/hospital/adminpanel.php">Portal</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="pages/logout.php">Log out</a>
				</li>
			<?php endif; ?>
			<?php
				if (is_logged_in() && has_permission($_SESSION['SBUser'],'supplier')):
			?>
				<li class="nav-item">
				  <a class="nav-link" href="pages/supplier/adminpanel.php">Portal</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="pages/logout.php">Log out</a>
				</li>
			<?php endif; ?>
			<?php
				if (is_logged_in() && has_permission($_SESSION['SBUser'],'admin')):
			?>
				<li class="nav-item">
				  <a class="nav-link" href="pages/supplier/adminpanel.php">Portal</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="pages/logout.php">Log out</a>
				</li>
			<?php endif; ?>
			</ul>			
		</div>
		</nav>