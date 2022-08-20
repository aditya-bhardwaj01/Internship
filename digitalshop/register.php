<?php 

include 'common_section/head.php';
include 'common_section/header.php';
include 'common_section/footer.php';
include 'common_section/head_tag.php';

?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- register.html  [XR&CO'2014], 1 08:12:39 1 -->
<head>	
<?php echo $head_tag; ?>
</head>

<body id="bdy">		

	<!-- Start PreLoader 
    ============================================= -->
	<section>
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
					<div class="txt-loading">
						<span data-text-preloader="L" class="letters-loading">
							L
						</span>
						
						<span data-text-preloader="O" class="letters-loading">
							O
						</span>
						
						<span data-text-preloader="A" class="letters-loading">
							A
						</span>
						
						<span data-text-preloader="D" class="letters-loading">
							D
						</span>
						
						<span data-text-preloader="I" class="letters-loading">
							I
						</span>
						
						<span data-text-preloader="N" class="letters-loading">
							N
						</span>
						
						<span data-text-preloader="G" class="letters-loading">
							G
						</span>
					</div>
				</div>	
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>
	</section>
	<!-- Start PreLoader-->
    
	<!-- Start header
    ============================================= -->
    <?php echo $head; ?>
    <!-- End header -->
	    
	<main class="main">
		<section class="maan-user-account-section">
			<div class="container">
				<div class="maan-user-account-wraper wow fadeInUp">
					<div class="user-header-area">
						<a href="index.html" class="logo d-none d-sm-block"><img src="assets/img/logo/logo.png" alt=""></a>
						<nav>
							<div class="nav nav-tabs maan-swetch-btn" id="nav-tab" role="tablist">
							  <button class="nav-link login-btn maan-btn" id="Login-tab" data-bs-toggle="tab" data-bs-target="#Login" type="button" role="tab" aria-selected="false">Login</button>
							  <button class="nav-link registration-btn active" id="registration-tab" data-bs-toggle="tab" data-bs-target="#registration" type="button" role="tab" aria-selected="true">Registration</button>
							</div>
						</nav>
					</div>
					  <div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade" id="Login" role="tabpanel" aria-labelledby="Login-tab">
							<form>
								<div class="maan-input-group">
									<input type="text" placeholder="company.moda@gmail.com">
									<span><i class="fas fa-envelope"></i></span>
								</div>
								<div class="maan-input-group">
									<input type="text" placeholder="* * * * * * * * * * * * *">
									<span><i class="fa fa-eye-slash"></i></span>
								</div>
								<span class="forget-pass">Forget Password ? <a href="#">Click Here</a></span>
								<a href="#" class="maan-primary-btn maan-btn">Login</a>
								<span class="forget-pass m-0">Don't have an account ? <a href="#">Create Account</a></span>
							</form>
						</div>
						<div class="tab-pane fade active show" id="registration" role="tabpanel" aria-labelledby="registration-tab">
							<form>
								<div class="maan-input-group">
									<input type="text" placeholder="First Name">
								</div>
								<div class="maan-input-group">
									<input type="text" placeholder="Last Name">
								</div>
								<div class="maan-input-group">
									<input type="text" placeholder="Email">
									<span><i class="fas fa-envelope"></i></span>
								</div>
								<div class="maan-input-group">
									<input type="text" placeholder="Password">
									<span><i class="fa fa-eye-slash"></i></span>
								</div>
								<a href="login.html" class="maan-primary-btn maan-btn">Login</a>
								<span class="forget-pass m-0">Don't have an account ? <a href="#">Create Account</a></span>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- End Register -->
        
	</main>	
		
	<div class="clearfix"></div>
	
	<!-- Start Footer
	============================================= -->
	<?php echo $footer; ?>
	<!-- End Footer-->	
	
	<!-- Start Scroll top
	============================================= -->
	<a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
	<!-- End Scroll top-->
	
	<!-- Start Range -->
	<div class="widget slide-range d-none">
		<h5 class="work-title">Filter by price</h5>
		<div class="slidecontainer">
			<input type="range" min="1" max="100" value="49" class="slider" id="myRange">
			<p>0 - <span id="demo"></span></p>
		</div>
	</div>
	<!-- End Range-->
	
  	<!-- jQuery Frameworks
    ============================================= -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>
	<script src="assets/js/jquery.easing.min.js"></script>
	<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-menu.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
	<script src="assets/js/count-to.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
	
</body>


<!-- register.html  [XR&CO'2014], 1 08:12:39 1 -->
</html>