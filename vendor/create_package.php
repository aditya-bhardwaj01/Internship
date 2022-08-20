<?php
session_start();
// if (!isset($_SESSION['admin_id'])) {
//     header('Location: admin_login');
// }
include '../config/connection.php';

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
</head>

<body id="body" class="dark-sidebar">
    <!-- leftbar-menu -->
    <?php include '../menu.php'; ?>
    <!-- end left-sidenav-->
    <!-- end leftbar-menu-->

    <!-- Top Bar Start -->
    <!-- Top Bar Start -->
    <?php include '../top-bar.php'; ?>
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
                                <h4 class="card-title">Package Details </h4>
                                <button type="button" class="btn btn-sm btn-outline-primary my-2 mx-2" style="float:right;" data-bs-toggle="modal" data-bs-target="#catgory">+ Add Package</button>

                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="datatable_1">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Package Title</th>
                                                <th>Package Price</th>
                                                <th>Package Type </th>
                                                <th>Posted Date </th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM vendor_packages WHERE site_id=$this_site_id";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr id="<?php echo $row['id']; ?>">
                                                    <td><?php echo htmlspecialchars(
                                                            $row['package_title']
                                                        ); ?></td>
                                                    <td>&#8377; <?php echo htmlspecialchars($row['package_price']) ?></td>
                                                    <td>
                                                        <?php
                                                        echo htmlspecialchars($row['package_type']);
                                                        ?>

                                                    </td>
                                                    <td><?php
                                                        echo agoTime($row['created_date']); ?></td>
                                                    <td>
                                                        <?php $sta = htmlspecialchars($row['status']);
                                                        if ($sta == 1) { ?>
                                                            <span class="badge badge-soft-success">Active</span>
                                                    </td> <?php } elseif ($sta == 0) { ?>
                                                    <span class="badge badge-soft-pink">Inactive</span></td>
                                                <?php } ?>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#update<?php echo $row['id'] ?>"><i class="mdi mdi-pencil text-secondary font-16"></i></a>
                                                    <input type="hidden" id="delete_pkg" class="delete_pkg" name="delete_pkg" value="<?php echo htmlspecialchars($row['id']); ?>">
                                                    <a a href="javascript:void(0)" class="delete"><i class="mdi mdi-delete-forever text-secondary font-16"></i></a>
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

                <?php
                $sql = "SELECT * FROM vendor_packages WHERE site_id=$this_site_id";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <div class="modal fade bd-example-modal-md" id="update<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title m-0" id="update">Update Package</h6>
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
                                                            <input type="hidden" name="up_uni" id="up_uni" value="1">
                                                            <select class="form-select" id="up_pkg_type<?php echo htmlspecialchars($row['id']) ?>" name="up_pkg_type" aria-label="Default select example">
                                                                <option value="<?php echo htmlspecialchars($row['package_type']) ?>"><?php echo htmlspecialchars($row['package_type']) ?></option>
                                                                <option>Package Type</option>
                                                                <option value="Jobs">Jobs</option>
                                                                <option value="Talent Access">Talent Access</option>
                                                                <option value="e-Commerce">e-Commerce</option>
                                                                <option value="Real Estate">Real Estate</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 mt-3">
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" placeholder="Package Title" id="up_pkg_title<?php echo htmlspecialchars($row['id']) ?>" name="up_pkg_title" required="" value="<?php echo htmlspecialchars($row['package_title']) ?>"><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <input class="form-control" type="number" placeholder="Package Price" id="up_pkg_price<?php echo htmlspecialchars($row['id']) ?>" name="up_pkg_price" required="" value="<?php echo htmlspecialchars($row['package_price']) ?>"><br>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-5">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1">Post Count</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="form-group col-md-8">
                                                            <input class="form-control" type="text" placeholder="No of Posts" id="up_post_count<?php echo htmlspecialchars($row['id']) ?>" name="up_post_count" required="" value="<?php echo htmlspecialchars($row['no_of_posts']) ?>">
                                                        </div>
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
                                                        <div class="form-group col-md-8">
                                                            <input class="form-control" type="text" placeholder="No of Response Allowed" value="<?php echo htmlspecialchars($row['response_per_post']) ?>" id="up_response_no<?php echo htmlspecialchars($row['id']) ?>" name="up_response_no" required="">
                                                        </div>
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
                                                        <div class="form-group col-md-8">
                                                            <input class="form-control" type="text" placeholder="No of Response Access" value="<?php echo htmlspecialchars($row['access_to_response']) ?>" id="up_response_access<?php echo htmlspecialchars($row['id']) ?>" name="up_response_access" required="">
                                                        </div>
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
                                                        <textarea class="form-control" id="up_pkg_desc<?php echo htmlspecialchars($row['id']) ?>" name="up_pkg_desc" rows="3" placeholder="Package Description"><?php echo htmlspecialchars($row['package_description']) ?>
                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="form-group col-md-6">
                                                        <p>Start Date:</p>
                                                        <input type="date" placeholder="Start Date" id="up_sdate<?php echo htmlspecialchars($row['id']) ?>" class="form-control" required="" name="up_sdate" value="<?php echo htmlspecialchars($row['start_date']) ?>" placeholder="start dte">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <p>End Date:</p>
                                                        <input type="date" placeholder="End Date" id="up_edate<?php echo htmlspecialchars($row['id']) ?>" value="<?php echo htmlspecialchars($row['end_date']) ?>" class="form-control" name="up_edate">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 text-end mt-2">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" id="" name="update_pkg" class="btn btn btn-primary btn-sm update_pkg" data-id="<?php echo $row['id'] ?>">Update</button>
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

        <?php } ?>

        </div><!-- container -->
    </div>

    <!-- ####################################################################### -->
    <div class="modal fade bd-example-modal-md" id="catgory" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="catgory">Add Package</h6>
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
                                            <input type="hidden" name="uni" id="uni" value="1">
                                            <select class="form-select" id="pkg_type" name="pkg_type" aria-label="Default select example">
                                                <option selected="">Package Type</option>
                                                <option value="Jobs">Jobs</option>
                                                <option value="Talent Access">Talent Access</option>
                                                <option value="e-Commerce">e-Commerce</option>
                                                <option value="Real Estate">Real Estate</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Package Title" id="pkg_title" name="pkg_title" required=""><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <input class="form-control" type="text" placeholder="Package Price" id="pkg_price" name="pkg_price" required=""><br>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" onchange="valueChanged()" type="checkbox" id="showpost" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Post Count</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="posts" style="display: none">
                                        <div class="form-group col-md-8" id="nopost">
                                            <input class="form-control" type="text" placeholder="No of Posts" id="post_count" name="post_count" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="unipost" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1"> <small>Unlimited Post</small></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" onchange="valueChanged1()" id="showres" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Response Per Post</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="responses" style="display: none">
                                        <div class="form-group col-md-8" id="nores">
                                            <input class="form-control" type="text" placeholder="No of Response Allowed" id="response_no" name="response_no" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="no_res" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1"> <small>Unlimited Response</small></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" onchange="valueChanged2()" id="showacc" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1"> Access to Response</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="accesses" style="display: none">
                                        <div class="form-group col-md-8" id="no_acc">
                                            <input class="form-control" type="text" placeholder="No of Access Response Allowed" id="response_access" name="response_access" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="uniacc" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1"> <small>Unlimited</small></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="">
                                        <textarea class="form-control" id="pkg_desc" name="pkg_desc" rows="3" placeholder="Package Description">
                                            </textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="form-group col-md-6">
                                        <p>Start Date:</p>
                                        <input type="date" placeholder="Start Date" id="sdate" class="form-control" required="" name="sdate" placeholder="start dte">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p>End Date:</p>
                                        <input type="date" placeholder="End Date" id="edate" class="form-control" name="edate">
                                    </div>
                                </div>
                                <div class="col-sm-12 text-end mt-2">
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" id="add_pkg" name="add_pkg" class="btn btn btn-primary btn-sm">Save</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div>
        <!--end modal-content-->
    </div>
    </div>
    <!-- ####################################################################### -->
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
    </div>
    <!-- ####################################################################### -->
    <!--end Rightbar/offcanvas-->
    <!--end Rightbar-->

    <!--Start Footer-->
    <!-- Footer Start -->
    <?php include '../footer.php'; ?>
    <!-- end Footer -->
    <!--end footer-->
    </div>
    <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
    <!-- Javascript  -->
    <script src="../assets/plugins/datatables/simple-datatables.js"></script>
    <script src="../assets/pages/datatable.init.js"></script>
    <!-- Javascript  -->
    <!-- App js -->
    <script src="../assets/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $("#unipost").on("change", function() {
                if ($(this).is(":checked")) {
                    $("#nopost").fadeOut();
                } else {
                    $("#nopost").fadeIn();
                }
            })

            $("#no_res").on("change", function() {
                if ($(this).is(":checked")) {
                    $("#nores").fadeOut();
                } else {
                    $("#nores").fadeIn();
                }
            })

            $("#uniacc").on("change", function() {
                if ($(this).is(":checked")) {
                    $("#no_acc").fadeOut();
                } else {
                    $("#no_acc").fadeIn();
                }
            })
            $('.delete').click(function(e) {
                e.preventDefault();
                var deleteid = $(this).closest("tr").find('.delete_pkg').val();
                console.log(deleteid);
                Swal.fire({
                    title: 'Do you want to delete the record?',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: `Delete`,
                    denyButtonText: `Don't delete`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "create_package_helper.php",
                            data: {
                                "delete_btn_set": 1,
                                "deleteid": deleteid,
                            },
                            success: function(response) {
                                Swal.fire('Delete!', '', 'success').then((result) => {
                                    location.reload();
                                });
                            }
                        });
                    } else if (result.isDenied) {
                        Swal.fire('Not deleted', '', 'info')
                    }
                });
            });


            $("#add_pkg").click(function() {
                var pkg_type = $("#pkg_type").val();
                var pkg_title = $("#pkg_title").val();
                var pkg_price = $("#pkg_price").val();
                var no_of_post = "";
                if ($('#showpost').is(":checked")) {

                    if ($("#unipost").is(":checked")) {
                        no_of_post = '1';
                    } else {
                        no_of_post = $("#post_count").val();
                    }
                    console.log(no_of_post);
                }
                //$("#post_count").val();
                var pkg_desc = $("#pkg_desc").val();
                var response_no = "";
                if ($('#showres').is(":checked")) {

                    if ($("#no_res").is(":checked")) {
                        response_no = '1';
                    } else {
                        response_no = $("#response_no").val();
                    }
                    console.log(response_no);
                }
                var response_access = "";
                if ($('#showacc').is(":checked")) {

                    if ($("#uniacc").is(":checked")) {
                        response_access = '1';
                    } else {
                        response_access = $("#response_access").val();
                    }
                    console.log(response_access);
                }
                var sdate = $("#sdate").val();
                var edate = $("#edate").val();
                $.ajax({
                    type: "POST",
                    url: "create_package_helper.php",
                    data: {
                        uni: 1,
                        pkg_type: pkg_type,
                        pkg_title: pkg_title,
                        pkg_price: pkg_price,
                        no_of_post: no_of_post,
                        response_no: response_no,
                        response_access: response_access,
                        pkg_desc: pkg_desc,
                        sdate: sdate,
                        edate: edate,
                    },
                    beforeSend: function() {
                        console.log("send");
                    },
                    success: function(data) {
                        console.log(data);
                        Swal.fire('Added Successfully!', '', 'success').then((result) => {
                            location.reload();
                        });
                    },
                    error: function(data) {
                        console.log("error");
                    }
                });
            });

            $(".update_pkg").click(function() {
                var id = $(this).data('id');
                console.log(id);
                var update_title = $("#up_pkg_title" + id).val();
                var update_type = $("#up_pkg_type" + id).val();
                var update_price = $("#up_pkg_price" + id).val();
                var update_post = $("#up_post_count" + id).val();
                var update_response = $("#up_response_no" + id).val();
                var update_access = $("#up_response_access" + id).val();
                var update_desc = $("#up_pkg_desc" + id).val();
                var update_sdate = $("#up_sdate" + id).val();
                var update_edate = $("#up_edate" + id).val();
                console.log(update_title);

                $.ajax({
                    url: 'create_package_helper.php',
                    method: 'POST',
                    data: {
                        update_title: update_title,
                        update_type: update_type,
                        update_price: update_price,
                        update_post: update_post,
                        update_response: update_response,
                        update_access: update_access,
                        update_desc: update_desc,
                        update_sdate: update_sdate,
                        update_edate: update_edate,
                        up_uni: 1,
                        id: id,
                    },
                    beforeSend: function() {
                        console.log("update");
                    },
                    success: function(data) {
                        console.log(data);
                        Swal.fire('Updated Successfully!', '', 'success').then((result) => {
                            location.reload();
                        });
                    },
                    error: function(data) {
                        console.log("error");
                    }

                });
            })
        });

        function valueChanged() {
            if ($('#showpost').is(":checked"))
                $("#posts").show();
            else
                $("#posts").hide();
        }

        function valueChanged1() {
            if ($('#showres').is(":checked"))
                $("#responses").show();
            else
                $("#responses").hide();
        }

        function valueChanged2() {
            if ($('#showacc').is(":checked"))
                $("#accesses").show();
            else
                $("#accesses").hide();
        }
    </script>

</body>
<!--end body-->


</html>