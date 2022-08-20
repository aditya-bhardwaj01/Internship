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
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/plugins/datatables/datatable.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/rating/starability-all.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

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

    <?php
    if (!isset($_SESSION['vendor_id'])) {
        // not vendor
        header("location: vendor_login.php");
    } else {
    ?>
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
                                    <h4 class="card-title">Customers Details </h4>
                                </div>
                                <!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="datatable_1">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Order Id</th>
                                                    <th>Order Amount</th>
                                                    <th>Vendor </th>
                                                    <th>Order Date</th>
                                                    <th>Payment Status</th>
                                                    <th>Order Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require_once 'config/connection.php';
                                                $id = getVendorID();

                                                $sql = "SELECT a.*, b.name FROM orders a INNER JOIN vendor b WHERE
                                                    a.vendor_id = $id AND a.site_id = $this_site_id AND a.vendor_id = b.id";
                                                $res = mysqli_query($conn, $sql);
                                                if (!$res) {
                                                    errlog(mysqli_error($conn), $sql);
                                                }

                                                // $sql = "SELECT * FROM vendor_packages WHERE site_id = $this_site_id";
                                                // $res = mysqli_query($conn, $sql);

                                                foreach ($res as $row) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['id'] ?></td>
                                                        <td>&#8377; <?php echo $row['amount'] ?></td>
                                                        <td><?php echo $row['name'] ?></td>
                                                        <td>
                                                            <?php
                                                            $curr = date_create(date('Y-m-d'));
                                                            $order_date = date_create($row['order_date']);
                                                            $diff = date_diff($order_date, $curr);
                                                            $post = (int)$diff->format('%R%a days') . ' ' . 'Days ago';
                                                            echo $post;
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if ($row['payment_status'] == 'PAID') { ?>
                                                                <span class="badge badge-soft-success">Paid</span>

                                                            <?php } else { ?>
                                                                <span class="badge badge-soft-pink">Pending</span>
                                                            <?php }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if ($row['order_status'] == 'PAID') { ?>
                                                                <span class="badge badge-soft-success">Paid</span>
                                                            <?php } else { ?>
                                                                <span class="badge badge-soft-pink">Pending</span>
                                                            <?php }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <button type="button" style="display: <?php
                                                                                                    if ($row['order_status'] == 0) {
                                                                                                        echo 'inline';
                                                                                                    } else {
                                                                                                        echo 'none';
                                                                                                    }
                                                                                                    ?>;" id="cancel-button<?php echo $row['id']; ?>" order-id="<?php echo $row['id']; ?>" class="cancel btn btn-sm btn-outline-primary" onclick="setId(<?php echo $row['id']; ?>)">
                                                                Cancel
                                                            </button>

                                                            <button type="button" class="btn btn-sm btn-outline-pink">Exchange</button>
                                                            <button type="button" style="display: <?php
                                                                                                    if ($row['order_status'] != 6) {
                                                                                                        echo 'none';
                                                                                                    } else if ($row['order_status'] == 6) {
                                                                                                        echo 'inline';
                                                                                                    }
                                                                                                    ?>;" class="btn btn-sm btn-outline-info">Return</button>


                                                            <button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#exampleModal">
                                                                Details
                                                            </button>
                                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col">ID</th>
                                                                                        <th scope="col">Image</th>
                                                                                        <th scope="col">Name</th>
                                                                                        <th scope="col">Price</th>
                                                                                        <th scope="col">Order Date</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php
                                                                                    $marketplace_id;
                                                                                    $orderId = $row['id']; //$row['id']
                                                                                    $sqlDetail = "SELECT a.*, b.image_url FROM order_details a INNER JOIN product_images b
                                                                                    WHERE a.site_id = $this_site_id AND a.order_id = $orderId AND a.item_id = b.product_id AND
                                                                                    a.marketplace_id = b.marketplace_id AND b.main = 1 AND b.type = 'IMAGE'"; //$row['id']
                                                                                    $resDetail = mysqli_query($conn, $sqlDetail);
                                                                                    if (!$resDetail) {
                                                                                        errlog(mysqli_error($conn), $sqlDetail);
                                                                                    }

                                                                                    foreach ($resDetail as $rowDetail) {
                                                                                    ?>
                                                                                        <tr>
                                                                                            <th scope="row"><?php echo $rowDetail['id']; ?></th>
                                                                                            <td>
                                                                                                <img style="width: 100px; height: 80px;" src="<?php echo $rowDetail['image_url']; ?>" alt="order_image">
                                                                                            </td>
                                                                                            <td>Otto</td>
                                                                                            <td>&#8377; <?php echo $rowDetail['price']; ?></td>
                                                                                            <td><?php echo $rowDetail['order_date']; ?></td>
                                                                                        </tr>
                                                                                    <?php
                                                                                    }
                                                                                    ?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                                <!-- <tr>
                                                <td>234</td>
                                                <td>&#8377; 958</td>
                                                <td>Vendor Name</td>
                                                <td>2 Days Ago</td>
                                                <td><span class="badge badge-soft-success">Sucess</span></td>
                                                <td><span class="badge badge-soft-pink">Processing</span></td>
                                                <td>
  
												<h6 data-bs-toggle="modal" data-bs-target="#Coupon">Write a Review</h6>												
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
    <?php
    }
    ?>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/plugins/datatables/simple-datatables.js"></script>
    <script src="assets/pages/datatable.init.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var cancelId = "";
        //id="cancel-button<?php echo $row['id']; ?>" order-id="<?php echo $row['id']; ?>" 
        //class="cancel btn btn-sm btn-outline-primary" onclick="setId(<?php echo $row['id']; ?>)">

        function setId(id) {
            cancelId = id;
        }
        $('.cancel').click(function(e) {
            e.preventDefault(); //$("#cancel-button").attr("order-id");
            var cancelid = $("#cancel-button" + cancelId).attr("order-id");
            console.log(cancelid);
            Swal.fire({
                title: 'Do you really want to cancel the order?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `Cancel`,
                denyButtonText: `Don't cancel`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "order_status_helper.php",
                        data: {
                            "cancel_btn_set": 1,
                            "cancelid": cancelid,
                        },
                        success: function(response) {
                            console.log(response);
                            Swal.fire('Cancel!', '', 'success').then((result) => {
                                console.log(result);
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
    <!-- Javascript  -->
    <!-- App js -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

</body>
<!--end body-->


</html>