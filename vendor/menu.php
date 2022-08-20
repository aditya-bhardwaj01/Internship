<?php
if (isset($_SESSION['admin_id'])) {

	//  MENU FOR ADMIN START


	$qry = "SELECT * FROM admin where id = '" . $_SESSION['admin_id'] . "' AND site_id = '$this_site_id'";
	$res = mysqli_query($conn, $qry);
	if (!$res) {
		errlog(mysqli_error($conn), $qry);
	}

	$data = mysqli_fetch_assoc($res);

	if (!isset($data['id'])) {
		die("Invalid Session <br>Please Login Again.");
	}

if ($data['profile_pic'] == '') {
		$data['profile_pic'] = $avatar ;
	}

?>
	<div class="left-sidebar">

		<!-- LOGO -->

		<div class="brand">

			<a href="index.html" class="logo">

				<span>

					<img src="../assets/images/logo-sm.png" alt="logo-small" class="logo-sm">

				</span>

				<span>

					<img src="../assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">

					<img src="../assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">

				</span>

			</a>

		</div>

		<div class="sidebar-user-pro media border-end">

			<div class="position-relative mx-auto">

				<img src="<?php echo $data['profile_pic'] ?>" alt="user" class="rounded-circle thumb-md">

				<span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>

			</div>

			<div class="media-body ms-2 user-detail align-self-center">

				<h5 class="font-14 m-0 fw-bold"><?php echo $data['name'] ?> </h5>

				<p class="opacity-50 mb-0"><?php echo $data['email'] ?></p>

			</div>

		</div>

		<!--end logo-->

		<div class="menu-content h-100" data-simplebar>

			<div class="menu-body navbar-vertical">

				<!-- Navigation -->

				<ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">

					<li class="nav-item">

						<a class="nav-link" href="admin_dashboard"><i class="ti ti-brand-hipchat menu-icon"></i><span>Dashboard</span></a>

					</li>

					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Products Manager</span>

						</a>

						<div class="collapse" id="sidebarProducts">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="products-admin">Active Products</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="#" class="nav-link ">Shared Products</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="../vendor/saved_products.php" class="nav-link ">Saved Products</a>

								</li>
							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>

					<li class="nav-item">

						<a class="nav-link" href="#sidebarServices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarServices">

							<i class="ti ti-trophy menu-icon"></i>

							<span>Services</span>

						</a>

						<div class="collapse" id="sidebarServices">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="service-admin">Services Manager</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="#" class="nav-link ">Shared Services</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="saved_services" class="nav-link ">Saved Services</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>

					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarjobs" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarjobs">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Job Manager</span>

						</a>

						<div class="collapse" id="sidebarjobs">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="jobs">Active Jobs</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="share-job" class="nav-link ">Shared Jobs</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="share-job" class="nav-link ">Saved Jobs</a>

								</li>
								<!--end nav-item-->
								<li class="nav-item">

									<a href="candidatedb" class="nav-link ">Seeker Manager</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>
					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarinvest" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarinvest">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Extra Marketplaces</span>

						</a>

						<div class="collapse" id="sidebarinvest">

							<ul class="nav flex-column">
								<li class="nav-item">
									<a class="nav-link" href="../vendor/add-investment-project">Investment Projects</a>
								</li>
								<li class="nav-item">
									<a href="../vendor/add-college" class="nav-link ">Educational Opportunities</a>
								</li>
								<li class="nav-item">
									<a href="../vendor/add-business-opp" class="nav-link ">Business Opportunities</a>
								</li>
								<li class="nav-item">
									<a href="../vendor/add-gig" class="nav-link ">Gig Opportunities</a>
								</li>
								<li class="nav-item">
									<a href="../vendor/add-destination" class="nav-link ">Tourism Destinations</a>
								</li>
							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>
					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarpack" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarpack">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Vendor Manager</span>

						</a>

						<div class="collapse" id="sidebarpack">

							<ul class="nav flex-column">
								<li class="nav-item">
									<a class="nav-link" href="../vendor/membership-plans">Acive Vendors</a>
								</li>
								<li class="nav-item">
									<a href="packages" class="nav-link ">Pending Vendors</a>
								</li>
							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>
					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarpack" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarpack">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Packages & Memberships</span>

						</a>

						<div class="collapse" id="sidebarpack">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="../vendor/membership-plans">Memberships</a>

								</li>

								<li class="nav-item">

									<a href="packages" class="nav-link ">Packages</a>

								</li>
								<!--end nav-item-->
							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>
					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarTransaction" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTransaction">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Transaction Manager</span>

						</a>

						<div class="collapse" id="sidebarTransaction">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="jobs">Transactions</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="wallet" class="nav-link ">Wallet</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="#" class="nav-link ">Withdrawal Requests</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>

					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarpromote" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarpromote">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Promotion Manager</span>

						</a>

						<div class="collapse" id="sidebarpromote">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="cashback">Cashback Offers</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="coupons" class="nav-link ">Coupons</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>
					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarSettings" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSettings">
							<i class="ti ti-shopping-cart menu-icon"></i>
							<span>Site Settings</span>
						</a>
						<div class="collapse" id="sidebarSettings">
							<ul class="nav flex-column">
								<li class="nav-item">
									<a class="nav-link" href="#">Site Settings</a>
								</li>
								<!--end nav-item-->

								<li class="nav-item">
									<a href="category" class="nav-link ">Categories</a>
								</li>
								<li class="nav-item">
									<a href="../admin/items" class="nav-link ">Items</a>
								</li>
								<li class="nav-item">
									<a href="job_industry" class="nav-link ">Job Industry</a>
								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>

				</ul>
				<!--end nav-->

			</div>

		</div>

	</div>

	<!-- MENU FOR ADMIN END -->
<?php
	//
} else if (isset($_SESSION['vendor_id'])) {

//  MENU FOR VENDOR START

	$qry = "SELECT * FROM vendor where id = '" . $_SESSION['vendor_id'] . "' AND site_id = '$this_site_id' AND status = 1 AND verified = 1 ";
	$res = mysqli_query($conn, $qry);
	if (!$res) {
		errlog(mysqli_error($conn), $qry);
	}

	$data = mysqli_fetch_assoc($res);

	if (!isset($data['id'])) {
		die("Invalid Session <br>Please Login Again.");
	}

if ($data['profile_pic'] == '') {
		$data['profile_pic'] = $avatar ;
	}
?>


	<div class="left-sidebar">

		<!-- LOGO -->

		<div class="brand">

			<a href="index.html" class="logo">

				<span>

					<img src="../assets/images/logo-sm.png" alt="logo-small" class="logo-sm">

				</span>

				<span>

					<img src="../assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">

					<img src="../assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">

				</span>

			</a>

		</div>

		<div class="sidebar-user-pro media border-end">

			<div class="position-relative mx-auto">

				<img src="<?php echo $data['profile_pic'] ?>" alt="user" class="rounded-circle thumb-md">

				<span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>

			</div>

			<div class="media-body ms-2 user-detail align-self-center">

				<h5 class="font-14 m-0 fw-bold"><?php echo $data['name'] ?></h5>

				<p class="opacity-50 mb-0"><?php echo $data['email'] ?></p>

			</div>

		</div>

		<!--end logo-->

		<div class="menu-content h-100" data-simplebar>

			<div class="menu-body navbar-vertical">

				<!-- Navigation -->

				<ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">

					<li class="nav-item">

						<a class="nav-link" href="dashboard"><i class="ti ti-brand-hipchat menu-icon"></i><span>Dashboard</span></a>

					</li>

					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Products Manager</span>

						</a>

						<div class="collapse" id="sidebarProducts">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="products-vendor">Active Products</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="#" class="nav-link ">Shared Products</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="saved_products" class="nav-link ">Saved Products</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>

					<li class="nav-item">

						<a class="nav-link" href="#sidebarServices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarServices">

							<i class="ti ti-trophy menu-icon"></i>

							<span>Services</span>

						</a>

						<div class="collapse" id="sidebarServices">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="service-admin">Services Manager</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="#" class="nav-link ">Shared Services</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="saved_services" class="nav-link ">Promoted Promoted</a>

								</li>
								<li class="nav-item">

									<a href="destination_admin" class="nav-link ">Promoted Promoted</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>

					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarjobs" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarjobs">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Job Manager</span>

						</a>

						<div class="collapse" id="sidebarjobs">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="jobs">Active Jobs</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="share-job" class="nav-link ">Shared Jobs</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="share-job" class="nav-link ">Saved Jobs</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a class="nav-link" href="applicants">Applicants</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="seeker_manager" class="nav-link ">Candidate Database</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>

					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarTransaction" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTransaction">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Transaction Manager</span>

						</a>

						<div class="collapse" id="sidebarTransaction">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="jobs">Transactions</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="share-job" class="nav-link ">Wallet</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="share-job" class="nav-link ">Withdrawal Requests</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>
				</ul>
				<!--end nav-->

			</div>

		</div>

	</div>


	<!-- MENU FOR VENDOR END  -->

<?php

} else if (isset($_SESSION['user_id'])) {

	//   MENU FOR USER START

	$qry = "SELECT * FROM vendor where id = '" . $_SESSION['user_id'] . "' AND site_id = '$this_site_id' AND status = 1 AND verified = 1 ";
	$res = mysqli_query($conn, $qry);
	if (!$res) {
		errlog(mysqli_error($conn), $qry);
	}

	$data = mysqli_fetch_assoc($res);

	if (!isset($data['id'])) {
		die("Invalid Session <br>Please Login Again.");
	}
if ($data['profile_pic'] == '') {
		$data['profile_pic'] = $avatar ;
	}

?>


	<div class="left-sidebar">

		<!-- LOGO -->

		<div class="brand">

			<a href="index.html" class="logo">

				<span>

					<img src="../assets/images/logo-sm.png" alt="logo-small" class="logo-sm">

				</span>

				<span>

					<img src="../assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">

					<img src="../assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">

				</span>

			</a>

		</div>

		<div class="sidebar-user-pro media border-end">

			<div class="position-relative mx-auto">

				<img src="<?php echo $data['profile_pic'] ?>" alt="user" class="rounded-circle thumb-md">

				<span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>

			</div>

			<div class="media-body ms-2 user-detail align-self-center">

				<h5 class="font-14 m-0 fw-bold"><?php echo $data['name'] ?></h5>

				<p class="opacity-50 mb-0"><?php echo $data['email'] ?></p>

			</div>

		</div>

		<!--end logo-->

		<div class="menu-content h-100" data-simplebar>

			<div class="menu-body navbar-vertical">

				<!-- Navigation -->

				<ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">

					<li class="nav-item">

						<a class="nav-link" href="dashboard"><i class="ti ti-brand-hipchat menu-icon"></i><span>Dashboard</span></a>

					</li>

					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Products Manager</span>

						</a>

						<div class="collapse" id="sidebarProducts">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="products-vendor">Active Products</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="share-job" class="nav-link ">Shared Products</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="saved_products" class="nav-link ">Saved Products</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>

					<li class="nav-item">

						<a class="nav-link" href="#sidebarServices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarServices">

							<i class="ti ti-trophy menu-icon"></i>

							<span>Services</span>

						</a>

						<div class="collapse" id="sidebarServices">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="service-vendor">Services Manager</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="analytics-customers.html" class="nav-link ">Shared Services</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="saved_services" class="nav-link ">Promoted Promoted</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>
					<li class="nav-item">

						<a class="nav-link" href="#sidebarServices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarServices">

							<i class="ti ti-trophy menu-icon"></i>

							<span>Destination</span>

						</a>

						<div class="collapse" id="sidebarServices">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="destination_vendor">Destination Manager</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="analytics-customers.html" class="nav-link ">Shared Services</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="saved_services" class="nav-link ">Promoted Promoted</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>
					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarjobs" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarjobs">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Job Manager</span>

						</a>

						<div class="collapse" id="sidebarjobs">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="jobs">Active Jobs</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="share-job" class="nav-link ">Shared Jobs</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="share-job" class="nav-link ">Saved Jobs</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a class="nav-link" href="applicants">Applicants</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="candidatedb" class="nav-link ">Candidate Database</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>

					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarTransaction" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTransaction">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Transaction Manager</span>

						</a>

						<div class="collapse" id="sidebarTransaction">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="jobs">Transactions</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="share-job" class="nav-link ">Wallet</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="share-job" class="nav-link ">Withdrawal Requests</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>

					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarpromote" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarpromote">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Promotion Manager</span>

						</a>

						<div class="collapse" id="sidebarpromote">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="cashback">Cashback Offers</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="coupons" class="nav-link ">Coupons</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>
					<li class="nav-item">

						<a class="nav-link collapsed" href="#sidebarpromote" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarpromote">

							<i class="ti ti-shopping-cart menu-icon"></i>

							<span>Site Settings</span>

						</a>

						<div class="collapse" id="sidebarpromote">

							<ul class="nav flex-column">

								<li class="nav-item">

									<a class="nav-link" href="cashback">Site Settings</a>

								</li>
								<!--end nav-item-->

								<li class="nav-item">

									<a href="category" class="nav-link ">Categories</a>

								</li>
								<!--end nav-item-->

							</ul>
							<!--end nav-->

						</div>
						<!--end sidebarAnalytics-->

					</li>

				</ul>
				<!--end nav-->

			</div>

		</div>

	</div>











<?php



	//   MENU FOR USER END





} else {


	//   FOR GUEST



}

?>