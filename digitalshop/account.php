<?php 

include 'common_section/head.php';
include 'common_section/header.php';
include 'common_section/footer.php';
include 'common_section/head_tag.php';

?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- account.html  [XR&CO'2014], 1 08:12:39 1 -->
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
    
    <!-- Start PreLoader-->
    <?php echo $head; ?>
    <!-- Start header
    ============================================= -->
	    
	<main class="main">
        
        <!-- Start Breadcrumb
		============================================= -->
		<?php echo $header_part1.'Account'.$header_part2.'Account'.$header_part3; ?>
        <!-- End Breadcrumb -->
        
        <!-- Start Profile
		============================================= -->
        <div class="profile-area de-padding">
            <div class="container">
                <div class="profile-wpr">
                    <div class="row ps g-5">
                        <div class="col-lg-8">
                            <div class="profile-setting wow fadeInLeft">
                                <h5 class="pfs-title">Account Settigns</h5>
                                <form class="row pfs g-5">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-style-2" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-style-2" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-style-2" placeholder="Username">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control input-style-2" placeholder="Email">
                                    </div>
                                </form>
                                <h5 class="pfs-title">Change Password</h5>
                                <form class="row g-5">
                                    <div class="col-md-6">
                                        <input type="password" class="form-control input-style-2" placeholder="Current Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control input-style-2" placeholder="New Password">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control input-style-2" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-12">
                                        <div class="login-btns">
                                            <button type="submit" class="btn-6 login-btn">
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="user-profile">
                                <div class="user-profile-pic">
                                    <img src="assets/img/team/profile.png" alt="MaanSoft">
                                    <div class="user-profile-bio">
                                        <h5 class="work-title">Al Mahmud</h5>
                                        <span>UI/UX Designer</span>
                                    </div>
                                </div>
                                <div class="profile-list">
                                    <div class="category-list">
                                        <ul>
                                            <li>
                                                <a href="course.html">
                                                    <i><img src="assets/img/icons/cat-1.png" alt="MaanSoft"></i>
                                                    <span>Wordpress</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course.html">
                                                    <i><img src="assets/img/icons/cat-5.png" alt="MaanSoft"></i>
                                                    <span>HTML css</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course.html">
                                                    <i><img src="assets/img/icons/cat-3.png" alt="MaanSoft"></i>
                                                    <span>Laravel</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course.html">
                                                    <i><img src="assets/img/icons/cat-4.png" alt="MaanSoft"></i>
                                                    <span>Graphic Design</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course.html">
                                                    <i><img src="assets/img/icons/cat-5.png" alt="MaanSoft"></i>
                                                    <span>Mobile Apps</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course.html">
                                                    <i><img src="assets/img/icons/cat-6.png" alt="MaanSoft"></i>
                                                    <span>Admin Pannel</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="profile-btn">
                                            <a href="single.html" class="btn-2">
                                                <i>
                                                    <img src="assets/img/icons/login.png" alt="MaanSoft">
                                                </i>
                                                Login
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="full-width">
					<span class="icon icon-circle-1 wow zoomIn animated"><img src="assets/img/icons/icon-circle-1.png" alt="maansoft"></span>
					<span class="icon zoominout"><img src="assets/img/icons/4.png" alt="maansoft"></span>
				</div>
            </div>
        </div>
        <!-- End Profile -->
        
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


<!-- account.html  [XR&CO'2014], 1 08:12:42 1 -->
</html>