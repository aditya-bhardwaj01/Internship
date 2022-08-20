<?php
session_start();
require_once "../config/connection.php";
include 'membership_n_package_processor.php';
require "../config/cloudinaryConfig.php";
if (getVendorID() == -1) {
    die;
}


$vid = $_SESSION['vendor_id'];
$user_type = "";
if (isset($_SESSION['admin_id']))
    $user_type = "ADMIN";
else if (isset($_SESSION['vendor_id']))
    $user_type = "VENDOR";

$flag = urlencode(base64_encode('saved'));

$show_sweet_alert = -1;
//echo $show_sweet_alert;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Saite - Name</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <link href="../assets/plugins/select/selectr.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/summernote/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.css" />
    <style type="text/css">
        .bootstrap-tagsinput {
            width: 100%;
            color: red;
        }

        .bootstrap-tagsinput .tag {
            color: black;
            background-color: gainsboro;
            padding: 4px;
            border-radius: 5px;
        }

        #formLoader {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            background: rgba(0, 0, 0, 0.75) no-repeat center center;
            z-index: 10000;
        }
    </style>

</head>

<body id="body" class="dark-sidebar">
    <!-- leftbar-tab-menu -->
    <?php require '../menu.php'; ?>
    <!-- end left-sidenav-->
    <!-- end leftbar-tab-menu-->

    <!-- Top Bar Start -->
    <!-- Top Bar Start -->
    <?php require '../top-bar.php'; ?>
    <!-- Top Bar End -->
    <!-- Top Bar End -->


    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <h5 class="me-auto my-0">Wolmart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body ">
                    <?php
                    $data = package_finder(1);
                    $mem = membership_finder();

                    echo ($mem['POST']['JOB'] + $data['POST']) . ' Jobs remaining';  ?>
                </div>
            </div>

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">

                            <div class="body-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: transparent; margin: 0;" bgcolor="transparent">
                                <div class="col-md-9 col-md-offset-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h4 class="card-title">Create Job</h4>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-header-->

                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label my-2">Job Category <small class="text-danger font-13">*</small></label>
                                                        <select class="form-select" id="category" name="job_categ">
                                                            <option>Select</option>
                                                            <?php
                                                            $qry = "SELECT DISTINCT * from categories WHERE site_id= $this_site_id AND category_type= 'main' AND marketplace_id = '1'";
                                                            $res = mysqli_query($conn, $qry);
                                                            if (!$res) {
                                                                errlog(mysqli_error($conn), $qry);
                                                            }
                                                            $data  = mysqli_fetch_all($res, MYSQLI_ASSOC);
                                                            $flag = 0;
                                                            foreach ($data as $row) {
                                                                if ($flag == 0) {
                                                            ?>
                                                                    <option value="null" selected>Select Category</option>
                                                                <?php
                                                                }
                                                                $flag++;
                                                                ?>
                                                                <option value="<?php echo $row['category_title'] ?>"><?php echo $row['category_title'] ?></option>
                                                            <?php
                                                            }

                                                            if ($flag == 0) {
                                                            ?>
                                                                <option value="null" selected>No Category found</option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label my-2">Job Industry <small class="text-danger font-13">*</small></label>
                                                        <select class="form-select" id="industry" name="job_industry">
                                                            <option value="">Select</option>
                                                            <?php
                                                            $qry = "SELECT DISTINCT * from job_industry WHERE site_id= $this_site_id";
                                                            $res = mysqli_query($conn, $qry);
                                                            $data  = mysqli_fetch_all($res, MYSQLI_ASSOC);
                                                            foreach ($data as $row) {

                                                            ?>

                                                                <option value="<?php echo $row['industry_image'] ?>"><?php echo htmlspecialchars($row['industry_image']) ?>
                                                                </option>

                                                            <?php } ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="row mb-3 mt-2">
                                                    <div class="col-md-12">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input place" name="place[]" type="checkbox" id="inlineCheckbox2" value="InOffice">
                                                            <label class="form-check-label" for="inlineCheckbox2">IN Office</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input place" name="place[]" type="checkbox" id="inlineCheckbox2" value="WFH">
                                                            <label class="form-check-label" for="inlineCheckbox2">Work From Home</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Job Title<small class="text-danger font-13">*</small></label>
                                                        <input type="text" name="job_title" class="form-control" id="job_title">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">No of Openings<small class="text-danger font-13">*</small></label>
                                                        <input type="number" name="openings" class="form-control" id="openings">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Job Validity<small class="text-danger font-13">*</small></label>
                                                    <div class="form-group">
                                                        <div class="input-group date" id="datetimepicker3">
                                                            <input type="number" name="validity" id="validity" placeholder="Validity (In Days)" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Department<small class="text-danger font-13">*</small></label>
                                                        <select class="form-select" id="department" name="department">
                                                            <option value="" selected="">Select Department</option>
                                                            <option value="HR">HR</option>
                                                            <option value="ADMIN">ADMIN</option>
                                                            <option value="ACCOUNTS">ACCOUNTS</option>
                                                            <option value="FINANCE">FINANCE</option>
                                                            <option value="MARKETING">MARKETING</option>
                                                            <option value="IT">IT</option>
                                                            <option value="OPERATIONS">OPERATIONS</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Position Level<small class="text-danger font-13">*</small></label>
                                                        <select class="form-select" id="position_level" name="position_level">
                                                            <option value="" selected="">Select Type</option>
                                                            <option value="Entry Level">Entry Level</option>
                                                            <option value="Junior Level">Junior Level</option>
                                                            <option value="Mid Management Level">Mid Management Level</option>
                                                            <option value="Senior Management Level">Senior Management Level</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <label class="form-label my-2">Salary<small class="text-danger font-13">*</small></label>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <select name="sal_min" id="min" class="form-select">
                                                            <option value="">Minimum Salary</option>
                                                            <option value="1000">1000</option>
                                                            <option value="2000">2000</option>
                                                            <option value="3000">3000</option>
                                                            <option value="4000">4000</option>
                                                            <option value="5000">5000</option>
                                                            <option value="6000">6000</option>
                                                            <option value="7000">7000</option>
                                                            <option value="8000">8000</option>
                                                            <option value="9000">9000</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <select name="sal_max" id="max" class="form-select">
                                                        <option value="">Maximum Salary</option>
                                                        <option value="100000">100000</option>
                                                        <option value="200000">200000</option>
                                                        <option value="300000">300000</option>
                                                        <option value="400000">400000</option>
                                                        <option value="500000">500000</option>
                                                        <option value="600000">600000</option>
                                                        <option value="700000">700000</option>
                                                        <option value="800000">800000</option>
                                                        <option value="900000">900000</option>

                                                    </select>
                                                </div>
                                                <div class="col-md-4 mt-3">
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox" name="show_publically" value="publically"> Do not Show Publically</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 my-3">
                                                <div class="mb-3">
                                                    <textarea class="form-control" rows="5" id="myTextarea" name="job_desc"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label my-2">Select Skills<small class="text-danger font-13">*</small></label>
                                                        <input type="text" class="form-control" name="keyskills" id="tags" aria-describedby="emailHelp" placeholder="key skills" style="color: black !important;" data-role="tagsinput">

                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                            <div class="form-group col-md-12 mt-10">
                                                <label class="form-label my-2">Perks<small class="text-danger font-13">*</small></label>
                                                <div class="row mt-2">
                                                    <div class="col-md-4">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input class="perks" type="checkbox" name="perks[]" value="5 days a week">5 days a week
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input class="perks" type="checkbox" name="perks[]" value="Informal dress code"> Informal dress code</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input class="perks" type="checkbox" name="perks[]" value="cab/Transportation facility">
                                                                Cab/Transportation facility</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input class="perks" type="checkbox" name="perks[]" value="Free snacks and beverages">
                                                                Free snacks and beverages</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input class="perks" type="checkbox" name="perks[]" value="Health Insurance">
                                                                Health Insurance</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input class="perks" type="checkbox" name="perks[]" value="Life Insurance">
                                                                Life Insurance</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--end row-->
                                            <div class="button-items mt-2">
                                                <button type="button" id="saveBtn" name="save" class="btn btn-primary"><i class="mdi mdi-check-all me-2"></i>Save</button>
                                            </div>
                                        </div>
                                        <!--end row-->


                                        <!--end form-->
                                    </div>

                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                        </div>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->


        </div><!-- container -->
        -
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
        <?php include '../footer.php'; ?>
        <!-- end Footer -->
        <!--end footer-->
    </div>
    <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <!-- App js -->

    <div id="formLoader">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="spinner-border text-primary" style="height: 10vh; width: 10vh;"></div>
            </div>
        </div>
    </div>

    <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/jquery.min.js"> </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <script src="../assets/plugins/summernote/summernote.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="../assets/pages/toast.init.js"></script>

    <script>
        var show_alert = '<?php echo $show_sweet_alert; ?>';

        if (show_alert == '0') {
            Swal.fire({
                title: 'Good job!',
                text: 'Your Job Details has Been Added Sucessfully!',
                icon: 'success',
                confirmButtonText: 'OK'
            })
        }
        $("#myTextarea").summernote({
            placeholder: 'Description'
        });

        $('#saveBtn').click(function() {
            if ($('#category').val() == '' || $('#category').val() == 'null') {
                Swal.fire("Category is mandatory", '', 'error');
                return;
            }
            if ($('#industry').val() == '' || $('#industry').val() == 'null') {
                Swal.fire("Industry is mandatory", '', 'error');
                return;
            }
            var fg1 = false;
            $('.place:checked').each(function() {
                fg1 = true;
            })
            if (fg1 === false) {
                Swal.fire("Select atleast 1 workplace type", '', 'error');
                return;
            }
            if ($('#job_title').val() == "") {
                Swal.fire("Job title is mandatory", '', 'error');
                return;
            }
            if ($('#openings').val() == "") {
                Swal.fire("Need to declare no of openings for this job", '', 'error');
                return;
            }
            if ($('#department').val() == "") {
                Swal.fire("Please select a department for which you are posting job", '', 'error');
                return;
            }
            if ($('#position_level').val() == "") {
                Swal.fire("Please select the postion level for which you are posting job", '', 'error');
                return;
            }
            if ($('#min').val() == "") {
                Swal.fire("Declare the minimum salary for this job", '', 'error');
                return;
            }
            if ($('#max').val() == "") {
                Swal.fire("Declare the maximum salary for this job", '', 'error');
                return;
            }
            if ($('#myTextarea').val() == "") {
                Swal.fire("Please provide some details about the job you are posting", '', 'error');
                return;
            }
            if ($('#tags').val() == "") {
                Swal.fire("Please add skills required for this job", '', 'error');
                return;
            }
            var fg2 = false;
            $('.perks:checked').each(function() {
                fg2 = true;
            })
            if (fg2 === false) {
                Swal.fire("Select atleast 1 perk provided by this job", '', 'error');
                return;
            }
            var category = $('#category').val();
            var industry = $('#industry').val();
            var place = [];
            $('.place').each(function() {
                if ($(this).is(':checked')) {
                    place.push($(this).val());
                }
            })
            place = place.toString();
            // console.log(place);
            var job_title = $('#job_title').val();
            var openings = $('#openings').val();
            var validity = $('#validity').val();
            var department = $('#department').val();
            var position_level = $('#position_level').val();
            var min = $('#min').val();
            var max = $('#max').val();
            var job_desc = $('#myTextarea').val();
            var skills = $('#tags').val();
            var perks = [];
            $('.perks').each(function() {
                if ($(this).is(':checked')) {
                    perks.push($(this).val());
                }
            })
            perks = perks.toString();
            console.log(perks);
            $.ajax({
                url: 'create-job-helper',
                method: 'post',
                data: {
                    insert: 1,
                    category: category,
                    industry: industry,
                    place: place,
                    job_title: job_title,
                    openings: openings,
                    validity: validity,
                    department: department,
                    position_level: position_level,
                    min: min,
                    max: max,
                    job_desc: job_desc,
                    skills: skills,
                    perks: perks,

                },
                beforeSend: function() {
                    // console.log("send");
                    $("#formLoader").css({
                        "display": "flex",
                    })
                },
                success: function(data) {
                    // console.log(data);
                    $("#formLoader").css({
                        "display": "none",
                    })
                    if (data.trim() == '1') {
                        Swal.fire({
                            title: 'Added!',
                            text: 'Your file has been added.',
                            icon: 'success',
                            confirmButtonText: 'OK'

                        }).then(() => {
                            if (user == 'ADMIN') {
                                window.location.href = "<?php echo $this_site_url . "/admin/"; ?>job-admin?s=" + flag
                            } else {
                                window.location.href = "job-vendor?s=" + flag
                            }
                        })
                    } else if (data.trim() == '-1') {
                        Swal.fire("Error", "You do not have any package or membership to post a job", "error");
                    }
                },
                error: function(data) {
                    console.log("error");
                }
            });
        });
        var flag = <?php echo $flag; ?>;
        var user = '<?php echo $user_type; ?>'
        console.log(user);
    </script>



</body>
<!--end body-->

</html>