    <?php 
include $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';
include 'partials/index_controller.php';
 ?>
<!-- head -->
  <?php include'partials/head.php'; ?>
<body>

<!-- Page Wrapper -->
<div id="wrap">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>Welcome To Our Medical & Research Center | irisspharm</p>
        </div>
        <div class="col-sm-6">
          <div class="social-icons"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-dribbble"></i></a> <a href="#."><i class="fa fa-instagram"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Header -->
  <header>
    <div class="container">
      <div class="logo"> <a href="index.php"><img src="images/logo.png" alt=""></a> </div>
      
      <!-- Nav -->
      <nav class="navbar ownmenu">
        
        
        <!-- NAV -->
        <div class=" navbar-collapse" id="nav-open-btn">
          <ul class="nav">
            <?php
              if (!is_logged_in()):
            ?>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a data-toggle="modal" data-target="#loginModal">Hospital Log in</a>
            </li>
            <li>
              <a data-toggle="modal" data-target="#loginModal2">Supplier Log in</a>
            </li>
            <li>
              <a data-toggle="modal" data-target="#loginModal3">Admin</a>
            </li>
          <?php endif; ?>
          <?php
            if (is_logged_in() && has_permission($_SESSION['SBUser'],'hospital')):
          ?>
            <li>
              <a href="pages/hospital/adminpanel.php">Portal</a>
            </li>
            <li>
              <a href="pages/logout.php">Log out</a>
            </li>
          <?php endif; ?>
          <?php
            if (is_logged_in() && has_permission($_SESSION['SBUser'],'supplier')):
          ?>
            <li>
              <a href="pages/supplier/adminpanel.php">Portal</a>
            </li>
            <li>
              <a href="pages/logout.php">Log out</a>
            </li>
          <?php endif; ?>
          <?php
            if (is_logged_in() && has_permission($_SESSION['SBUser'],'admin')):
          ?>
            <li>
              <a href="pages/supplier/adminpanel.php">Portal</a>
            </li>
            <li>
              <a href="pages/logout.php">Log out</a>
            </li>
          <?php endif; ?>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- End Header --> 
  
  <!-- Bnr Header -->
  <section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <h3>WE ARE IRISS</h3>
        <h1>PROFESSIONAL TEAM OF DOCTORS AND SUPPLIERS</h1>
      
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- DOCTOR LIST -->
    <section class="young-doc-team p-t-b-150 padding-bottom-0">
      <div class="container"> 
        
        <!-- Heading -->
        <div class="heading-block">
          <h4>Chose your list of suppliers</h4>
          <hr>
          <span>Duis autem vel eum iriure dolor in hendrerit n vuew lputate velit esse molestie conseu vel illum dolore eufe ugiat nulla facilisis at vero.</span> </div>
        
         <?php while($sp = mysqli_fetch_assoc($sql)): ?>
        <!-- Soctor List Slider -->
        <div class="doct-list">
          <div class="item"> <a href="partials/add.php?add=<?= $sp['id'] ?>"><img class="img-responsive" src="images/doc-img-1.jpg" alt="" ></a> </div>

        </div>
      <?php endwhile; ?>
      </div>
  
    </section>
    
    <!-- DOCTOR LIST -->
    <section class="p-t-b-150">
      <div class="container">
      
      <!-- Heading -->
      <div class="heading-block">
        <h4>From your chosen list of suppliers</h4>
        <hr>
        <span>Duis autem vel eum iriure dolor in hendrerit n vuew lputate velit esse molestie conseu vel illum dolore eufe ugiat nulla facilisis at vero.</span> </div>
      
      <!-- OUR TEAM -->
      <div class="our-team"> 
        
        <!-- Team  -->
        <div class="team-part">
          <div class="row"> 
            <?php while($p = mysqli_fetch_assoc($result)): ?>
            <!-- Team Member -->
            <div class="col-sm-4">
              <article> 
                <!-- Team Img -->
                <div class="team-img"> <img class="img-responsive" src="<?= $p['photo']; ?>" alt=""> 
                  
                <form action="add_to_cart.php" method="post">
                  <input type="text" name="productName" value="<?= $p['productName']; ?>" hidden>
                  <input type="text" name="product" value="<?= $p['id']; ?>" hidden>
                  <input type="text" name="productQuantity" value="<?= $p['productQuantity']; ?>" hidden>
                  <input type="text" name="photo" value="<?= $p['photo']; ?>" hidden>
                </div>
                
                <!-- Team Name -->
                <div class="team-name">
                  <h6><?= $p['productName']; ?></h6>
                  <p><?= $p['serialNumber']; ?></p>
                  <button class="btn btn-sm btn-success">Add to cart</button>
                </form>
                </div>
              </article>
            </div>
      <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <!-- Footer -->
  <footer>
    <div class="container"> 
      
      <!-- Row -->
      <div class="row"> 
        
        <!-- About Us -->
        <div class="col-md-6">
          <div class="small-info"> <img src="images/logo-light.png" alt="">
            <p>We work in a friendly and efficient using the latest technologies and sharing our expertise to make a diagnosis and implement cutting-edge supply chain methods.</p>
            <ul class="social_icons">
              <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
              <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
              <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
            </ul>
            
            <!-- News Letter -->
            <h5>register newsletter</h5>
            <form>
              <input type="email"  placeholder="Enter your email here" required>
              <button type="submit"> Subscribe</button>
            </form>
          </div>
        </div>
        
        <!-- Latest Tweet -->
        <div class="col-md-3">
          <div class="latest-tweet">
            <h5>Latest tweets</h5>
            <ul>
              
              <!--Tweet 1 -->
              <li>
                <p><span>@medical</span> <a href="#."> dankibiwott254@gmail.com</a></p>
                <span class="date"> - Thursday March 9, 2019</span> </li>
              
              <!--Tweet 2 -->
              <li>
                <p><span>@medical</span> In hendrerit in molestie consequat in <a href="#."> don@gmail.com</a></p>
                <span class="date"> - Thursday March 9, 2019</span> </li>
              
              <!--Tweet 3 -->
              <li>
                <p><span>@medical</span> Duis autem vel eum iriure <span>@medikal</span> dolor in hendrerit in molestie consequat</p>
                <span class="date"> - Thursday March 9, 2019</span> </li>
            </ul>
          </div>
        </div>
        
        <!-- Patient Guide -->
        <div class="col-md-3">
          <div class="links text-right">
            <h5>Patient Guide</h5>
            <ul>
              <li><a href="#.">Choosing a supplier</a></li>
              <li><a href="#."> Health journals</a></li>
              <li><a href="#."> Insurance converage</a></li>
              <li><a href="#."> Talking to your doctor</a></li>
            </ul>
            
            <!-- Timing -->
            <div class="timing">
              <h5>opening hours</h5>
              <p>Mon to Fri <span> 8:00 am to 7:00pm</span></p>
              <p>Sun & Sat <span>9:00 am to 5:00pm</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Rights -->
  <div class="rights style-2">
    <div class="container">
      <p>© 2019 Medical. Made by Sean Biwott</p>
    </div>
  </div>
  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP  --> 
</div>
<!-- End Page Wrapper --> 
<?php include'partials/login.php';?>
<!-- JavaScripts --> 
<script src="js/vendors/jquery/jquery.min.js"></script> 
<script src="js/vendors/wow.min.js"></script> 
<script src="js/vendors/bootstrap.min.js"></script> 
<script src="js/vendors/own-menu.js"></script> 
<script src="js/vendors/jquery.sticky.js"></script> 
<script src="js/vendors/owl.carousel.min.js"></script> 
<script src="js/vendors/jquery.magnific-popup.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.tp.min.js"></script> 
<script src="js/main.js"></script>
</body>
</html>