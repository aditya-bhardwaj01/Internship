<?php
session_start();
include "../config/connection.php";

if (isset($_POST["loadMore"])) {
	$limit = 12;

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";

	$sql = "select * from marketplace_services where site_id = '$this_site_id' AND status = 1 AND verified = 1 AND save_type = 'ORG' ";

	if ((isset($_POST["category"]))  &&  strtolower($_POST["category"]) != "all") {
		$sql .= " AND cat_id = '" . realEscape($_POST["category"]) . "' ";
	}

	if ((isset($_POST["sub_category"])) && !empty($_POST['sub_category'])) {
		$cate = explode(",", realEscape($_POST['sub_category']));
		$f = 0;
		foreach ($cate as $cat) {
			if (trim($cat) == '')   continue;
			if ($f == 0)
				$sql .=  " AND (sub_cat_id = '" . realEscape($cat) . "' ";
			else
				$sql .=  " OR sub_cat_id = '" . realEscape($cat) . "' ";
			$f++;
		}

		if ($f > 0) {
			$sql .= " ) ";
		}
	}


	if ((isset($_POST["label"])) && !empty($_POST['label'])) {
		$cate = explode(",", realEscape($_POST['label']));
		$f = 0;
		foreach ($cate as $cat) {
			if ($cat == '')   continue;
			if ($f == 0)
				$sql .=  " AND (label = '" . realEscape($cat) . "' ";
			else
				$sql .=  " OR label = '" . realEscape($cat) . "' ";
			$f++;
		}

		if ($f > 0) {
			$sql .= " ) ";
		}
	}

	if (isset($_SESSION['service_on_page'])) {
		$arr = explode(',', $_SESSION['service_on_page']);
		$f = 0;
		foreach ($arr as $s) {
			if ($f == 0)
				$sql .= " AND ( id <> '$s' ";
			else
				$sql .= " AND id <> '$s' ";
			$f++;
		}
		if ($f > 0) {
			$sql .= " ) ";
		}
	} else {
		$_SESSION['service_on_page'] = '';
	}


	if ((isset($_POST["min"])) && (isset($_POST["max"])) && !empty($_POST['min']) && !empty($_POST['max'])) {

		$sql .=  " AND price between " . realEscape($_POST["min"]) . " and " . realEscape($_POST["max"]) . " ";
	}

	if ((isset($_POST["sort"])) && !empty($_POST['sort'])) {
		$sort = ($_POST['sort']);
		if ($sort != "default") {
			$sql .=  " order by " . realEscape($sort);
		}
	}

	$sql .= " limit $limit";

	// echo "<br>" . $sql;

	$row = $conn->query($sql);
	if (!$row) {
		errlog(mysqli_error($conn), $sql);
	} else {

		if ($row->num_rows > 0) {
?>
			<div class="product-wrapper row cols-md-4 cols-sm-2 cols-2">
				<?php
				while ($res = $row->fetch_assoc()) {

					$_SESSION['service_on_page'] .= "," . $res['id'];

					$sql_logo = "select * from vendor where id= '" . $res["vendor_id"] . "' ";
					$log_row = $conn->query($sql_logo);
					if (!$log_row) {
						errlog(mysqli_error($conn), $sql_logo);
					} else {
						$logo = $log_row->fetch_assoc();
						$s = "";
						if ($res["label"] == '1') {
							$s = "featured";
						} elseif ($res["label"] == '2') {
							$s = "promoted";
						} elseif ($res["label"] == '3') {
							$s = "sponsored";
						}
				?>


						<div class="swiper-slide product product-simple">
							<figure class="product-media">
								<div class="product-label-group">
									<?php if (!empty($s)) { ?>
										<label class="product-label label-new"><?php echo $s; ?></label>
									<?php } ?>
								</div>

								<a href="service_detail?id=<?php echo urlencode(base64_encode($res["id"])); ?>">
									<?php
									$im = "select * from product_images where marketplace_id='16' and main='1' and product_id='" . $res["id"] . "'";
									$im_r = $conn->query($im);
									if (!$im_r) {
										errlog(mysqli_error($conn), $im);
									} else {
										$img = $im_r->fetch_assoc();
									?>
										<img src="<?php echo $img["image_url"]; ?>" alt="Product" width="295" height="335" style="width: 295px; height: 300px;" />
								</a>
							<?php
									} ?>
							<div class="product-countdown-container">
								<?php
								$tim = "select * from cashback_rules where id='" . $res["cashback_id"] . "'";
								$tim_ro = $conn->query($tim);
								$tim_res = $tim_ro->fetch_assoc();
								if (isset($tim_res['id'])) {

									$date1 = new DateTime($tim_res["start_date"]);
									$date2 = ($tim_res["end_date"]);

									$curr = date("Y-m-d h:i:s");
									if (abs(strtotime($date2) > strtotime($curr))) {
										$cur = new DateTime($curr);
										$diff = $cur->diff(new DateTime($date2));


								?>
										<div class="product-countdown countdown-compact is-countdown" data-until="<?php echo $date2; ?>" data-format="DHMS" data-compact="false" data-labels-short="Days, Hours, Mins"><span class="countdown-row countdown-show4"><span class="countdown-section"><span class="countdown-amount"><?php echo $diff->days; ?></span><span class="countdown-period">Days</span></span><span class="countdown-section"><span class="countdown-amount"><?php echo $diff->h; ?></span><span class="countdown-period">Hrs</span></span><span class="countdown-section"><span class="countdown-amount"><?php echo $diff->i; ?></span><span class="countdown-period">Mins</span></span><span class="countdown-section"><span class="countdown-amount"><?php echo $diff->s; ?></span><span class="countdown-period">Secs</span></span></span></div>
								<?php
									}
								}
								?>
							</div>

							<div class="product-action" id="<?php echo $res["id"]; ?>">
								<a href="#" class="btn-product btn-quickview" onclick="quick(this);" title="Quick View">Quick
									View</a>
							</div>

							</figure>
							<div class="product-details">
								<a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
								<div class="product-cat">

									<a href="shop-banner-sidebar.html"><?php echo $res["cat_id"]; ?></a>
								</div>
								<h4 class="product-name"><a href="product-default.html"><?php echo $res["service_name"]; ?></a>
								</h4>

								<h3 class="product-name">
									<a href="product-default.html"><span><?php echo $logo["name"]; ?></span>
										<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 17.542 17.774">
											<g data-name="Group 2129" transform="translate(-1298.5 -235.5)">
												<circle cx="8.271" cy="8.271" r="8.271" fill="none" stroke="#0f9347" data-name="Ellipse 81" transform="translate(1299 237)"></circle>
												<path d="M0 0h16.542v2.789H0z" fill="#0f9347" data-name="Rectangle 624" transform="translate(1299 251.485)"></path>
												<path d="M4380.563 5908.823l-1.076 1.076-4.009 4.011-2.033-2.032-.276-.278-.545.547-.544.545 3.4 3.4 6.176-6.177zm0 0" fill="#0f9347" data-name="Path 939" transform="translate(-3069.595 -5666.796)"></path>
											</g>
										</svg></a>
								</h3>
								<div class="product-pa-wrapper">
									<div class="product-price">
										&#8377; <?php echo $res["price"]; ?>.00 <span>Onwards</span>
									</div>

								</div>
							</div>
						</div>
					<?php
					}

					?>


				<?php
				}
				echo "</div>";
			} else {
				echo '<p><b style="color:red; background-color:white;">No more services available. </b><p>';
			}
		}
	} else if (isset($_POST["action"])) {
		$limit = 12;

		$sql = "select * from marketplace_services where site_id = '$this_site_id' AND status = 1 AND verified = 1 AND save_type = 'ORG' ";

		if ((isset($_POST["category"]))  &&  strtolower($_POST["category"]) != "all") {
			$sql .= " AND cat_id = '" . realEscape($_POST["category"]) . "' ";
		}

		if ((isset($_POST["sub_category"])) && !empty($_POST['sub_category'])) {
			$cate = explode(",", realEscape($_POST['sub_category']));
			$f = 0;
			foreach ($cate as $cat) {
				if (trim($cat) == '')   continue;
				if ($f == 0)
					$sql .=  " AND (sub_cat_id = '" . realEscape($cat) . "' ";
				else
					$sql .=  " OR sub_cat_id = '" . realEscape($cat) . "' ";
				$f++;
			}

			if ($f > 0) {
				$sql .= " ) ";
			}
		}


		if ((isset($_POST["label"])) && !empty($_POST['label'])) {
			$cate = explode(",", realEscape($_POST['label']));
			$f = 0;
			foreach ($cate as $cat) {
				if ($cat == '')   continue;
				if ($f == 0)
					$sql .=  " AND (label = '" . realEscape($cat) . "' ";
				else
					$sql .=  " OR label = '" . realEscape($cat) . "' ";
				$f++;
			}

			if ($f > 0) {
				$sql .= " ) ";
			}
		}


		if ((isset($_POST["min"])) && (isset($_POST["max"])) && !empty($_POST['min']) && !empty($_POST['max'])) {

			$sql .=  " AND price between " . realEscape($_POST["min"]) . " and " . realEscape($_POST["max"]) . " ";
		}

		if ((isset($_POST["sort"])) && !empty($_POST['sort'])) {
			$sort = ($_POST['sort']);
			if ($sort != "default") {
				$sql .=  " order by " . realEscape($sort);
			}
		}

		$_SESSION['service_on_page'] = '';

		$sql .= " limit $limit";

		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// echo "<br>" . $sql;

		$row = $conn->query($sql);
		if (!$row) {
			errlog(mysqli_error($conn), $sql);
		} else {

			if ($row->num_rows > 0) {
				?>
				<div class="product-wrapper row cols-md-4 cols-sm-2 cols-2">
					<?php
					while ($res = $row->fetch_assoc()) {

						$_SESSION['service_on_page'] .= "," . $res['id'];

						$sql_logo = "select * from vendor where id= '" . $res["vendor_id"] . "' ";
						$log_row = $conn->query($sql_logo);
						if (!$log_row) {
							errlog(mysqli_error($conn), $sql_logo);
						} else {
							$logo = $log_row->fetch_assoc();
							$s = "";
							if ($res["label"] == '1') {
								$s = "featured";
							} elseif ($res["label"] == '2') {
								$s = "promoted";
							} elseif ($res["label"] == '3') {
								$s = "sponsored";
							} else {
								$s = htmlspecialchars($res["label"]);
							}
					?>


							<div class="swiper-slide product product-simple">
								<figure class="product-media">
									<div class="product-label-group">
										<?php if (!empty($s)) { ?>
											<label class="product-label label-new"><?php echo $s; ?></label>
										<?php } ?>
									</div>

									<a href="service_detail?id=<?php echo urlencode(base64_encode($res["id"])); ?>">
										<?php
										$im = "select * from product_images where marketplace_id='16' and main='1' and product_id='" . $res["id"] . "'";
										$im_r = $conn->query($im);
										if (!$im_r) {
											errlog(mysqli_error($conn), $im);
										} else {
											$img = $im_r->fetch_assoc();
											if (!isset($img['image_url'])) {
												$img['image_url'] = '' ;
											}
										?>
											<img src="<?php echo $img["image_url"]; ?>" alt="Product" width="295" height="335" style="width: 295px; height: 300px;" />
									</a>
								<?php
										} ?>
								<div class="product-countdown-container">
									<?php
									$tim = "select * from cashback_rules where id='" . $res["cashback_id"] . "'";
									$tim_ro = $conn->query($tim);
									$tim_res = $tim_ro->fetch_assoc();
									if (isset($tim_res['id'])) {

										$date1 = new DateTime($tim_res["start_date"]);
										$date2 = ($tim_res["end_date"]);

										$curr = date("Y-m-d h:i:s");
										if (abs(strtotime($date2) > strtotime($curr))) {
											$cur = new DateTime($curr);
											$diff = $cur->diff(new DateTime($date2));


									?>
											<div class="product-countdown countdown-compact is-countdown" data-until="<?php echo $date2; ?>" data-format="DHMS" data-compact="false" data-labels-short="Days, Hours, Mins"><span class="countdown-row countdown-show4"><span class="countdown-section"><span class="countdown-amount"><?php echo $diff->days; ?></span><span class="countdown-period">Days</span></span><span class="countdown-section"><span class="countdown-amount"><?php echo $diff->h; ?></span><span class="countdown-period">Hrs</span></span><span class="countdown-section"><span class="countdown-amount"><?php echo $diff->i; ?></span><span class="countdown-period">Mins</span></span><span class="countdown-section"><span class="countdown-amount"><?php echo $diff->s; ?></span><span class="countdown-period">Secs</span></span></span></div>
									<?php
										}
									}
									?>
								</div>

								<div class="product-action" id="<?php echo $res["id"]; ?>">
									<a href="#" class="btn-product btn-quickview" onclick="quick(this);" title="Quick View">Quick
										View</a>
								</div>

								</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
									<div class="product-cat">

										<a href="shop-banner-sidebar.html"><?php echo $res["cat_id"]; ?></a>
									</div>
									<h4 class="product-name"><a href="product-default.html"><?php echo $res["service_name"]; ?></a>
									</h4>

									<h3 class="product-name">
										<a href="product-default.html"><span><?php echo $logo["name"]; ?></span>
											<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 17.542 17.774">
												<g data-name="Group 2129" transform="translate(-1298.5 -235.5)">
													<circle cx="8.271" cy="8.271" r="8.271" fill="none" stroke="#0f9347" data-name="Ellipse 81" transform="translate(1299 237)"></circle>
													<path d="M0 0h16.542v2.789H0z" fill="#0f9347" data-name="Rectangle 624" transform="translate(1299 251.485)"></path>
													<path d="M4380.563 5908.823l-1.076 1.076-4.009 4.011-2.033-2.032-.276-.278-.545.547-.544.545 3.4 3.4 6.176-6.177zm0 0" fill="#0f9347" data-name="Path 939" transform="translate(-3069.595 -5666.796)"></path>
												</g>
											</svg></a>
									</h3>
									<div class="product-pa-wrapper">
										<div class="product-price">
											&#8377; <?php echo $res["price"]; ?>.00 <span>Onwards</span>
										</div>

									</div>
								</div>
							</div>
						<?php
						}

						?>


						<?php
					}
					echo "</div>";
				} else {
					echo '<p><b style="color:red; background-color:white;">No data Found </b><p>';
				}
			}
		} else if (isset($_POST["quickPart1"])) {


			$id = $_POST["id"];
			$sql = "select * from marketplace_services where id=$id";

			$row = $conn->query($sql);
			if (!$row) {
				errlog(mysqli_error($conn), $sql);
			} else {

				if ($row->num_rows > 0) {

					while ($res = $row->fetch_assoc()) {

						$sql_logo = "select * from vendor where id= '" . $res["vendor_id"] . "' ";
						$log_row = $conn->query($sql_logo);
						if (!$log_row) {
							errlog(mysqli_error($conn), $sql_logo);
						} else {
							$logo = $log_row->fetch_assoc();

						?>
							<div class="swiper-slide">
								<figure class="product-image">
									<?php
									$im = "select * from product_images where marketplace_id='16' and main='1' and product_id='" . $res["id"] . "'";
									$im_r = $conn->query($im);
									if (!$im_r) {
										errlog(mysqli_error($conn), $im);
									} else {
										$img = $im_r->fetch_assoc();
									?>
										<img src="<?php echo $img["image_url"]; ?>" data-zoom-image="<?php echo $logo["company_logo"]; ?>" alt="Water Boil Black Utensil" width="800" height="900">
										</a>
									<?php
									} ?>


								</figure>
							</div>




						<?php

						}
					}
				}
			}
		} else if (isset($_POST["quickPart2"])) {


			$id = $_POST["id"];
			$sql = "select * from marketplace_services where id=$id";

			$row = $conn->query($sql);
			if (!$row) {
				errlog(mysqli_error($conn), $sql);
			} else {

				if ($row->num_rows > 0) {

					while ($res = $row->fetch_assoc()) {

						$sql_logo = "select * from vendor where id= '" . $res["vendor_id"] . "' ";
						$log_row = $conn->query($sql_logo);
						if (!$log_row) {
							errlog(mysqli_error($conn), $sql_logo);
						} else {
							$logo = $log_row->fetch_assoc();

						?>



							<h2 class="product-title"><b><?php echo $conn->real_escape_string(htmlspecialchars($res["service_name"])); ?></b></h2>
							<div class="product-meta" style="font-size:12px;">
								<div class="product-categories">
									<i class="w-icon-cog"></i> Descripition:<span class="product-category"><a href="#"><b> <?php echo (decoder($res["description"])); ?> </b></a></span>
								</div>

								<div class="sold-by"> Posted <a href="#">:<?php echo agoTime($res["created_date"]); ?></a></div>
								<div class="sold-by"> Profile Added :<a href="#"><?php echo $res["posted_by"]; ?></a></div>
								<div class="social-links-wrapper">

									<span class="divider d-xs-show"></span>
									<div class="product-link-wrapper d-flex">
										<a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>
										<a href="#" class="btn-product-icon btn-compare btn-icon-left  w-icon-call"></a>
									</div>
								</div>
								<hr class="product-divider">
								<div class="product-form">
									<button class="btn btn-primary btn-cart">
										<i class="w-icon-cart"></i>
										<span>Apply</span>
									</button>
								</div>

							</div>




		<?php

						}
					}
				}
			}
		}

		?>