<?php
session_start();

include '../config/connection.php';

if (getVendorID() == -1) {

    die;
}

include 'membership_n_package_processor.php';



$vid = $_SESSION['vendor_id'];

?>

<!DOCTYPE html>

<html lang="en">



<head>





    <meta charset="utf-8" />

    <title>Site_Name</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />

    <meta content="" name="author" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />



    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <link href="../assets/plugins/select/selectr.min.css" rel="stylesheet" type="text/css" />

    <link href="../assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <link href="../assets/plugins/huebee/huebee.min.css" rel="stylesheet" type="text/css" />

    <link href="../assets/plugins/datepicker/datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

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

    <!-- <?php include '../menu.php'; ?> -->

    <!-- end left-sidenav-->

    <!-- end leftbar-tab-menu-->



    <!-- Top Bar Start -->

    <!-- Top Bar Start -->

    <!-- <?php include '../top-bar.php'; ?> -->

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

                            <h4 class="page-title">Job Manager</h4>

                        </div>

                        <!--end page-title-box-->

                    </div>

                    <!--end col-->

                </div>

                <!-- end page title end breadcrumb -->

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="row">

                                <div class="col">

                                    <a href="create-job"><button type="button" class="btn btn-sm btn-outline-primary my-2 mx-2" style="float:right;">+ Add Job</button></a>

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

                                                <th>Application Status</th>

                                                <th>Status</th>

                                                <th>Response</th>

                                                <th>Share</th>

                                                <th>Actions</th>

                                            </tr>

                                        </thead>

                                        <?php

                                        $data = package_finder(1);

                                        $no_of_response = $data['ACCESS']; // no of access



                                        $sql = "SELECT *, created_date + INTERVAL validity day as expiry_date from marketplace_jobs where site_id=$this_site_id and vendor_id = $vid ORDER BY created_date DESC";

                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {

                                            while ($row = mysqli_fetch_assoc($result)) {

                                                $vid = $row['vendor_id'];

                                                $qry = "SELECT id, validity, created_date, created_date + INTERVAL validity day as expiring_in FROM `purchased_packages` WHERE vendor_id = '$vid' AND site_id = '$this_site_id' ORDER BY expiring_in DESC LIMIT 1";
                                                $r = mysqli_query($conn, $qry);
                                                if (!$r) {
                                                    errlog(mysqli_error($conn), $qry);
                                                }

                                                $data = mysqli_fetch_assoc($r);
                                                if (isset($data['id'])) {
                                                    $last_date = new DateTime(date('Y-m-d H:i:s', strtotime($data['expiring_in'])));
                                                    $today = new DateTime($curr_date);
                                                    $expDays = date_diff($today, $last_date);
                                                    $expDaysMsg = " response(s) expiring in " . $expDays->d . " days";
                                                } else {
                                                    $expDaysMsg = " response(s) expired";
                                                }


                                                $q = "Select * from vendor where id='$vid'";

                                                $r = mysqli_query($conn, $q);

                                                $ro = mysqli_fetch_assoc($r);



                                                $id = $row['id'];

                                                $qy = "Select * from response where item_id='$id' AND marketplace_id = '1' ";

                                                $res = mysqli_query($conn, $qy);

                                                $count = mysqli_num_rows($res);






                                                $qy1 = "Select * from response where item_id='$id' AND marketplace_id = '1' AND status='0'";

                                                $res1 = mysqli_query($conn, $qy1);

                                                $count1 = mysqli_num_rows($res1);



                                                $qy2 = "Select * from response where item_id='$id' AND marketplace_id = '1' AND status='1'";

                                                $res2 = mysqli_query($conn, $qy2);

                                                $count2 = mysqli_num_rows($res2);



                                                $qy3 = "Select * from response where item_id='$id' AND marketplace_id = '1' AND status='2'";

                                                $res3 = mysqli_query($conn, $qy3);

                                                $count3 = mysqli_num_rows($res3);



                                                $qy4 = "Select * from response where item_id='$id' AND marketplace_id = '1' AND status='3'";

                                                $res4 = mysqli_query($conn, $qy4);

                                                $count4 = mysqli_num_rows($res4);



                                                $qy5 = "Select * from response where item_id='$id' AND marketplace_id = '1' AND status='4'";

                                                $res5 = mysqli_query($conn, $qy5);

                                                $count5 = mysqli_num_rows($res5);



                                                $qy6 = "Select * from response where item_id='$id' AND marketplace_id = '1' AND status='5'";

                                                $res6 = mysqli_query($conn, $qy6);

                                                $count6 = mysqli_num_rows($res6);



                                                $qy7 = "Select * from response where item_id='$id' AND marketplace_id = '1' AND status='6'";

                                                $res7 = mysqli_query($conn, $qy7);

                                                $count7 = mysqli_num_rows($res7);

                                        ?>



                                                <tbody>

                                                    <tr>

                                                        <td>

                                                            <img src="<?php echo $ro["company_logo"]; ?>" alt="" height="40">

                                                            <p class="d-inline-block align-middle mb-0">

                                                                <a href="#" class="d-inline-block align-middle mb-0 product-name fw-semibold"><?php echo htmlspecialchars($row["job_title"]); ?></a>

                                                                <br>

                                                                <span class="text-muted font-13 fw-semibold">Validity:

                                                                    <?php

                                                                    $date1 = $row['expiry_date'];


                                                                    $d = new DateTime($date1);

                                                                    $v = new DateTime($curr_date);;



                                                                    $diff = (date_diff($d, $v));

                                                                    if ($date1 >= $curr_date) {
                                                                        echo $diff->d . " days left";
                                                                    } else {
                                                                        echo "Expired" ;
                                                                    }

                                                                    ?>

                                                                </span>

                                                            </p>

                                                            <br>

                                                            <a href="#" class="font-12 text-primary">Posted By: <?php echo htmlspecialchars($ro["name"]); ?></a>

                                                            <br>

                                                            <?php

                                                            switch (strtoupper($row['age_label'])) {

                                                                case '0':

                                                                    echo '<span class="badge badge-soft-primary">None</span>';

                                                                    break;

                                                                case '1':

                                                                    echo '<span class="badge badge-soft-success">Featured</span>';

                                                                    break;

                                                                case '2':

                                                                    echo '<span class="badge badge-soft-purple">Sponsored</span>';

                                                                    break;

                                                                case '3':

                                                                    echo '<span class="badge badge-soft-warning">Promoted</span>';

                                                                    break;
                                                            }

                                                            ?>









                                                        </td>

                                                        <td><?php echo $row["job_category"]; ?></td>

                                                        <td>

                                                            <div class="form-group">

                                                                <ul class="list-inline">

                                                                    <li class="list-inline-item">

                                                                        <a href="short_job-response.php?id=<?= $row['id'] ?>&status=1" data-toggle="tooltip" title="Applied"><i class="las la-hand-point-up text-secondary font-16"></i></a><br><?= $count2 ?>

                                                                    </li>

                                                                    <li class="list-inline-item">

                                                                        <a href="short_job-response.php?id=<?= $row['id'] ?>&status=0" data-toggle="tooltip" title="Shortlisted"><i class="las la-filter text-secondary font-16"></i><br><?= $count1 ?>

                                                                    </li>

                                                                    <li class="list-inline-item">

                                                                        <a href="short_job-response.php?id=<?= $row['id'] ?>&status=2" data-toggle="tooltip" title="Screened"><i class="las la-phone-square text-secondary font-16"></i><br><?= $count3 ?>

                                                                    </li>

                                                                    <li class="list-inline-item">

                                                                        <a href="short_job-response.php?id=<?= $row['id'] ?>&status=3" data-toggle="tooltip" title="Interviewed"><i class="las la-headset text-secondary font-16"></i><br><?= $count4 ?>

                                                                    </li>

                                                                    <li class="list-inline-item">

                                                                        <a href="short_job-response.php?id=<?= $row['id'] ?>&status=4" data-toggle="tooltip" title="Hire"><i class="las la-heart text-secondary font-16"></i><br><?= $count5 ?>

                                                                    </li>

                                                                    <li class="list-inline-item">

                                                                        <a href="short_job-response.php?id=<?= $row['id'] ?>&status=5" data-toggle="tooltip" title="Not Interested"><i class="las la-ban text-secondary font-16"></i><br><?= $count6 ?>

                                                                    </li>

                                                                    <li class="list-inline-item">

                                                                        <a href="short_job-response.php?id=<?= $row['id'] ?>&status=6" data-toggle="tooltip" title="Onboard"><i class="las la-check-double text-secondary font-16"></i><br><?= $count7 ?>

                                                                    </li>

                                                                </ul>

                                                            </div>

                                                        </td>

                                                        <td>

                                                            <?php switch ($row['status']) {

                                                                case '0':

                                                            ?>

                                                                    <span class="badge badge-soft-warning">Pending for QC</span>

                                                                <?php

                                                                    break;

                                                                case '1':

                                                                ?>

                                                                    <span class="badge badge-soft-purple">Approved</span>

                                                                <?php

                                                                    break;

                                                                case '2':

                                                                ?>

                                                                    <span class="badge badge-soft-success">Assign for QC</span>

                                                                <?php

                                                                    break;

                                                                case '3':

                                                                ?>

                                                                    <span class="badge badge-soft-warning ">Suspended</span>

                                                            <?php

                                                                    break;
                                                            }

                                                            ?>







                                                        </td>

                                                        <td>

                                                            <a href="job-response.php?id=<?= $row['id'] ?>">
                                                                <h6 class="text-dark mt-0 mb-2 d-inline">
                                                                    <?php echo $count ?>
                                                                </h6>

                                                                <span>
                                                                    <?php echo $expDaysMsg ?>
                                                                </span>
                                                            </a>

                                                        </td>

                                                        <td>

                                                            <div class="float-end">

                                                                <div class="dropdown d-inline-block">

                                                                    <a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                                                                        <i class="ti ti-share font-18 text-muted"></i>

                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1">

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

                                                                        <i class="las la-ellipsis-v font-24 text-muted"></i>

                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1">

                                                                        <a class="dropdown-item edit_btn" href="#" id="btn_edit" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id'] ?>">Edit Jobs</a>

                                                                        <input type="hidden" class="delete_id_value" value="<?php echo $id ?>">

                                                                        <a class="dropdown-item delete" href="javascript:void(0)">Delete Job</a>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </td>

                                                    </tr>



                                                </tbody>

                                        <?php }
                                        } else {

                                            echo 'No data found';
                                        } ?>

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

                $sql = "Select * from marketplace_jobs where site_id=$this_site_id and vendor_id = $vid";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {

                    while ($r = mysqli_fetch_assoc($result)) {





                ?>

                        <div class="modal fade" id="edit<?php echo $r['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                            <div class="modal-dialog" role="document">

                                <div class="modal-content">

                                    <div class="modal-header">

                                        <h5 class="modal-title" id="exampleModalLabel">Update job</h5>

                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">

                                            <span aria-hidden="true">&times;</span>

                                        </button>

                                    </div>

                                    <div class="modal-body">

                                        <div class="card-body">



                                            <div class="row">

                                                <div class="col-md-6">

                                                    <div class="form-group">

                                                        <label class="form-label my-2">Job Category <small class="text-danger font-13">*</small></label>

                                                        <select class="form-select" id="category<?php echo $r['id'] ?>" name="job_categ">



                                                            <?php

                                                            $cate = htmlspecialchars($r['job_category']);

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

                                                                <option value="<?php echo $row['category_title'] ?>" <?php if ($row['category_title'] == $cate)  echo "selected"; ?>><?php echo $row['category_title'] ?></option>

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

                                                        <select class="form-select" id="industry<?php echo $r['id'] ?>" name="job_industry">

                                                            <option value="">Select</option>

                                                            <?php

                                                            $industry = htmlspecialchars($r['industry']);



                                                            $qry = "SELECT DISTINCT * from job_industry WHERE site_id= $this_site_id";

                                                            $res = mysqli_query($conn, $qry);

                                                            $data  = mysqli_fetch_all($res, MYSQLI_ASSOC);

                                                            foreach ($data as $row) { //call   2 min ok



                                                            ?>



                                                                <option value="<?php echo $row['industry_image'] ?>" data-d="<?php echo $industry ?>" <?php if (htmlspecialchars($row['industry_image']) == $industry)  echo "selected"; ?>> <?php echo htmlspecialchars($row['industry_image']) ?>

                                                                </option>



                                                            <?php } ?>



                                                        </select>

                                                    </div>

                                                </div>

                                                <!--end col-->

                                                <div class="row mb-3 mt-2">

                                                    <div class="col-md-12">

                                                        <?php $place = explode(",", $r['work_type']) ?>

                                                        <div class="form-check form-check-inline">

                                                            <input class="form-check-input place" name="place[]" type="checkbox" id="workplace<?php echo $r['id'] ?>" value="InOffice" <?php if (!isset($r['work_type'])  ||  $r['work_type'] == '' || $r['work_type'] == 'InOffice') {
                                                                                                                                                                                        }
                                                                                                                                                                                        echo "checked='checked'" ?>>

                                                            <label class="form-check-label" for="inlineCheckbox2">IN Office</label>

                                                        </div>

                                                        <div class="form-check form-check-inline">

                                                            <input class="form-check-input place" name="place[]" type="checkbox" id="iworkplace<?php echo $r['id'] ?>" value="WFH" <?php if (!isset($r['work_type'])  ||  $r['work_type'] == '' || $r['work_type'] == 'WFH')  echo "checked='checked'" ?>>

                                                            <label class="form-check-label" for="inlineCheckbox2">Work From Home</label>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-12">

                                                    <div class="form-group">

                                                        <label class="form-label">Job Title<small class="text-danger font-13">*</small></label>

                                                        <input type="text" name="job_title" class="form-control" id="job_title<?php echo $r['id'] ?>" value="<?php echo htmlspecialchars($r['job_title']); ?>">

                                                    </div>

                                                </div>

                                            </div>

                                            <!--end row-->

                                            <div class="row mt-3">

                                                <div class="col-md-6">

                                                    <div class="form-group">

                                                        <label class="form-label">No of Openings<small class="text-danger font-13">*</small></label>

                                                        <input type="number" name="openings" class="form-control" id="openings<?php echo $r['id'] ?>" value="<?php echo htmlspecialchars($r['num_opening']); ?>">

                                                    </div>

                                                </div>

                                                <div class="col-md-6">

                                                    <label class="form-label">Job Validity<small class="text-danger font-13">*</small></label>

                                                    <div class="form-group">

                                                        <div class="input-group date" id="datetimepicker3">

                                                            <?php $date = date('Y-m-d', strtotime($r['validity'])); ?>

                                                            <input type="date" name="validity" id="validity<?php echo $r['id'] ?>" placeholder="Valid Till" class="form-control" value="<?php echo $date; ?>">

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row mt-3">

                                                <div class="col-sm-6">

                                                    <div class="form-group">

                                                        <?php $depart = $r['department']; ?>

                                                        <label class="form-label">Department<small class="text-danger font-13">*</small></label>

                                                        <select class="form-select" id="department<?php echo $r['id'] ?>" name="department">

                                                            <option value="">Select Department</option>

                                                            <option value="HR" <?php if ($depart == "HR")  echo "selected";  ?>>HR</option>

                                                            <option value="ADMIN" <?php if ($depart == "ADMIN")  echo "selected";  ?>>ADMIN</option>

                                                            <option value="ACCOUNTS" <?php if ($depart == "ACCOUNTS")  echo "selected";  ?>>ACCOUNTS</option>

                                                            <option value="FINANCE" <?php if ($depart == "FINANCE")  echo "selected";  ?>>FINANCE</option>

                                                            <option value="MARKETING" <?php if ($depart == "MARKETING")  echo "selected";  ?>>MARKETING</option>

                                                            <option value="IT" <?php if ($depart == "IT")  echo "selected";  ?>>IT</option>

                                                            <option value="OPERATIONS" <?php if ($depart == "OPERATIONS")  echo "selected";  ?>>OPERATIONS</option>



                                                        </select>

                                                    </div>

                                                </div>

                                                <div class="col-sm-6">

                                                    <div class="form-group">

                                                        <?php $position = $r['position_lvl']; ?>

                                                        <label class="form-label">Position Level<small class="text-danger font-13">*</small></label>

                                                        <select class="form-select" id="position_level<?php echo $r['id'] ?>" name="position_level">

                                                            <option value="">Select Type</option>

                                                            <option value="Entry Level" <?php if ($position == "Entry Level")  echo "selected";  ?>>Entry Level</option>

                                                            <option value="Junior Level" <?php if ($position == "Junior Level")  echo "selected";  ?>>Junior Level</option>

                                                            <option value="Mid Management Level" <?php if ($position == "Mid Management Level")  echo "selected";  ?>>Mid Management Level</option>

                                                            <option value="Senior Management Level" <?php if ($position == "Senior Management Level")  echo "selected";  ?>>Senior Management Level</option>

                                                        </select>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row mt-3">

                                                <label class="form-label my-2">Salary<small class="text-danger font-13">*</small></label>



                                                <div class="col-sm-6">

                                                    <div class="form-group">

                                                        <?php $min_sal = $r['sal_min']; ?>

                                                        <select name="sal_min" id="min<?php echo $r['id'] ?>" class="form-select">

                                                            <option value="">Minimum Salary</option>

                                                            <option value="1000" <?php if ($min_sal == "1000")  echo "selected"; ?>>1000</option>

                                                            <option value="2000" <?php if ($min_sal == "2000")  echo "selected"; ?>>2000</option>

                                                            <option value="3000" <?php if ($min_sal == "3000")  echo "selected"; ?>>3000</option>

                                                            <option value="4000" <?php if ($min_sal == "4000")  echo "selected"; ?>>4000</option>

                                                            <option value="5000" <?php if ($min_sal == "5000")  echo "selected"; ?>>5000</option>

                                                            <option value="6000" <?php if ($min_sal == "6000")  echo "selected"; ?>>6000</option>

                                                            <option value="7000" <?php if ($min_sal == "7000")  echo "selected"; ?>>7000</option>

                                                            <option value="8000" <?php if ($min_sal == "8000")  echo "selected"; ?>>8000</option>

                                                            <option value="9000" <?php if ($min_sal == "9000")  echo "selected"; ?>>9000</option>



                                                        </select>

                                                    </div>

                                                </div>

                                                <div class="col-sm-6">

                                                    <?php $max_sal = $r['sal_max']; ?>

                                                    <select name="sal_max" id="max<?php echo $r['id'] ?>" class="form-select">

                                                        <option value="">Maximum Salary</option>

                                                        <option value="100000" <?php if ($max_sal == "100000")  echo "selected"; ?>>100000</option>

                                                        <option value="200000" <?php if ($max_sal == "200000")  echo "selected"; ?>>200000</option>

                                                        <option value="300000" <?php if ($max_sal == "300000")  echo "selected"; ?>>300000</option>

                                                        <option value="400000" <?php if ($max_sal == "400000")  echo "selected"; ?>>400000</option>

                                                        <option value="500000" <?php if ($max_sal == "500000")  echo "selected"; ?>>500000</option>

                                                        <option value="600000" <?php if ($max_sal == "600000")  echo "selected"; ?>>600000</option>

                                                        <option value="700000" <?php if ($max_sal == "700000")  echo "selected"; ?>>700000</option>

                                                        <option value="800000" <?php if ($max_sal == "800000")  echo "selected"; ?>>800000</option>

                                                        <option value="900000" <?php if ($max_sal == "900000")  echo "selected"; ?>>900000</option>



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

                                                    <textarea class="form-control editor" rows="5" id="myTextarea<?php echo $r['id'] ?>" name="job_desc"><?php echo $r['job_desc']; ?></textarea>

                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-6">

                                                    <div class="form-group">

                                                        <label class="form-label my-2">Select Skills<small class="text-danger font-13">*</small></label>

                                                        <input type="text" class="form-control" name="keyskills" id="tags<?php echo $r['id'] ?>" aria-describedby="emailHelp" value="<?php echo $r['skills_required'] ?>" placeholder="key skills" style="color: black !important;" data-role="tagsinput">



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

                                                                <input class="perks" data-perk="<?php echo $r['id'] ?>" type="checkbox" name="perks[]" value="5 days a week" <?php if (!isset($r['perks'])  ||  $r['perks'] == '' || htmlspecialchars($r['perks']) == '5 days a week')  echo "checked='checked'" ?>>5 days a week

                                                            </label>

                                                        </div>

                                                    </div>



                                                    <div class="col-md-4">

                                                        <div class="checkbox">

                                                            <label>

                                                                <input class="perks" data-perk="<?php echo $r['id'] ?>" type="checkbox" name="perks[]" value="Informal dress code" <?php if (!isset($r['perks'])  ||  $r['perks'] == '' || $r['perks'] == 'Informal dress code')  echo "checked='checked'" ?>> Informal dress code</label>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-4">

                                                        <div class="checkbox">

                                                            <label>

                                                                <input class="perks" data-perk="<?php echo $r['id'] ?>" type="checkbox" name="perks[]" value="cab/Transportation facility" <?php if (!isset($r['perks'])  ||  $r['perks'] == '' || $r['perks'] == 'cab/Transportation facility')  echo "checked='checked'" ?>>

                                                                Cab/Transportation facility</label>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-4">

                                                        <div class="checkbox">

                                                            <label>

                                                                <input class="perks" data-perk="<?php echo $r['id'] ?>" type="checkbox" name="perks[]" value="Free snacks and beverages" <?php if (!isset($r['perks'])  ||  $r['perks'] == '' || $r['perks'] == 'Free snacks and beverages')  echo "checked='checked'" ?>>

                                                                Free snacks and beverages</label>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-4">

                                                        <div class="checkbox">

                                                            <label>

                                                                <input class="perks" data-perk="<?php echo $r['id'] ?>" type="checkbox" name="perks[]" value="Health Insurance" <?php if (!isset($r['perks'])  ||  $r['perks'] == '' || $r['perks'] == 'Health Insurance')  echo "checked='checked'" ?>>

                                                                Health Insurance</label>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-4">

                                                        <div class="checkbox">

                                                            <label>

                                                                <input class="perks" data-perk="<?php echo $r['id'] ?>" type="checkbox" name="perks[]" value="Life Insurance" <?php if (!isset($r['perks'])  ||  $r['perks'] == '' || $r['perks'] == 'Life Insurance')  echo "checked='checked'" ?>>

                                                                Life Insurance</label>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>





                                        </div>

                                    </div>

                                    <div class="modal-footer">

                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                        <button type="button" class="btn btn-primary update" data-id="<?php echo $r['id'] ?>">Update changes</button>

                                    </div>

                                </div>

                            </div>

                        </div>



                <?php }
                }  ?>



            </div><!-- container -->



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



            <!-- <?php include '../footer.php'; ?> -->



        </div>

    </div>





    <!-- Javascript  -->

    <!-- App js -->

    <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>

    <script src="../assets/js/app.js"></script>

    <script src="../assets/js/jquery.min.js"> </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

    <script src="../assets/plugins/summernote/summernote.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>



    <script>
        $("#myTextarea").summernote({

            placeholder: "Job Description",

        });

        $('.delete').click(function(e) {

            e.preventDefault();

            var deleteid = $(this).closest("tr").find('.delete_id_value').val();

            //console.log(deleteid);

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

                        url: "job-admin-helper.php",

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

            })



        })



        $('.update').click(function(e) {

            var id = $(this).data('id');

            console.log(id);

            var category = $('#category' + id).val();

            var industry = $('#industry' + id).val();

            var place = [];

            $('.place').each(function() {

                if ($(this).is(':checked')) {

                    place.push($(this).val());

                }

            })

            place = place.toString();

            console.log(place);

            var job_title = $('#job_title' + id).val();

            var openings = $('#openings' + id).val();

            var validity = $('#validity' + id).val();

            var department = $('#department' + id).val();

            var position_level = $('#position_level' + id).val();

            var min = $('#min' + id).val();

            var max = $('#max' + id).val();

            var job_desc = $('#myTextarea' + id).val();

            var skills = $('#tags' + id).val();

            $('.perks').each(function() {

                if ($(this).is(':checked')) {

                    perks.push($(this).val());

                }

            })

            perks = perks.toString();

            console.log(perks);
            console.log(place);

            $.ajax({

                url: 'job-vendor-helper.php',

                method: 'post',

                data: {

                    update: 1,

                    id: id,

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

                    console.log("send");

                    $("#formLoader").css({

                        "display": "flex",

                    })

                },

                success: function(data) {

                    console.log(data);

                    if (data.trim() == '1') {

                        $("#formLoader").css({

                            "display": "none",

                        })

                        Swal.fire({

                            title: 'Updated!',

                            text: 'Your file has been Updated.',

                            icon: 'success',

                            confirmButtonText: 'OK'



                        }).then(() => {

                            location.reload();

                        })

                    }

                },

                error: function(data) {

                    console.log("error");

                }

            });

        })
    </script>

</body>

<!--end body-->



</html>