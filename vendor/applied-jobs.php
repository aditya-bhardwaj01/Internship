<!DOCTYPE html>
<html lang="en">

<head>


	<meta charset="utf-8" />
	<title>Site_Name</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">



	<!-- App css -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="dark-sidebar">
	<!-- leftbar-tab-menu -->
	<?php include 'menu.php'; ?>
	<!-- end left-sidenav-->
	<!-- end leftbar-tab-menu-->

	<!-- Top Bar Start -->
	<!-- Top Bar Start -->
	<?php include 'top-bar.php'; ?>
	<!-- Top Bar End -->
	<!-- Top Bar End -->

	<div class="page-wrapper">

		<!-- Page Content-->
		<div class="page-content-tab">

			<div class="container-fluid">
				<!-- Page-Title -->

				<div class="row">
					<div class="col-sm-12">
						<div class="page-title-box">
							<div class="float-end">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Unikit</a>
									</li>
									<!--end nav-item-->
									<li class="breadcrumb-item"><a href="#">Ecommerce</a>
									</li>
									<!--end nav-item-->
									<li class="breadcrumb-item active">List</li>
								</ol>
							</div>
							<h4 class="page-title">Applied Jobs</h4>
						</div>
						<!--end page-title-box-->
					</div>
					<!--end col-->
				</div>
				<!-- end page title end breadcrumb -->
				<?php
				//if (!isset($_SESSION['vendor_id'])) {
					// not vendor
					//header("location: vendor_login.php");
				//} else {
				?>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="row">
									<div class="col">
										<a href="create-job1.html"><button type="button" class="btn btn-sm btn-outline-primary my-2 mx-2" style="float:right;">+ View Jobs</button></a>
									</div>
									<!--end col-->
								</div>
								<!--end col-->
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>Job Title</th>
													<th>Category</th>
													<th>Applied</th>
													<th>Application Status</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php
												require_once 'config/connection.php';
												$id = getVendorID();

												$sql = "SELECT a.id, a.created_date, a.status, b.job_category, b.validity, b.job_title, c.company_logo
													FROM response a INNER JOIN marketplace_jobs b INNER JOIN vendor c WHERE a.vendor_id = 1 AND
													a.site_id = $this_site_id AND a.marketplace_id = 1 AND a.item_id = b.id AND 
													a.vendor_id = c.id";
												$res = mysqli_query($conn, $sql);
												if (!$res) {
													errlog(mysqli_error($conn), $qry);
												}

												foreach($res as $row){
												?>
												<tr>
													<td>
														<img src="<?php echo $row['company_logo']; ?>" alt="" height="40">
														<p class="d-inline-block align-middle mb-0">
															<a href="#" class="d-inline-block align-middle mb-0 product-name fw-semibold">
																<?php echo $row['job_title']; ?>
															</a>
															<br>
															<span class="text-muted font-13 fw-semibold">Validity:
															<?php
																$curr=date_create(date('Y-m-d'));
																$valid = date_create($row['validity']);
																$diff=date_diff($curr, $valid);
																$post = (int)$diff->format('%R%a days');
                                                        		echo $post;
															?>
															Days</span>
														</p>
														<br>
														<a href="#" class="font-12 text-primary">Company Name: Vendor</a>

													</td>
													<td><?php echo $row['job_category']; ?></td>
													<td>
														<?php
														$curr=date_create(date('Y-m-d'));
														$applied = date_create($row['created_date']);
														$diff=date_diff($applied, $curr);
														$post = (int)$diff->format('%R%a days').' '.'Days ago';
                                                        echo $post;
														?>
													</td>
													<td>
														<?php
														if ($row['status'] == 1) { ?>
															<span class="badge badge-soft-success">
																Approved
															</span>
														<?php } else { ?>
															<span class="badge badge-soft-pink">
																Rejected
															</span>
														<?php }
														?>
													</td>
													<td>
														<a href="#" 
														style="color: <?php
														if($row['status'] == 1) echo 'black';
														else echo 'red';
														?>;"
														id="block-button<?php echo $row['id']; ?>" order-id="<?php echo $row['id']; ?>" 

														class="<?php
														if($row['status'] == 1) echo 'cancel';
														else echo '';
														?> mr-2"
														response-id="<?php echo $row['id']; ?>"
														onclick="setId(<?php echo $row['id']; ?>)">
															<i class="fa fa-ban"></i>
														</a>
														<a href="#"><i class="fa fa-envelope"></i></a>
													</td>
												</tr>
												<?php } ?>
												<!-- <tr>
												<td>
													<img src="assets/images/products/04.png" alt="" height="40">
													<p class="d-inline-block align-middle mb-0">
														<a href="#" class="d-inline-block align-middle mb-0 product-name fw-semibold">Apple Watch</a>
														<br>
														<span class="text-muted font-13 fw-semibold">Validity:13 Days</span>
													</p>
													<br>
													<a href="#" class="font-12 text-primary">Company Name: Vendor</a>

												</td>
												<td>Sports</td>
												<td>3 Days Ago</td>
												<td><span class="badge badge-soft-success">Status</span> </td>
												<td>
													<a href="#" class="mr-2"><i class="fa fa-ban"></i></a>
													<a href="#"><i class="fa fa-envelope"></i></a>
												</td>
											</tr> -->
											</tbody>
										</table>
									</div>
									<div class="row">
										<div class="col-auto">
											<nav aria-label="...">
												<ul class="pagination pagination-sm mb-0">
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1">Previous</a>
													</li>
													<li class="page-item active"><a class="page-link" href="#">1</a></li>
													<li class="page-item">
														<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
													</li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">Next</a>
													</li>
												</ul>
												<!--end pagination-->
											</nav>
											<!--end nav-->
										</div>
										<!--end col-->
									</div>
									<!--end row-->
								</div>
								<!--end card-body-->
							</div>
							<!--end card-->
						</div> <!-- end col -->
					</div> <!-- end row -->
				<?php 
				//} 
				?>

			</div><!-- container -->

			<!--Start Rightbar-->
			<!--Start Rightbar/offcanvas-->
			<div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
				<div class="offcanvas-header border-bottom">
					<h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
					<button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<h6>Account Settings</h6>
					<div class="p-2 text-start mt-3">
						<div class="form-check form-switch mb-2">
							<input class="form-check-input" type="checkbox" id="settings-switch1">
							<label class="form-check-label" for="settings-switch1">Auto updates</label>
						</div>
						<!--end form-switch-->
						<div class="form-check form-switch mb-2">
							<input class="form-check-input" type="checkbox" id="settings-switch2" checked>
							<label class="form-check-label" for="settings-switch2">Location Permission</label>
						</div>
						<!--end form-switch-->
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="settings-switch3">
							<label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
						</div>
						<!--end form-switch-->
					</div>
					<!--end /div-->
					<h6>General Settings</h6>
					<div class="p-2 text-start mt-3">
						<div class="form-check form-switch mb-2">
							<input class="form-check-input" type="checkbox" id="settings-switch4">
							<label class="form-check-label" for="settings-switch4">Show me Online</label>
						</div>
						<!--end form-switch-->
						<div class="form-check form-switch mb-2">
							<input class="form-check-input" type="checkbox" id="settings-switch5" checked>
							<label class="form-check-label" for="settings-switch5">Status visible to all</label>
						</div>
						<!--end form-switch-->
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="settings-switch6">
							<label class="form-check-label" for="settings-switch6">Notifications Popup</label>
						</div>
						<!--end form-switch-->
					</div>
					<!--end /div-->
				</div>
				<!--end offcanvas-body-->
			</div>
			<!--end Rightbar/offcanvas-->
			<!--end Rightbar-->

			<!--Start Footer-->
			<!-- Footer Start -->
			<?php include 'footer.php'; ?>
			<!-- end Footer -->
			<!--end footer-->
		</div>
		<!-- end page content -->
	</div>
	<!-- end page-wrapper -->

	<!-- Javascript  -->
	<!-- App js -->
	<script src="assets/js/app.js"></script>
	<!--Coupon Modal Start--->
	<div class="modal fade bd-example-modal-lg" id="Coupon" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title m-0" id="Coupon">Add Coupon</h6>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<!--end modal-header-->
				<div class="modal-body">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered mb-0 table-centered">
								<thead>
									<tr>
										<th>Coupon Code</th>
										<th>Discount Type</th>
										<th>Discount Amount</th>
										<th>Coupon Status</th>
										<th>Validity</th>
										<th class="text-end">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>124781</td>
										<td>Flat Rate</td>
										<td>&#8377; 321</td>
										<td><span class="badge badge-soft-success">Active</span></td>
										<td>20 Days</td>
										<td class="text-end">
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
												<label class="form-check-label" for="inlineCheckbox1"></label>
											</div>
										</td>
									</tr>
									<tr>
										<td>542136</td>
										<td>%</td>
										<td>&#8377; 32</td>
										<td><span class="badge badge-soft-success">Active</span></td>
										<td>20 Days</td>
										<td class="text-end">
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
												<label class="form-check-label" for="inlineCheckbox1"></label>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<!--end /table-->
						</div>
						<!--end /tableresponsive-->
					</div>

				</div>
				<!--end modal-body-->
				<div class="modal-footer">
					<button type="button" class="btn btn btn-primary btn-sm">Update</button>
					<button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
				</div>
				<!--end modal-footer-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>
	<!--end modal-->
	<!-- Coupon Modal Start--->
	<div class="modal fade bd-example-modal-lg" id="cashback" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title m-0" id="cashback">Add Cashback</h6>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<!--end modal-header-->
				<div class="modal-body">
					<div class="table-responsive">
						<table class="table table-bordered mb-0 table-centered">
							<thead>
								<tr>
									<th>Cashback Title</th>
									<th>Cashback Amount</th>
									<th>Coupon Status</th>
									<th>Validity</th>
									<th class="text-end">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Offer</td>
									<td>&#8377; 321</td>
									<td><span class="badge badge-soft-success">Active</span></td>
									<td>20 Days</td>
									<td class="text-end">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
											<label class="form-check-label" for="inlineCheckbox1"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>Sale</td>
									<td>&#8377; 32</td>
									<td><span class="badge badge-soft-success">Active</span></td>
									<td>20 Days</td>
									<td class="text-end">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
											<label class="form-check-label" for="inlineCheckbox1"></label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<!--end /table-->
					</div>
					<!--end /tableresponsive-->

				</div>
				<!--end modal-body-->
				<div class="modal-footer">
					<button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn btn-primary btn-sm">Update</button>
				</div>
				<!--end modal-footer-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>
	<!--end modal-->

	<!--modal Ends--->
	<!-- Discount Modal Start--->
	<div class="modal fade bd-example-modal-lg" id="discount" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title m-0" id="discount">Add Discount for Customers/Member</h6>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<!--end modal-header-->
				<div class="modal-body">
					<div class="col-md-12 discount-block">
						<div class="row">
							<div class="form-group col-md-4">
								<select class="form-control">
									<option value="1" selected="">General Discount</option>
									<option value="2" selected="">Additionl Discount for IdealVillage Members</option>
									<option value="3" selected="">Additionl Discount for WomenFederation Members</option>
									<option value="4" selected="">Additionl Discount for IdealVillage Members</option>
									<option value="4" selected="">Additionl Discount for 1 Jammu Members</option>

								</select>
							</div>
							<div class="form-group col-md-4">
								<input type="number" name="discount" class="form-control" placeholder="Discount %">
							</div>
							<div class="form-group col-md-3">
								<a href="" class="btn btn-dark btn-theme-colored btn-xs discount-add">Add More</a>
							</div>
						</div>
					</div>

				</div>
				<!--end modal-body-->
				<div class="modal-footer">
					<button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn btn-primary btn-sm">Update</button>
				</div>
				<!--end modal-footer-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>
	<!--end modal-->

	<!--modal Ends--->
	<!-- Margin Modal Start--->
	<div class="modal fade bd-example-modal-lg" id="margin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title m-0" id="discount">Add Margin Rates</h6>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<!--end modal-header-->
				<div class="modal-body">
					<h5>B-C Sales</h5>
					<div class="row">
						<div class="col-md-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Direct Sales</label>
							</div>
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Margin in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Mark Up in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="MRP">
						</div>
					</div>
					<!--end row-->
					<div class="row my-2">
						<div class="col-md-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Bloggers</label>
							</div>
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Margin in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Mark Up in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="MRP">
						</div>
					</div>
					<!--end row-->
					<div class="row my-2">
						<div class="col-md-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Affiliates</label>
							</div>
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Margin in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Mark Up in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="MRP">
						</div>
					</div>
					<!--end row-->
					<div class="row my-2">
						<div class="col-md-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Reviwer</label>
							</div>
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Margin in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Mark Up in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="MRP">
						</div>
					</div>
					<!--end row-->
					<h5>B-B Sales</h5>
					<div class="row">
						<div class="col-md-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Wholesaler</label>
							</div>
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Margin in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Mark Up in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="MRP">
						</div>
					</div>
					<!--end row-->
					<div class="row my-2">
						<div class="col-md-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Stockist</label>
							</div>
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Margin in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Mark Up in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="MRP">
						</div>
					</div>
					<!--end row-->
					<div class="row my-2">
						<div class="col-md-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Distributors</label>
							</div>
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Margin in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Mark Up in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="MRP">
						</div>
					</div>
					<!--end row-->
					<div class="row my-2">
						<div class="col-md-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Reseller</label>
							</div>
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Margin in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="Mark Up in Rs">
						</div>
						<div class="col-md-3">
							<input id="" type="text" value="" class="form-control" placeholder="MRP">
						</div>
					</div>
					<!--end row-->
				</div>
				<!--end modal-body-->
				<div class="modal-footer">
					<button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn btn-primary btn-sm">Update</button>
				</div>
				<!--end modal-footer-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>
	<!--end modal-->
	<!-- E-wallet Modal Start--->
	<div class="modal fade bd-example-modal-sm" id="ewallet" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title m-0" id="ewallet">Add e-Wallet Limit</h6>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<!--end modal-header-->
				<div class="modal-body">
					<div class="row">
						<div class="mb-2">
							<label class="mb-2"><span class="desc ms-1 font-11 text-muted">Limit amount of e-wallet amount to becan be used by customer </span></label>
							<input id="" type="text" value="" class="form-control" placeholder="e-Wallet Limit Amount">
						</div>
					</div>
					<!--end row-->

				</div>
				<!--end modal-body-->
				<div class="modal-footer">
					<button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn btn-primary btn-sm">Update</button>
				</div>
				<!--end modal-footer-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>
	<!--end modal-->

	<!--modal Ends--->
	<!-- stats Modal Start--->
	<div class="modal fade bd-example-modal-md" id="stats" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title m-0" id="ewallet">View Product Stats</h6>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<!--end modal-header-->
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-3 text-center align-self-center">
							<img src="assets/images/small/btc.png" alt="" class="img-fluid">
						</div>
						<!--end col-->
						<div class="col-lg-9">
							<h5>Product Title</h5>
							<span class="badge bg-soft-secondary">Featured</span>
							<small class="text-muted ml-2">Posted: 07 Oct 2020</small>
							<ul class="mt-3 mb-0">
								<li>Total Views from Home Site: 26 </li>
								<li>Total Views from Partner Sites: 6 </li>
								<li>Stock Left: <span class="badge bg-soft-danger">2</span></li>
								<li>Total Orders: <span class="badge bg-soft-success">4</span< /li>
							</ul>
						</div>
						<!--end col-->
					</div>
					<!--end row-->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
				</div>
				<!--end modal-footer-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>
	<!--end modal-->
	<script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../assets/plugins/datatables/simple-datatables.js"></script>
    <script src="../assets/pages/datatable.init.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
        var blockId = "";

        function setId(id) {
            blockId = id;
        }
        $('.cancel').click(function(e) {
            e.preventDefault(); //$("#cancel-button").attr("order-id");
            var block = $("#block-button" + blockId).attr("order-id");
            // console.log(block);
            Swal.fire({
                title: 'Do you really want to block this?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `Block`,
                denyButtonText: `Don't Block`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "applied_jobs_helper.php",
                        data: {
                            "block_btn_set": 1,
                            "blockId": block,
                        },
                        success: function(response) {
                            Swal.fire('Cancel!', '', 'success').then((result) => {
                                location.reload();
                            });
                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire('Not cancelled', '', 'info')
                }
            });
        });
    </script>
</body>
<!--end body-->

</html>