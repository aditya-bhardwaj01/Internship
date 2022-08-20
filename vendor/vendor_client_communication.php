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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body id="body" class="dark-sidebar">
    <!-- leftbar-menu -->
    <!-- end left-sidenav-->
    <!-- end leftbar-menu-->

    <!-- Top Bar Start -->
    <!-- Top Bar Start -->
    <!-- Top Bar End -->
    <!-- Top Bar End -->

    <?php
    //if (!isset($_SESSION['vendor_id'])) {
    // not vendor
    //    header("location: admin_login.php") ;
    //} else { 
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
                                <h4 class="card-title">Package Details </h4>
                                <button type="button" class="btn btn-sm btn-outline-primary my-2 mx-2" style="float:right;" data-bs-toggle="modal" data-bs-target="#catgory">+ Add Package</button>

                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="datatable_1">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Vendor Name</th>
                                                <th>Profile pic</th>
                                                <th>Request type</th>
                                                <th>Requested date </th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once 'config/connection.php';
                                            $id = getVendorID();

                                            $sql = "SELECT * FROM communication WHERE vendor_id = 1 AND site_id = $this_site_id";
                                            $res = mysqli_query($conn, $sql);
                                            if (!$res) {
                                                errlog(mysqli_error($conn), $sql);
                                            }

                                            // $sql = "SELECT * FROM vendor_packages WHERE site_id = $this_site_id";
                                            // $res = mysqli_query($conn, $sql);

                                            foreach ($res as $row) {
                                            ?>
                                                <tr>
                                                    <?php
                                                    $vendor_id = $row['vendor_id'];
                                                    $sql_vendor = "SELECT name, profile_pic FROM vendor 
                                                        WHERE id = $vendor_id AND site_id = $this_site_id";
                                                    $res_vendor = mysqli_query($conn, $sql_vendor);
                                                    if (!$res_vendor) {
                                                        errlog(mysqli_error($conn), $sql_vendor);
                                                    }

                                                    foreach ($res_vendor as $vendor) { ?>
                                                        <td><?php echo $vendor['name']; ?></td>
                                                        <td><img style="height: 50px; width: 50px;" src="<?php echo $vendor['profile_pic']; ?>" alt="profile_pic"></td>
                                                    <?php }
                                                    ?>
                                                    <td><?php echo $row['type']; ?></td>
                                                    <td><?php echo $row['created_date']; ?></td>

                                                    <td>
                                                        <?php
                                                        if ($row['type'] == 'rfi') { ?>
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rfi">
                                                                RFI
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="rfi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">RFI</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <?php
                                                                            $idRfi = $row['id'];
                                                                            $sqlType = "SELECT a.*, b.name, b.email, b.mobile FROM communication a
                                                                            INNER JOIN vendor b WHERE a.id = $idRfi AND a.vendor_id = b.id AND 
                                                                            a.site_id = $this_site_id";
                                                                            $resType = mysqli_query($conn, $sqlType);
                                                                            if (!$resType) {
                                                                                errlog(mysqli_error($conn), $sqlType);
                                                                            }

                                                                            foreach($resType as $rowType){
                                                                            ?>
                                                                            <div class="row">
                                                                                <div class="col-sm-8">
                                                                                    <p>
                                                                                    <dl>
                                                                                        <dt>Information asked for</dt>
                                                                                        <dd>- <?php echo $row['information_asked_for']; ?></dd>
                                                                                    </dl>
                                                                                    </p>

                                                                                    <p>
                                                                                    <dl>
                                                                                        <dt>Purpose for information</dt>
                                                                                        <dd>- <?php echo $row['purpose_of_information']; ?></dd>
                                                                                    </dl>
                                                                                    </p>

                                                                                    <p>
                                                                                    <dl>
                                                                                        <dt>Name</dt>
                                                                                        <dd>- <?php echo $row['name']; ?></dd>
                                                                                    </dl>
                                                                                    </p>

                                                                                    <p>
                                                                                    <dl>
                                                                                        <dt>Email</dt>
                                                                                        <dd>- <?php echo $row['email']; ?></dd>
                                                                                    </dl>
                                                                                    </p>

                                                                                    <p>
                                                                                    <dl>
                                                                                        <dt>Mobile</dt>
                                                                                        <dd>- <?php echo $row['mobile']; ?></dd>
                                                                                    </dl>
                                                                                    </p>

                                                                                    <p>
                                                                                    <dl>
                                                                                        <dt>Designation</dt>
                                                                                        <dd>- rferf</dd>
                                                                                    </dl>
                                                                                    </p>

                                                                                    <p>
                                                                                    <dl>
                                                                                        <dt>Company</dt>
                                                                                        <dd>- rferf</dd>
                                                                                    </dl>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-sm-4">col-sm-4</div>
                                                                            </div>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } else if ($row['type'] == 'rfq-m') { ?>
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rfq-m">
                                                                RFQ-M
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="rfq-m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">RFQ-M</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            ...
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } else if ($row['type'] == 'rfq') { ?>
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rfq">
                                                                RFQ
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="rfq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">RFQ</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            ...
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } else if ($row['type'] == 'rfv') { ?>
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rfv">
                                                                RFV
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="rfv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">RFV</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            ...
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php }
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <!-- <tr>
                                                        <td>Gold Package</td>
                                                        <td>&#8377; 958</td>
                                                        <td>Jobs</td>
                                                        <td>2 Days Ago</td>
                                                        <td><span class="badge badge-soft-pink">Expired</span></td>
                                                        <td>
                                                        <a href="#"><i class="mdi mdi-pencil text-secondary font-16"></i></a>
                                                        <a href="#"><i class="mdi mdi-delete-forever text-secondary font-16"></i></a>
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

            <!--catgory Modal Start--->
            <div class="modal fade bd-example-modal-md" id="catgory" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title m-0" id="catgory">Add Category</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!--end modal-header-->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row p-20">
                                                <div class="col-md-12">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected="">Package Type</option>
                                                        <option value="1">Jobs</option>
                                                        <option value="2">Talent Access</option>
                                                        <option value="3">e-Commerce</option>
                                                        <option value="3">Real Estate</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <div class="form-group"> <input class="form-control" type="text" placeholder="Package Title" id="title" name="title" required=""><br></div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="form-group col-md-8"> <input class="form-control" type="text" placeholder="Package Price" id="price" name="title" required=""><br></div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-5">

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Post Count</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group col-md-8"> <input class="form-control" type="text" placeholder="No of Posts" id="adtitle" name="title" required=""></div>
                                                    <div class="col-md-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1"> <small>Unlimited Post</small></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-5">

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Response Per Post</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group col-md-8"> <input class="form-control" type="text" placeholder="No of Response Allowed" id="adtitle" name="title" required=""></div>
                                                    <div class="col-md-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1"> <small>Unlimited Response</small></label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-5">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1"> Access to Response</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group col-md-8"> <input class="form-control" type="text" placeholder="No of Response Allowed" id="adtitle" name="title" required=""></div>
                                                    <div class="col-md-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1"> <small>Unlimited</small></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Package Description"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="form-group col-md-6">
                                                    <p>Start Date:</p>
                                                    <input type="date" placeholder="Start Date" id="" class="form-control" required="" name="sdate" placeholder="start dte">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <p>End Date:</p>
                                                    <input type="date" placeholder="End Date" id="Edate" class="form-control" name="edate">
                                                </div>
                                            </div>

                                            <div class="col-sm-12 text-end mt-2">
                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                <button type="submit" name="save" class="btn btn btn-primary btn-sm">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                    </div>
                    <!--end modal-content-->
                </div>
                <!--end modal-dialog-->
            </div>
            <!--end modal-->
            <!--Start Footer-->
            <!-- Footer Start -->
            <?php include 'footer.php'; ?>
            <!-- end Footer -->
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <?php
    //}
    ?>
    <!-- end page-wrapper -->
    <!-- Javascript  -->
    <script src="assets/plugins/datatables/simple-datatables.js"></script>
    <script src="assets/pages/datatable.init.js"></script>
    <!-- Javascript  -->
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
<!--end body-->

<script>
</script>


</html>