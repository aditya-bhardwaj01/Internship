<?php
include '../config/connection.php';
require "../config/cloudinaryConfig.php";
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>Unikit - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <link href="../assets/plugins/datatables/datatable.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/rating/starability-all.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="dark-sidebar">
    <!-- leftbar-menu -->
    <?php include 'menu.php'; ?>
    <!-- end left-sidenav-->
    <!-- end leftbar-menu-->

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
                                    <li class="breadcrumb-item"><a href="#">Unikit</a></li>
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active">Datatables</li>
                                </ol>
                            </div>
                            <h4 class="page-title"></h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Digital Products Manager </h4>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="datatable_1">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Product Detail</th>
                                                <th>Category</th>
                                                <th>Product Type</th>
                                                <th>Product price </th>
                                                <th>Status</th>
                                                <th>Share</th>
                                                <th>Promote</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * from marketplace_digital_products where site_id = $this_site_id";
                                            $res = mysqli_query($conn, $sql);
                                            if (!$res) {
                                                errlog(mysqli_error($conn), $sql);
                                            }

                                            foreach ($res as $row) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <img src="<?php echo htmlspecialchars($row['banner']) ?>" alt="" height="40" width="40">
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <a href="#" class="d-inline-block align-middle mb-0 product-name fw-semibold"><?php echo htmlspecialchars($row['title']) ?></a>
                                                            <br>
                                                            <span class="text-muted font-13 fw-semibold">Validity:13 Days</span>
                                                        </p>
                                                        <br>
                                                        <a href="#" class="font-12 text-primary">Product Owner: Self</a>
                                                        <br>
                                                        <div class="float-left">
                                                            <div class="dropdown d-inline-block">
                                                                <a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <?php
                                                                    if ($row['label'] == 1) { ?>
                                                                        <span class="badge badge-soft-warning">Promoted</span>
                                                                    <?php }

                                                                    if ($row['label'] == 2) { ?>
                                                                        <span class="badge badge-soft-purple">Sponsored</span>
                                                                    <?php }

                                                                    if ($row['label'] == 3) { ?>
                                                                        <span class="badge badge-soft-success">Featured</span>
                                                                    <?php }
                                                                    ?>
                                                                    <!-- <span class="badge badge-soft-primary">None</span>	 -->
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1" style="">
                                                                    <a class="dropdown-item" href="#"><span class="badge badge-soft-warning" onclick="changeLabel(1, <?php echo $row['id'] ?>)">Promoted</span></a>
                                                                    <a class="dropdown-item" href="#"><span class="badge badge-soft-purple" onclick="changeLabel(2, <?php echo $row['id'] ?>)">Sponsored</span></a>
                                                                    <a class="dropdown-item" href="#"><span class="badge badge-soft-success" onclick="changeLabel(3, <?php echo $row['id'] ?>)">Featured</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($row['cat_id']) ?></td>
                                                    <td><?php echo htmlspecialchars($row['type']) ?></td>
                                                    <td>
                                                        <h6 class="text-dark mt-0 mb-2">₹ <?php echo htmlspecialchars($row['price']) ?>.00 <br>
                                                            <small class="text-muted font-14"><del>₹ 18.00</del></small>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <?php
                                                            if ($row['status'] == 0) { ?>
                                                                <span class="badge badge-soft-warning" id="current-status">Pending</span>
                                                            <?php }

                                                            if ($row['status'] == 1) { ?>
                                                                <span class="badge badge-soft-success" id="current-status">Active</span>
                                                            <?php }

                                                            if ($row['status'] == 2) { ?>
                                                                <span class="badge badge-soft-pink" id="current-status">Suspended</span>
                                                            <?php }
                                                            ?>
                                                            <!-- <span class="badge badge-soft-primary">None</span>	 -->
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1" style="">
                                                            <a class="dropdown-item" href="#"><span class="badge badge-soft-warning" onclick="changeStatus(0, <?php echo htmlspecialchars($row['id']) ?>)">Pending</span></a>
                                                            <a class="dropdown-item" href="#"><span class="badge badge-soft-success" onclick="changeStatus(1, <?php echo htmlspecialchars($row['id']) ?>)">Active</span></a>
                                                            <a class="dropdown-item" href="#"><span class="badge badge-soft-pink" onclick="changeStatus(2, <?php echo htmlspecialchars($row['id']) ?>)">Suspended</span></a>
                                                        </div>



                                                        <!-- <?php
                                                                if ($row['status'] == 0) { ?>
                                                            <span class="badge badge-soft-success">Pending</span>
                                                        <?php }

                                                                if ($row['status'] == 1) { ?>
                                                            <span class="badge badge-soft-warning">Published</span>
                                                        <?php }

                                                                if ($row['status'] == 2) { ?>
                                                            <span class="badge badge-soft-pink">Suspended</span>
                                                        <?php }
                                                        ?> -->



                                                    </td>
                                                    <td>
                                                        <div class="float-end">
                                                            <div class="dropdown d-inline-block">
                                                                <a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="ti ti-share font-18 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1" style="">
                                                                    <ul class="list-inline mb-0">
                                                                        <div class="button-list btn-social-icon">
                                                                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://bit.ly/SYO3LX" target="_blank" data-mce-target="_blank" type="button" class="btn btn-soft-primary btn-icon-circle">
                                                                                <i class="fab fa-facebook-f"></i>
                                                                            </a>

                                                                            <a href="https://twitter.com/home?status=7%20Marketing%20Skills%20You%20Need%20T…Promotion:%20http://bit.ly/SYO3LX%20via%20@HubSpot%20%23marketingtips" target="_blank" data-mce-target="_blank" type="button" class="btn btn-soft-primary btn-icon-circle">
                                                                                <i class="fab fa-twitter"></i>
                                                                            </a>

                                                                            <a href="https://www.instagram.com/shareArticle?mini=true&url=https://www.instagram.com/" target="_blank" data-mce-target="_blank" type="button" class="btn btn-soft-pink btn-icon-circle  ms-2">
                                                                                <i class="fab fa-instagram"></i>
                                                                            </a>
                                                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.linkedin.com/" target="_blank" data-mce-target="_blank" type="button" class="btn btn-soft-info btn-icon-circle  ms-2">
                                                                                <i class="fab fa-linkedin-in"></i>
                                                                            </a>
                                                                            <a href="https://api.whatsapp.com/send?text=www.google.com" target="_blank" data-mce-target="_blank" type="button" class="btn btn-soft-success btn-icon-circle  ms-2">
                                                                                <i class="fab fa-whatsapp"></i>
                                                                            </a>
                                                                        </div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="float-end">
                                                            <div class="dropdown d-inline-block">
                                                                <a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="ti ti-speakerphone font-18 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1" style="">
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Coupon">+ Apply Coupon</a>
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#discount">+ Add Discount</a>
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#margin">+ Add Margin Rate</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="float-end">
                                                            <div class="dropdown d-inline-block">
                                                                <a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true">
                                                                    <i class="las la-ellipsis-v font-24 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end " aria-labelledby="dLabel1" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 27px);" data-popper-placement="bottom-end">
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#stats">View stats</a>
                                                                    <a class="dropdown-item" href="#">View Product</a>
                                                                    <a class="dropdown-item" href="#">Edit Product</a>
                                                                    <a class="dropdown-item" href="#">Proliferate Product</a>
                                                                    <a class="dropdown-item" href="#">Delete Product</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                            <!-- <tr>
                                                <td>
												<img src="../assets/images/products/04.png" alt="" height="40">
												    <p class="d-inline-block align-middle mb-0">
                                                      <a href="#" class="d-inline-block align-middle mb-0 product-name fw-semibold">Apple Watch</a> 
                                                 <br>
                                                    <span class="text-muted font-13 fw-semibold">Validity:13 Days</span> 
                                                    </p>
												<br>
												<a href="#" class="font-12 text-primary">Product Owner: Vendor</a>
													<br>
														<div class="float-left">                                        
															<div class="dropdown d-inline-block">
																<a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
																	<span class="badge badge-soft-primary">None</span>	
																</a>
																<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1" style="">
																	<a class="dropdown-item" href="#"><span class="badge badge-soft-success">Featured</span></a>
																	<a class="dropdown-item" href="#"><span class="badge badge-soft-purple">Sponsored</span></a>
																	<a class="dropdown-item" href="#"><span class="badge badge-soft-warning">Promoted</span></a>
																</div>
															</div>
														</div>
                                               </td>
                                                <td>Employment</td>
                                                <td>Script</td>
                                                <td>&#8377; 958</td>
                                                <td><span class="badge badge-soft-pink">Pending</span></td>
												<td >                                                       
                                                    <div class="float-end">                                        
														<div class="dropdown d-inline-block">
															<a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
																<i class="ti ti-share font-18 text-muted"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1" style="">
																<ul class="list-inline mb-0">
																	<div class="button-list btn-social-icon">                                                
																		<button type="button" class="btn btn-soft-primary btn-icon-circle">
																			<i class="fab fa-facebook-f"></i>
																		</button>
								
																		<button type="button" class="btn btn-soft-info btn-icon-circle ms-2">
																			<i class="fab fa-twitter"></i>
																		</button>
								
																		<button type="button" class="btn btn-soft-pink btn-icon-circle  ms-2">
																			<i class="fab fa-instagram"></i>
																		</button>
																		<button type="button" class="btn btn-soft-info btn-icon-circle  ms-2">
																			<i class="fab fa-linkedin-in"></i>
																		</button>
																		<button type="button" class="btn btn-soft-success btn-icon-circle  ms-2">
																			<i class="fab fa-whatsapp"></i>
																		</button>
																	</div>
																</ul>
															</div>
														</div>
													</div>
                                                </td>
												<td>                                                       
                                                    <div class="float-end">                                        
														<div class="dropdown d-inline-block">
															<a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
																<i class="ti ti-speakerphone font-18 text-muted"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1" style="">
																<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Coupon">+ Apply Coupon</a>
																<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#discount">+ Add Discount</a> 
																<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#margin">+ Add Margin Rate</a>
															</div>
														</div>
													</div>
                                                </td>
                                                <td>                                                       
                                                    <div class="float-end">                                        
														<div class="dropdown d-inline-block">
															<a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true">
																<i class="las la-ellipsis-v font-24 text-muted"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 27px);" data-popper-placement="bottom-end">
																<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#stats">View stats</a>
																<a class="dropdown-item" href="#">View Product</a>
																<a class="dropdown-item" href="#">Edit Product</a> 
																<a class="dropdown-item" href="#">Proliferate Product</a> 
																<a class="dropdown-item" href="#">Delete Product</a>
															</div>
														</div>
													</div>
                                                </td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


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
    <!--Coupon Modal Start--->
    <div class="modal fade bd-example-modal-md" id="Coupon" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="Coupon">Write a Review</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--end modal-header-->
                <div class="modal-body">

                    <div class="col-md-12">
                        <div class="col-md-4">
                            <h6 class="card-title">Product Title</h6>
                            <img src="https://getuikit.com/v2/docs/images/placeholder_600x400.svg" alt="" height="100" width="100">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form>
                            <div class="starability-checkmark">
                                <input type="radio" id="checkmark-rate5" name="rating" value="5">
                                <label for="checkmark-rate5" title="Amazing">5 stars</label>

                                <input type="radio" id="checkmark-rate4" name="rating" value="4">
                                <label for="checkmark-rate4" title="Very good">4 stars</label>

                                <input type="radio" id="checkmark-rate3" name="rating" value="3">
                                <label for="checkmark-rate3" title="Average">3 stars</label>

                                <input type="radio" id="checkmark-rate2" name="rating" value="2">
                                <label for="checkmark-rate2" title="Not good">2 stars</label>

                                <input type="radio" id="checkmark-rate1" name="rating" value="1">
                                <label for="checkmark-rate1" title="Terrible">1 star</label>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" id="review" placeholder="Review"></textarea>
                        </div>
                    </div>
                    <div class="met-profile-main-pic">
                        <img src="https://thumbs.dreamstime.com/b/no-thumbnail-image-placeholder-forums-blogs-websites-148010362.jpg" alt="" height="50" class="rounded-circle">
                        <span class="met-profile_main-pic-change">
                            <i class="fas fa-camera"></i>Add Photos
                        </span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
    <!--end modal-->
    <!-- end page-wrapper -->
    <!-- Javascript  -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="../assets/vendor/sticky/sticky.min.js"></script>
    <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Main JS -->
    <script src="../assets/js/main.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script src="../assets/plugins/datatables/simple-datatables.js"></script>
    <script src="../assets/pages/datatable.init.js"></script>
    <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

    <!-- Javascript  -->
    <!-- App js -->
    <script src="../assets/js/app.js"></script>

    <script>
        function changeStatus(statusId, rowId) {
            $.ajax({
                url: "digitalproduct_helper.php",
                type: "POST",
                data: {
                    rowId: rowId,
                    type: 'status',
                    changeId: statusId
                },
                success: function(result) {
                    location.reload();
                    if (result == 1) {
                        swal("Success!", "Status was changed successfully!", "success");
                    } else {
                        swal("Failed!", "Status was not changed!", "error");
                    }
                }
            });
        }

        function changeLabel(labelId, rowId) {
            $.ajax({
                url: "digitalproduct_helper.php",
                type: "POST",
                data: {
                    rowId: rowId,
                    type: 'label',
                    changeId: labelId
                },
                success: function(result) {
                    location.reload();
                    if (result == 1) {
                        swal("Success!", "Label was changed successfully!", "success");
                    } else {
                        swal("Failed!", "Label was not changed!", "error");
                    }
                }
            })
        }
    </script>

</body>
<!--end body-->


</html>