<?php 

include 'common_section/head.php';
include 'common_section/header.php';
include 'common_section/footer.php';
include 'common_section/head_tag.php';

?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- blog.html  [XR&CO'2014], 1 08:12:51 1 -->
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
		<?php echo $header_part1.'Blog'.$header_part2.'Blog'.$header_part3; ?>
        <!-- End Breadcrumb -->
        
        <!-- Start Blog
		============================================= -->
        <div class="blog-area de-padding">
            <div class="container">
                <div class="blog-wpr grid-3">

                    <?php
                        $sql = "SELECT * FROM post where site_id = $this_site_id AND status = 'published'";
                        $res = mysqli_query($conn, $sql);

                        foreach($res as $row){
                    ?>
                    <div class="blog-box wow fadeInUp" style="width: 60%;"> 
                        <a href="single.php?id=<?php echo $row['id']; ?>" class="blog-pic">
                            <img src="<?php echo $row['featured_image']; ?>" alt="MaanSoft">
                        </a>
                        <div class="blog-desc">
                            <div class="blog-meta">
                                <ul>
                                    <li>
                                        <?php 
                                        $dt = new DateTime($row['created_date']);
                                        $mon = date("F", mktime(0, 0, 0, $dt->format('m'), 10));
                                        $month = substr($mon, 0, 3);
                                        $day = $dt->format('d');
                                        $year = $dt->format('Y');
                                        ?>
                                        <i><img src="assets/img/icons/check-list.png" alt="MaanSoft"></i>
                                        <span><?php echo $day.' '.$month.', '.$year; ?></span>
                                    </li>
                                    <!-- <li>
                                        <i><img src="assets/img/icons/comment.png" alt="MaanSoft"></i>
                                        <span>03 Comments</span>
                                    </li> -->
                                </ul>
                            </div>
                            <a href="single.php?id=<?php echo $row['id']; ?>">
                                <h5 class="work-title">
                                    <?php echo $row['post_title']; ?>
                                </h5>
                            </a>
                            <p>
                                <?php echo htmlspecialchars($row['post_description'], ENT_QUOTES); ?> 
                            </p>
                            <div class="work-btn">
                                <a href="single.php?id=<?php echo $row['id']; ?>" class="btn-2">Learn More 
                                    <i>
                                        <img src="assets/img/icons/long-arrow.png" alt="MaanSoft">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    <!-- <div class="blog-box wow fadeInUp">
                        <a href="single.html" class="blog-pic">
                            <img src="assets/img/blog/2.jpg" alt="MaanSoft">
                        </a>
                        <div class="blog-desc">
                            <div class="blog-meta">
                                <ul>
                                    <li>
                                        <i><img src="assets/img/icons/check-list.png" alt="MaanSoft"></i>
                                        <span>09 June, 2021</span>
                                    </li>
                                    <li>
                                        <i><img src="assets/img/icons/comment.png" alt="MaanSoft"></i>
                                        <span>03 Comments</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="single.html">
                                <h5 class="work-title">
                                    The Pandemic is Forcing Hopeful Parents to Change
                                </h5>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            </p>
                            <div class="work-btn">
                                <a href="single.html" class="btn-2">Learn More 
                                    <i>
                                        <img src="assets/img/icons/long-arrow.png" alt="MaanSoft">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-box wow fadeInUp">
                        <a href="single.html" class="blog-pic">
                            <img src="assets/img/blog/3.jpg" alt="MaanSoft">
                        </a>
                        <div class="blog-desc">
                            <div class="blog-meta">
                                <ul>
                                    <li>
                                        <i><img src="assets/img/icons/check-list.png" alt="MaanSoft"></i>
                                        <span>09 June, 2021</span>
                                    </li>
                                    <li>
                                        <i><img src="assets/img/icons/comment.png" alt="MaanSoft"></i>
                                        <span>03 Comments</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="single.html">
                                <h5 class="work-title">
                                    Think Mom Life is Easy? This Mama Proves Otherwise
                                </h5>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            </p>
                            <div class="work-btn">
                                <a href="single.html" class="btn-2">Learn More 
                                    <i>
                                        <img src="assets/img/icons/long-arrow.png" alt="MaanSoft">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-box wow fadeInUp">
                        <a href="single.html" class="blog-pic">
                            <img src="assets/img/blog/4.jpg" alt="MaanSoft">
                        </a>
                        <div class="blog-desc">
                            <div class="blog-meta">
                                <ul>
                                    <li>
                                        <i><img src="assets/img/icons/check-list.png" alt="MaanSoft"></i>
                                        <span>09 June, 2021</span>
                                    </li>
                                    <li>
                                        <i><img src="assets/img/icons/comment.png" alt="MaanSoft"></i>
                                        <span>03 Comments</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="single.html">
                                <h5 class="work-title">
                                    20 Volunteer Ideas for Kids: An Age-by-Age Guide to Doing Good
                                </h5>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            </p>
                            <div class="work-btn">
                                <a href="single.html" class="btn-2">Learn More 
                                    <i>
                                        <img src="assets/img/icons/long-arrow.png" alt="MaanSoft">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-box wow fadeInUp">
                        <a href="single.html" class="blog-pic">
                            <img src="assets/img/blog/5.jpg" alt="MaanSoft">
                        </a>
                        <div class="blog-desc">
                            <div class="blog-meta">
                                <ul>
                                    <li>
                                        <i><img src="assets/img/icons/check-list.png" alt="MaanSoft"></i>
                                        <span>09 June, 2021</span>
                                    </li>
                                    <li>
                                        <i><img src="assets/img/icons/comment.png" alt="MaanSoft"></i>
                                        <span>03 Comments</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="single.html">
                                <h5 class="work-title">
                                    For Some Moms, Writing is the Best Self-Care During
                                </h5>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            </p>
                            <div class="work-btn">
                                <a href="single.html" class="btn-2">Learn More 
                                    <i>
                                        <img src="assets/img/icons/long-arrow.png" alt="MaanSoft">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-box wow fadeInUp">
                        <a href="single.html" class="blog-pic">
                            <img src="assets/img/blog/6.jpg" alt="MaanSoft">
                        </a>
                        <div class="blog-desc">
                            <div class="blog-meta">
                                <ul>
                                    <li>
                                        <i><img src="assets/img/icons/check-list.png" alt="MaanSoft"></i>
                                        <span>09 June, 2021</span>
                                    </li>
                                    <li>
                                        <i><img src="assets/img/icons/comment.png" alt="MaanSoft"></i>
                                        <span>03 Comments</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="single.html">
                                <h5 class="work-title">
                                    How to Keep Romance Alive While Under Quarantine
                                </h5>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            </p>
                            <div class="work-btn">
                                <a href="single.html" class="btn-2">Learn More 
                                    <i>
                                        <img src="assets/img/icons/long-arrow.png" alt="MaanSoft">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- End Blog -->
        
	</main>	
		
	<div class="clearfix"></div>
	
	<!-- Start Footer
	============================================= -->
	
	<!-- End Footer-->	
    <?php echo $footer; ?>
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


<!-- blog.html  [XR&CO'2014], 1 08:12:52 1 -->
</html>