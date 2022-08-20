

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

    </head>

    <body id="body" class="dark-sidebar">
        <!-- leftbar-menu -->
		<?php include 'menu.php';?>
        <!-- end left-sidenav-->
        <!-- end leftbar-menu-->

        <!-- Top Bar Start -->
        <!-- Top Bar Start -->
		<?php include 'top-bar.php';?>
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
                    <?php
                    require_once "config/connection.php";
                    require_once "config/cloudinaryConfig.php";
                    $sql = "SELECT a.*, b.membership_title, b.price FROM purchased_memberships a INNER JOIN membership b
                            WHERE a.membership_id = b.id AND a.site_id = $this_site_id";
                    $res = mysqli_query($conn, $sql);
                    if (!$res){
                        errlog(mysqli_error($conn), $qry);
                    }
                    
                    foreach($res as $row){
                    ?>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="pricingTable1 text-center">
                                    <h6 class="title1 pt-3 pb-2 m-0"><?php echo $row['membership_title']; ?></h6>
                                    <p class="text-muted p-3 mb-0"><?php echo $row['benifits']; ?></p>
                                    <div class="p-3">
                                        <h3 class="amount amount-border d-inline-block">$<?php echo $row['price']; ?>.00</h3>
                                        <small class="font-12 text-muted">/year</small>
                                    </div>
                                   <a href="#" class="btn btn-dark py-2 px-5 font-16"><span>Details</span></a>
                                </div><!--end pricingTable-->
                            </div><!--end card-body-->
                        </div> <!--end card-->                                   
                    </div><!--end col-->
                    <?php } ?>
					 <!-- <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="pricingTable1 text-center">
                                    <h6 class="title1 pt-3 pb-2 m-0"> Profile Verification</h6>
                                    <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted</p>
                                    <div class="p-3">
                                        <h3 class="amount amount-border d-inline-block">$39.00</h3>
                                        <small class="font-12 text-muted">/year</small>
                                    </div>
                                   <a href="#" class="btn btn-dark py-2 px-5 font-16"><span>Details</span></a>
                                </div>
                            </div>
                        </div>                                   
                    </div>
					 <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="pricingTable1 text-center">
                                    <h6 class="title1 pt-3 pb-2 m-0">Featured Profile</h6>
                                    <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted</p>
                                    <div class="p-3">
                                        <h3 class="amount amount-border d-inline-block">$39.00</h3>
                                        <small class="font-12 text-muted">/year</small>
                                    </div>
                                   <a href="#" class="btn btn-dark py-2 px-5 font-16"><span>Details</span></a>
                                </div>
                            </div>
                        </div>                                    
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">My Packages </h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="datatable_1">
                                        <thead class="thead-light">
                                          <tr>
                                            <th>Order Id</th>
                                            <th>Package Name</th>
                                            <th>Package Amount </th>
                                            <th>Order Date</th>
                                            <th>Validity</th>
                                            <th>Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            require_once "config/connection.php";
                                            require_once "config/cloudinaryConfig.php";
                                            
                                            $id = getVendorID();

                                            $sql = "SELECT a.*, b.package_price, b.status FROM purchased_packages a INNER JOIN
                                                    vendor_packages b WHERE a.vendor_id = $id AND a.package_title = b.package_title
                                                    AND a.site_id = $this_site_id";
                                            $res = mysqli_query($conn, $sql);
                                            if (!$res) {
                                                errlog(mysqli_error($conn), $qry) ;
                                            }

                                            foreach($res as $row){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['order_id']; ?></td>
                                                <td><?php echo $row['package_title']; ?></td>
                                                <td>&#8377; <?php echo $row['package_price']; ?></td>
                                                <td>23/02/2022</td>
                                                <td><span class="badge badge-soft-success">
                                                <?php
                                                    if($row['status'] == 1){
                                                        echo '<span class="badge badge-soft-success">Active</span>';
                                                    }
                                                    else{
                                                        echo '<span class="badge badge-soft-pink">Pending</span>';
                                                    }
                                                    ?>
                                                </span></td>
                                                <td>
												<button type="button" class="btn btn-sm btn-outline-primary">Renew</button>
												<button type="button" class="btn btn-sm btn-outline-pink">Download</button>
												<button type="button" class="btn btn-sm btn-outline-info">Access</button>
												</td>
                                            </tr>
                                            <?php } ?>
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
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->               
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->
                 
                <!--Start Footer-->
                <!-- Footer Start -->
                <?php include 'footer.php';?>
                <!-- end Footer -->                
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
  <!-- Javascript  -->
    <script src="assets/plugins/datatables/simple-datatables.js"></script>
    <script src="assets/pages/datatable.init.js"></script>
        <!-- Javascript  -->   
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
    <!--end body-->


</html>