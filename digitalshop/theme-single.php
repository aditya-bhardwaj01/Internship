<?php

include 'common_section/head.php';
include 'common_section/header.php';
include 'common_section/footer.php';
include 'common_section/head_tag.php';

?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- theme-single.html  [XR&CO'2014], 1 08:12:31 1 -->

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
		<?php echo $header_part1 . 'Product Details' . $header_part2 . 'Product Details' . $header_part3; ?>
		<!-- End Breadcrumb -->

		<!-- Start Product
		============================================= -->
		<div class="product-area de-padding">
			<div class="container">
				<div class="product-wpr">
					<div class="row ps g-5">
						<div class="col-xl-8">
							<div class="theme-single">
								<?php
								
								$id = urlencode(base64_decode($_GET['id']));

								$update = "UPDATE marketplace_digital_products SET views = views + 1 WHERE id = $id";
								$runupdate = mysqli_query($conn, $update);

								$sql = "SELECT a.*, b.name, b.profile_pic FROM
								marketplace_digital_products a INNER JOIN vendor b ON a.id = $id AND a.status = 1 AND b.id = a.vendor_id
								AND a.site_id = $this_site_id ORDER BY a.created_date DESC";

								$res = mysqli_query($conn, $sql);

								foreach ($res as $row) {
								?>
								<div class="theme-pic">
										<figure class="image big-pic">
											<img src="<?php echo $row['banner']; ?>" alt="MaanSoft" style="width: 100%; height: 350px;">
										</figure>

										<div class="theme-ovll"><a href="assets/img/product/big-pic.jpg" class="lightbox-image" data-fancybox="gallery">
												<img style="height: 70px; width: 70px;" src="<?php echo $row['banner']; ?>" alt=""></a>
										</div>
									</div>
									<div class="theme-info">
										<div class="theme-meta">
											<div class="theme-meta-left">
												<ul>
													<li>By <a href="#"><?php echo $row['name']; ?></a></li>
													<li>
														<i><img src="assets/img/icons/comment.png" alt="MaanSoft"></i>
														<?php echo $row['views']; ?> views
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
										<div class="theme-desc mb-30">
											<h2 class="about-title"><?php echo $row['title']; ?></h2>
											<p class="mb-30">
												<?php echo $row['description']; ?>
											</p>
										</div>
										<div class="theme-options">
											<div class="theme-opt">
												<h6 class="theme-opt-title">Template Features</h6>
												<?php
												$delimiter = ' ';
												$words = explode($delimiter, $row['specifictaions']);
												?>
												<ul>
													<?php
													foreach ($words as $feature) {
													?>
														<li><?php echo $feature; ?></li>
													<?php } ?>
												</ul>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="col-xl-4">
							<aside class="sidebar">
								<!-- Price Widget -->
								<div class="theme-single-pill">
									<ul class="nav nav-pills" id="pills-tab" role="tablist">
										<?php

										$sql = "SELECT id, price, license_type FROM marketplace_digital_products WHERE id = $id AND
										site_id=$this_site_id AND status = 1 AND verified = 1";
										$res = mysqli_query($conn, $sql);
										foreach ($res as $row) {
										?>
											<li class="nav-item" role="presentation">
												<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
													<?php
													if ($row['license_type'] == 0) {
														echo 'Regular';
													} else if ($row['license_type'] == 1) {
														echo 'Extended';
													}
													?>
													License
												</button>
											</li>
										<?php
										}
										?>
									</ul>
									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
											<div class="price">
												<div class="theme-price-plan">
													<div class="theme-price-single">
														<?php foreach ($res as $row) { ?>
															<div class="theme-price-radio">
																<input class="form-check-input" type="radio" name="radio--" id="radio--1">
																<label class="form-check-label" for="radio--1">
																	Single Site License
																</label>
															</div>
															<span class="theme-price-value">$<?php echo $row['price']; ?></span>
														<?php } ?>
													</div>
													<!-- <div class="theme-price-single">
														<div class="theme-price-radio">
															<input class="form-check-input" type="radio" name="radio--" id="radio--2" checked>
															<label class="form-check-label" for="radio--2">
																5 Sites License
															</label>
														</div>
														<span class="theme-price-value">$89</span>
													</div>
													<div class="theme-price-single">
														<div class="theme-price-radio">
															<input class="form-check-input" type="radio" name="radio--" id="radio--3">
															<label class="form-check-label" for="radio--3">
																Unlimited Sites License
															</label>
														</div>
														<span class="theme-price-value">$170</span>
													</div> -->
												</div>
												<div class="theme-bottom-price-btuoon">
													<a href="#" class="btn-6">
														<i class="ti-shopping-cart"></i>
														Add to Cart
													</a>
													<a href="pricing.html" class="btn-6 login-btn">But Now</a>
												</div>
												<div class="theme-bottom-price-port">
													<a href="profile.html" class="btn-11">View Portfolio</a>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
											<div class="price">
												<h5 class="plan-title">
													1 Year update & support from next
													<br />
													year 50& discount
												</h5>
												<div class="theme-price-plan">
													<div class="theme-price-single">
														<div class="theme-price-radio">
															<input class="form-check-input" type="radio" name="radio--" id="radio--4">
															<label class="form-check-label" for="radio--4">
																Single Site License
															</label>
														</div>
														<span class="theme-price-value">$170</span>
													</div>
													<div class="theme-price-single">
														<div class="theme-price-radio">
															<input class="form-check-input" type="radio" name="radio--" id="radio--5" checked>
															<label class="form-check-label" for="radio--5">
																5 Sites License
															</label>
														</div>
														<span class="theme-price-value">$89</span>
													</div>
													<div class="theme-price-single">
														<div class="theme-price-radio">
															<input class="form-check-input" type="radio" name="radio--" id="radio--6">
															<label class="form-check-label" for="radio--6">
																Unlimited Sites License
															</label>
														</div>
														<span class="theme-price-value">$170</span>
													</div>
												</div>
												<div class="theme-bottom-price-btuoon">
													<a href="#" class="btn-6">
														<i class="ti-shopping-cart"></i>
														Add to Cart
													</a>
													<a href="pricing.html" class="btn-6 login-btn">But Now</a>
												</div>
												<div class="theme-bottom-price-port">
													<a href="profile.html" class="btn-11">View Portfolio</a>
												</div>
											</div>
										</div>
									</div>


								</div>

								<!-- MaanSoft  -->

								<div class="sidebar__banner" data-background="assets/img/product/1.jpg" style="background-image: url(_assets/img/product/1.html);">

									<a href="product.html" class="m-btn m-btn-white"> <span></span> free template</a>
								</div>
							</aside>


						</div>
					</div>
					<div class="theme-reated de-pt">
						<h2 class="about-title mb-70">Related Product</h2>
						<div class="related-grid grid-3">
							
							<?php
							$sql = "SELECT a.*, b.name, b.profile_pic FROM
							marketplace_digital_products a INNER JOIN vendor b ON a.id = $id AND 
							a.status = 1 AND b.id = a.vendor_id AND a.cat_id = 
							(SELECT cat_id FROM marketplace_digital_products WHERE id=$id)
							AND a.site_id = $this_site_id ORDER BY a.created_date DESC";


							$res = mysqli_query($conn, $sql);

							foreach ($res as $row) {
							?>
								<div class="work-box wow fadeInUp">
									<a href="theme-single.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>" class="work-pic">
										<img src="<?php echo $row['banner']; ?>" alt="MaanSoft" style="height: 250px;">
									</a>
									<div class="work-desc">
										<a href="theme-single.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>">
											<h5 class="work-title">
												<?php echo $row['title']; ?>
											</h5>
										</a>
										<div class="work-meta">
											<ul class="space-between">
												<li>By- <a href="theme-single.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>"><?php echo $row['name']; ?></a></li>
											</ul>
										</div>
										<div class="work-bottom space-between">
											<div class="work-btns">
												<ul>
													<li>
														<a href="theme-single.html" class="btn-cart">
															<img src="assets/img/icons/cart-white.png" alt="MaanSoft">
														</a>
													</li>
													<li><a href="theme-single.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>" class="btn-7">Preview</a></li>
													<li><?php echo $row['views']; ?> Views</li>
												</ul>
											</div>
											<div class="work-price">
												<span class="value">$<?php echo $row['price']; ?></span>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
							<!-- <div class="work-box wow fadeInUp">
                                <a href="theme-single.html"class="work-pic">
                                    <img src="assets/img/product/2.jpg" alt="MaanSoft">
                                </a>
                                <div class="work-desc">
									<a href="theme-single.html">
										<h5 class="work-title">
											Softland-Saas Landing Page HTML Template
										</h5>
									</a>
                                    <div class="work-meta">
                                        <ul class="space-between">
                                            <li>By- <a href="#">MaanTheme</a></li>
                                            <li>
                                                <div class="price-rating d-flex align-items-center">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="work-bottom space-between">
                                        <div class="work-btns">
                                            <ul>
												<li>
													<a href="#" class="btn-cart">
														<img src="assets/img/icons/cart-white.png" alt="MaanSoft">
													</a>
												</li>
                                                <li><a href="#" class="btn-7">Preview</a></li>
                                                <li>59 Sale</li>
                                            </ul>
                                        </div>
                                        <div class="work-price">
                                            <span class="value">$17</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="work-box wow fadeInUp">
                                <a href="theme-single.html" class="work-pic">
                                    <img src="assets/img/product/4.jpg" alt="MaanSoft">
                                </a>
                                <div class="work-desc">
									<a href="theme-single.html">
										<h5 class="work-title">
											Travely - Tours & Travel Booking Template 
										</h5>
									</a>
                                    <div class="work-meta">
                                        <ul class="space-between">
                                            <li>By- <a href="#">MaanTheme</a></li>
                                            <li>
                                                <div class="price-rating d-flex align-items-center">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="work-bottom space-between">
                                        <div class="work-btns">
                                            <ul>
												<li>
													<a href="#" class="btn-cart">
														<img src="assets/img/icons/cart-white.png" alt="MaanSoft">
													</a>
												</li>
                                                <li><a href="#" class="btn-7">Preview</a></li>
                                                <li>59 Sale</li>
                                            </ul>
                                        </div>
                                        <div class="work-price">
                                            <span class="value">$17</span>
                                        </div>
                                    </div>
                                </div>
                            </div>  -->
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


<!-- theme-single.html  [XR&CO'2014], 1 08:12:31 1 -->

</html>