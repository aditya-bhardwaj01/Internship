<?php 

include 'common_section/head.php';
include 'common_section/header.php';
include 'common_section/footer.php';
include 'common_section/head_tag.php';

?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- single.html  [XR&CO'2014], 1 08:12:52 1 -->
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
        
        <!-- Start Breadcrumb
		============================================= -->
		<?php echo $header_part1.'Blog Details'.$header_part2.'Blog Details'.$header_part3; ?>
        <!-- End Breadcrumb -->
        
        <!-- Start Blog Single
		============================================= -->
        <div class="blog-single-area de-padding">
            <div class="container">
                <div class="blog-single-wpr">
                    <div class="row ps g-xl-5">
                        <div class="col-lg-8">
							<?php
							$id = $_GET['id'];
							$sql = "SELECT * FROM post WHERE id = $id AND site_id = $this_site_id AND status = 'published'";
							$res = mysqli_query($conn, $sql);

							foreach($res as $row){
							?>
                            <div class="theme-single blog-single">
                                <div class="theme-pic">
                                    <img src="<?php echo $row['featured_image']; ?>" class="big-pic" alt="MaanSoft">
                                </div>
                                <div class="theme-info">
                                    <div class="theme-meta">
                                        <div class="theme-meta-left">
                                            <ul>
                                                <li>By <a href="#">Maan Theme</a></li>
                                                <li>
                                                    <i><img src="assets/img/icons/comment.png" alt="MaanSoft"></i>
                                                    4 comments
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="theme-meta-right">
                                             <ul class="footer-social">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                            <div class="share-btn">
                                                <a href="#"><i class="ti-sharethis"></i>Share</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="theme-desc">
                                        <h2 class="about-title"><?php echo $row['post_title']; ?></h2>
                                        <p class="mb-30">
											<?php echo htmlspecialchars($row['post_description'], ENT_QUOTES); ?>
                                        </p>
										<blockquote class="blockqoute mb-30">
											<div class="block-qoute">
												<img src="assets/img/single/single-qoute.png" alt="MaanSoft">
											</div>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
										</blockquote>
										<div class="single-content-img mb-30">
											<figure class="image"><img src="assets/img/single/single-content-img.jpg" alt="MaanSoft"></figure>
											
											<div class="single-sci-overlay">
											<img src="<?php echo $row['featured_image']; ?>" class="big-pic" alt="MaanSoft">
											 </div>




										</div>
										<p class="mb-30">
											<?php echo htmlspecialchars($row['post_description'], ENT_QUOTES); ?>
                                        </p>
										<!-- <p class="mb-30">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
										</p>
										<p class="mb-50">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  
										</p> -->
										<div class="content-tags pb-20">
											<h5 class="mb-0">Tags</h5>
											<ul>
												<?php 
													$tags = explode(',', $row['tags']);
													foreach($tags as $tag){
												?>
												<li><a href="#" class="tags-link"><?php echo $tag; ?></a></li>
												<?php } ?>
											</ul>
										</div>
                                    </div>
                                </div>
                            </div>
							<?php } ?>
							<div class="single-comments-section blg-single">
								<h4 class="single-content-title">Comments</h4>
								<div class="single-commentor">
									<ul>
										<li>
											<div class="single-commentor-user">
												<img src="assets/img/single/user-1.png" alt="MaanSoft">
												<div class="single-commentor-user-bio">
													<div class="single-commentor-user-bio-head">
														<h5>Al Mahmud </h5>
													</div>
													<p class="mb-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .
													</p>
													<a href="#" class="share d-block">
														<img src="assets/img/icons/reply.png" alt="MaanSoft">
														reply
													</a>
												</div>
											</div>
										</li>
										<li>
											<div class="single-commentor-user">
												<img src="assets/img/single/user-2.png" alt="MaanSoft">
												<div class="single-commentor-user-bio">
													<div class="single-commentor-user-bio-head">
														<h5>Miftahul Ashfia </h5>
													</div>
													<p class="mb-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .
													</p>
													<a href="#" class="share d-block">
														<img src="assets/img/icons/reply.png" alt="MaanSoft">
														reply
													</a>
												</div>
											</div>
										</li>
										<li>
											<div class="single-commentor-user de-bpd">
												<img src="assets/img/single/user-3.png" alt="MaanSoft">
												<div class="single-commentor-user-bio">
													<div class="single-commentor-user-bio-head">
														<h5>William Rhys </h5>
													</div>
													<p class="mb-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .
													</p>
													<a href="#" class="share d-block">
														<img src="assets/img/icons/reply.png" alt="MaanSoft">
														reply
													</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="single-comments-section-form">
									<h4 class="single-content-title">Leave a Reply</h4>
									<form>
										<div class="row g-5">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control input-style-2" placeholder="Your Name*">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="email" class="form-control input-style-2" placeholder="Your Email*">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea class="form-control input-style-2" rows="5" placeholder="Your Comment*"></textarea>
												</div>
												<button type="submit" class="btn-6 mt-30">
													Post Comment
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="sidebar">
                                <!-- Search-->
                                <div class="widget search">
                                    <h5 class="work-title">Search</h5>
                                    <form class="search-form">
                                        <input type="text" class="input-style-2" placeholder="Search">
                                        <button class="btn-sub">
                                            <i><img src="assets/img/icons/search.png" alt="MaanSoft"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- Category -->
                                <div class="widget category">
                                    <h5 class="work-title">Category</h5>
                                    <div class="category-list">
                                        <ul>
											<?php
												$sql = "SELECT DISTINCT(category), featured_image FROM post WHERE 
														site_id = $this_site_id AND status = 'published'";
												$res = mysqli_query($conn, $sql);

												foreach($res as $row){
											?>
                                            <li>
                                                <a href="course.html">
                                                    <i>
														<img src="<?php echo $row['featured_image']; ?>" alt="MaanSoft" style="width: 40px; height: 40px;">
													</i>
                                                    <span><?php echo $row['category']; ?></span>
                                                </a>
                                            </li>
											<?php } ?>
                                            <!-- <li>
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
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <!-- Recent Post -->
                                <div class="widget recent-post">
									<h5 class="work-title">Recent Post</h5>
									<?php 
										$sql = "SELECT * FROM post WHERE site_id = $this_site_id AND status = 'published' 
												ORDER BY created_date DESC LIMIT 3";

										$res = mysqli_query($conn, $sql);

										foreach($res as $row){
									?>
									<div class="recent-post-single">
										<div class="recent-post-pic">
											<img src="<?php echo $row['featured_image']; ?>" alt="MaanSoft" style="width: 80px; height: 60px;">
										</div>
										<div class="recent-post-bio">
											<h6>
												<a href="single.php?id=<?php echo $row['id']; ?>">
													<?php echo $row['post_title']; ?>
												</a>
											</h6>
											<span>
												<i>
													<img src="assets/img/icons/rc.png" alt="MaanSoft">
												</i>
												<?php 
                                        		$dt = new DateTime($row['created_date']);
                                        		$mon = date("F", mktime(0, 0, 0, $dt->format('m'), 10));
                                        		$month = substr($mon, 0, 3);
                                        		$day = $dt->format('d');
                                        		$year = $dt->format('Y');
                                        		?>
                                        		<?php echo $day.' '.$month.', '.$year; ?>
											</span>
										</div>
									</div>
									<?php } ?>
									<!-- <div class="recent-post-single">
										<div class="recent-post-pic">
											<img src="assets/img/single/de-2.jpg" alt="MaanSoft">
										</div>
										<div class="recent-post-bio">
											<h6>
												<a href="single.html">Fun and Faith Activities for Celebrating</a>
											</h6>
											<span>
												<i>
													<img src="assets/img/icons/rc.png" alt="MaanSoft">
												</i>
												09 June, 2021
											</span>
										</div>
									</div>
									<div class="recent-post-single">
										<div class="recent-post-pic">
											<img src="assets/img/single/de-1.jpg" alt="MaanSoft">
										</div>
										<div class="recent-post-bio">
											<h6>
												<a href="single.html">How to Become a Better Parent</a>
											</h6>
											<span>
												<i>
													<img src="assets/img/icons/rc.png" alt="MaanSoft">
												</i>
												09 June, 2021
											</span>
										</div>
									</div> -->
								</div>
								<!-- Recent Post -->
                                <div class="widget sidebar-tags">
									<h5 class="work-title">Tags</h5>
									<div class="tags">
										<a href="course.html" class="tags-link">Web Development</a>
										<a href="course.html" class="tags-link">wordpress</a>
										<a href="course.html" class="tags-link">Mobile Apps</a>
										<a href="course.html" class="tags-link">Admon Pannel</a>
										<a href="course.html" class="tags-link">HTML Css</a>
										<a href="course.html" class="tags-link">Laravels</a>
									</div>
								</div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product -->
        
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


<!-- single.html  [XR&CO'2014], 1 08:12:57 1 -->
</html>