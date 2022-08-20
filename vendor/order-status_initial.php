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
    <link href="assets/plugins/datatables/datatable.css" rel="stylesheet" type="text/css" />

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
                                                    errlog(mysqli_error($conn), $qry);
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
                                                            $post = (int)$diff->format('%R%a days'). ' ' . 'Days ago';
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
                                                    <a href="#"><i class="mdi mdi-email-mark-as-unread text-secondary font-16"></i></a>
                                                    <a href="#"><i class="mdi mdi-account-circle text-secondary font-16"></i></a>
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
												<a href="#"><i class="mdi mdi-email-mark-as-unread text-secondary font-16"></i></a>
												<a href="#"><i class="mdi mdi-account-circle text-secondary font-16"></i></a>
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
    <!-- end page-wrapper -->
    <!-- Javascript  -->
    <script src="assets/plugins/datatables/simple-datatables.js"></script>
    <script src="assets/pages/datatable.init.js"></script>
    <!-- Javascript  -->
    <script src="assets/plugins/datatables/simple-datatables.js"></script>
    <script src="assets/pages/datatable.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>
<!--end body-->


</html>