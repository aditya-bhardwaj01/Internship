<?php
session_start();
if (!isset($_SESSION['vendor_id'])) {
    header("Location: vendor_login.php");
}

require "../config/connection.php";
require "../config/cloudinaryConfig.php";

$vid = $_SESSION['vendor_id'];

$show_sweet_alert = -1;
if (isset($_POST['save_data'])) {
    $category = realEscape($_POST['category']);
    $ini_type = '';
    if (isset($_POST["ini_type"])) {
        foreach ($_POST["ini_type"] as $key => $value) {

            $ini_type .= "," . $_POST["ini_type"][$key];
        }
    }
    $title = realEscape($_POST['ini_title']);
    $location = realEscape($_POST['location']);
    $desc = realEscape($_POST['ini_desc']);
    $ini_high = realEscape($_POST['ini_high']);
    $benefits = realEscape($_POST['benefits']);
    $tags = realEscape($_POST['tags']);
    $eligibility = realEscape($_POST['eli_cri']);
    $start_date = realEscape($_POST['start_date']);
    $end_date = realEscape($_POST['end_date']);
    $fee_type = realEscape($_POST['fee_type']);
    $paid_amt = '';
    $paid_type = '';
    if ($fee_type == 'Paid') {
        $paid_amt = realEscape($_POST['paid_amt']);
        $paid_type = realEscape($_POST['paid_type']);
    }
    $suitable = '';
    if (isset($_POST["suitable"])) {
        foreach ($_POST["suitable"] as $key => $value) {

            $suitable .= "," . $_POST["suitable"][$key];
        }
        }
    $posted_by = 'VENDOR';
    if (isset($_SESSION['admin_id'])) {
        $posted_by = 'ADMIN';
    }
    $terms = realEscape($_POST['terms']);
    $sql = "INSERT INTO `marketplace_initiatives`(`site_id`, `vendor_id`, `category`, `inititative_type`, `title`,`location`, `description`, `initiative_highlights`, `benefit`, `tags`, `suitable_for`, `additional_info`, `posted_by`, `created_date`, `eligibility_criteria`, `start_date`, `end_date`, `fee_type`, `paid_fee`, `paid_fee_type`) VALUES ('$this_site_id','$vid','$category','$ini_type','$title','$location','$desc','$ini_high','$benefits','$tags','$suitable','$terms','$posted_by','$curr_date','$eligibility','$start_date','$end_date','$fee_type','$paid_amt','$paid_type')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $id = mysqli_insert_id($conn);
        if (isset($_FILES["floor_map"]["tmp_name"]) && $_FILES["floor_map"]["tmp_name"] != '') {
            $floor_map = $_FILES["floor_map"]["tmp_name"];
            $floor_map_url = getURL($floor_map);
            $query = "INSERT INTO `product_images`(`marketplace_id`,`main`,`product_id`,`type`,`image_url`)VALUES ('25','1','$id','BOUCHER','$floor_map_url')";
            $res = $conn->query($query);
            if ($res) {
                echo "1";
            } else {
                errlog(mysqli_error($conn), $query);
            }
        }

        if (isset($_FILES["prop_vid"]["tmp_name"]) && $_FILES["prop_vid"]["tmp_name"] != '') {
            $prop_vid = $_FILES["prop_vid"]["tmp_name"];
            $prop_vid_url = getURL($prop_vid);
            $query = "INSERT INTO `product_images`(`marketplace_id`,`main`,`product_id`,`type`,`image_url`)VALUES ('25','1','$id','PROPOSAL','$prop_vid_url')";
            $res1 = $conn->query($query);
            if ($res1) {
                echo "1";
            } else {
                errlog(mysqli_error($conn), $query);
            }
        }

        if (isset($_FILES["main_image"]["tmp_name"]) && $_FILES["main_image"]["tmp_name"] != '') {
            $main_image = $_FILES["main_image"]["tmp_name"];
            $main_image_url = getURL($main_image);
            $query = "INSERT INTO `product_images`(`marketplace_id`,`main`,`product_id`,`type`,`image_url`)VALUES ('25','1','$id','IMAGE','$main_image_url')";
            $res3 = $conn->query($query);
            if ($res3) {
                echo "1";
            } else {
                errlog(mysqli_error($conn), $query);
            }
        }
        $main_image_url = '';
        if (isset($_FILES['productImage1']['tmp_name'])  &&  $_FILES['productImage1']['tmp_name'] != '') {
            $main_image_url = getURL($_FILES['productImage1']['tmp_name']);

            $qry = "INSERT INTO product_images (marketplace_id, main, product_id, type, image_url, created_date) VALUES (25, 0, $id, 'IMAGE', '$main_image_url', '$curr_date')";
            if (!mysqli_query($conn, $qry)) errlog(mysqli_error($conn), $qry);
        }
        if (isset($_FILES['productImage2']['tmp_name'])  &&  $_FILES['productImage2']['tmp_name'] != '') {
            $main_image_url = getURL($_FILES['productImage2']['tmp_name']);

            $qry = "INSERT INTO product_images (marketplace_id, main, product_id, type, image_url, created_date) VALUES (25, 0, $id, 'IMAGE', '$main_image_url', '$curr_date')";
            if (!mysqli_query($conn, $qry)) errlog(mysqli_error($conn), $qry);
        }
        if (isset($_FILES['productImage3']['tmp_name'])  &&  $_FILES['productImage3']['tmp_name'] != '') {
            $main_image_url = getURL($_FILES['productImage3']['tmp_name']);

            $qry = "INSERT INTO product_images (marketplace_id, main, product_id, type, image_url, created_date) VALUES (25, 0, $id, 'IMAGE', '$main_image_url', '$curr_date')";
            if (!mysqli_query($conn, $qry)) errlog(mysqli_error($conn), $qry);
        }
        if (isset($_FILES['productImage4']['tmp_name'])  &&  $_FILES['productImage4']['tmp_name'] != '') {
            $main_image_url = getURL($_FILES['productImage4']['tmp_name']);

            $qry = "INSERT INTO product_images (marketplace_id, main, product_id, type, image_url, created_date) VALUES (25, 0, $id, 'IMAGE', '$main_image_url', '$curr_date')";
            if (!mysqli_query($conn, $qry)) errlog(mysqli_error($conn), $qry);
        }
        if (isset($_FILES['productImage5']['tmp_name'])  &&  $_FILES['productImage5']['tmp_name'] != '') {
            $main_image_url = getURL($_FILES['productImage5']['tmp_name']);

            $qry = "INSERT INTO product_images (marketplace_id, main, product_id, type, image_url, created_date) VALUES (25, 0, $id, 'IMAGE', '$main_image_url', '$curr_date')";
            if (!mysqli_query($conn, $qry)) errlog(mysqli_error($conn), $qry);
        }
        if (isset($_FILES['productImage6']['tmp_name'])  &&  $_FILES['productImage6']['tmp_name'] != '') {
            $main_image_url = getURL($_FILES['productImage6']['tmp_name']);

            $qry = "INSERT INTO product_images (marketplace_id, main, product_id, type, image_url, created_date) VALUES (25, 0, $id, 'IMAGE', '$main_image_url', '$curr_date')";
            if (!mysqli_query($conn, $qry)) errlog(mysqli_error($conn), $qry);
        }

        $show_sweet_alert = 0;
        if (isset($_SESSION['admin_id'])) {
            header("Location: initatives-admin.php?s=" . urlencode(base64_encode("saved")));
        } else {
            header("Location: initatives-vendor.php?s=" . urlencode(base64_encode("saved")));
        }
    } else {
        errlog(mysqli_error($conn), $sql);
    }
}
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
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/plugins/select/selectr.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
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
    <!-- leftbar-menu -->
    <?php
    // include '../menu.php'; ?>
    <!-- end left-sidenav-->
    <!-- end leftbar-menu-->

    <!-- Top Bar Start -->
    <!-- Top Bar Start -->
    <?php
    // include '../top-bar.php'; ?>
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
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <!--end nav-item-->
                                    <li class="breadcrumb-item active">Form Advanced</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add New Initative</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <form id="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Selectr Components</h4>
                                    <p class="text-muted mb-0">Select is a jQuery based replacement for select boxes.
                                        It supports searching, remote data sets, and infinite scrolling of results.
                                    </p>
                                </div>
                                <!--end card-header-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="mb-3">Select Category</label>
                                            <select id="" name="category" class="form-control">
                                                <?php

                                                $qry = "SELECT * from categories where category_type = 'main' AND site_id = $this_site_id AND marketplace_id = '25'";
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
                                                    <option value="-1" selected>No Category found</option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div><!-- end col -->
                                        <div class="col-md-4">
                                            <label class="mb-3">Select Type</label>
                                            <select class="form-control ini_type" id="multiSelect" name="ini_type[]">
                                                <option value="Event">Event</option>
                                                <option value="Charity">Charity</option>
                                                <option value="Sponsorship">Sponsorship</option>
                                                <option value="Digital Services">Digital Services</option>
                                                <option value="Digital Products">Digital Products</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                        <label class="mb-3">Select Marketplaces</label><br>
                                            <button class="btn btn-primary" type="button">
                                                Open Marketplace List +
                                            </button>
                                        </div>

                                    </div><!-- end row -->
                                </div><!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Initative Details</h4>
                                </div>
                                <!--end card-header-->
                                <div class="card-body">
                                    <div class="mb-3 mt-3">
                                        <input type="text" class="form-control" id="ini_title" name="ini_title" aria-describedby="emailHelp" placeholder="Initative Title">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                            anyone else.</small>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="location" id="location" aria-describedby="emailHelp" placeholder="location" style="color: black !important;" data-role="tagsinput">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                                with anyone else.</small>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <button type="button"class="btn btn-primary">
                                                Open Templates
                                            </button><br>
                                            <small id="emailHelp" class="form-text text-muted">Select Template for this initiative</small>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <textarea class="form-control" rows="5" id="ini_desc" name="ini_desc"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <textarea class="form-control" rows="5" id="ini_high" name="ini_high"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <textarea class="form-control" rows="5" id="benefits" name="benefits"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="tags" id="tags" aria-describedby="emailHelp" placeholder="Tags" style="color: black !important;" data-role="tagsinput">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                                with anyone else.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="eli_cri" id="eli_cri" placeholder="Eligibility Criteria">
                                        </div>
                                    </div>
                                    <h4 class="card-title mt-2">Initiative Schedule</h4>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-control" type="date" name="start_date" id="start_date">
                                                <label class="form-check-label">Start Date/Time</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-control" type="date" name="end_date" id="end_date">
                                                <label class="form-check-label">End Date/Time</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input suiselect" type="checkbox" name="enddatecheck" id="enddatecheck">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    No End Date
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <h4 class="card-title mt-2">Is the Initiative Paid or Free?</h4>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input fee_type" type="radio" name="fee_type" id="inline1" value="Free">
                                                <label class="form-check-label" for="inline1">Free</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input fee_type" type="radio" name="fee_type" id="inline2" value="Paid">
                                                <label class="form-check-label" for="inline2">Paid</label>
                                            </div>
                                        </div>
                                        <div class="row mt-2" id="paid_div" style="display:none;">
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="paid_amt" id="paid_amt" aria-describedby="emailHelp" placeholder="Fees Amount">
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-select paid_type" id="paid_type" name="paid_type">
                                                    <option value="null">Select Paid Type</option>
                                                    <option value="One Time Fee">One Time Fee</option>
                                                    <option value="Monthly Fee">Monthly Fee</option>
                                                    <option value="Yearly Fee">Yearly Fee</option>

                                                </select>
                                            </div>

                                        </div>

                                    </div>


                                    <h4 class="card-title mt-2">Commission</h4>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            Commision Type
                                            <select name="" id="" class="form-control">
                                                <option value="-1">Select Commission Type</option>
                                                <option value="%">Percent</option>
                                                <option value="FLAT">Flat</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check form-check-inline">
                                                <label for="">Commission AMount</label>
                                                <input class="form-control fee_type" type="number" name="" id="inline2" value="Paid" placeholder="Commission AMount">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select paid_type" id="paid_type" name="paid_type">
                                                <option value="null">Select Commission Paid On</option>
                                                <option value="">Daily</option>
                                                <option value="One Time Fee">Monthly</option>
                                                <option value="Monthly Fee">Quarterly</option>
                                                <option value="Yearly Fee">Yearly Fee</option>
                                            </select>
                                        </div>

                                    </div>
                                    <h4 class="card-title mt-3">Initative Suitable for</h4>
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input suiselect" type="checkbox" name="suitable[]" value="Individuals" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Individuals
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input suiselect" type="checkbox" name="suitable[]" value="Village Community" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Village Community
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input suiselect" type="checkbox" name="suitable[]" value="Business Houses" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Business Houses
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input suiselect" type="checkbox" name="suitable[]" value="Women Entrepreneurs" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Women Entrepreneurs
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input suiselect" type="checkbox" name="suitable[]" value="General Public" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    General Public
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input suiselect" type="checkbox" name="suitable[]" value="Others" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Others
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Additional Details</h4>
                                    <p class="text-muted mb-0">The tabs plugin also works with pills.</p>
                                </div>
                                <!--end card-header-->
                                <div class="card-body">
                                    <div class="row mt-5">
                                        <div class="mb-3">
                                            <textarea class="form-control" rows="5" id="terms" name="terms"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2 mx-2">
                                    <div class="col-sm-12 text-end">
                                        <input type="hidden" name="save_data" value="1">
                                        <button type="button" id="saveBtn" name="save_data" class="btn btn-de-primary px-4">Save Details </button>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Initative Banner</h4>
                                    <p class="text-muted mb-0">Upload High Defination Images with minimum size of 35px X
                                        350px</p>
                                </div>
                                <!--end card-header-->
                                <div class="card-body">
                                    <input accept="image/*" class="validateImage" name="main_image" type='file' id="imgInp" style="display:none;" onchange="previewImage(this)" data-previewon="#img1">
                                    <img id="img1" src="https://i.pinimg.com/originals/51/11/d8/5111d818140cbaef5459ce331151463f.gif" alt="your image" height="170" width="300" onclick="document.getElementById('imgInp').click()">
                                </div><!-- end card-body -->
                                <div class="card-header">
                                    <h4 class="card-title">Other Images</h4>
                                    <p class="text-muted mb-0">Upload High Defination Images with minimum size of 35px X
                                        350px</p>
                                </div>
                                <!--end card-header    -->
                                <div class=" card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <input type="file" name="productImage1" class="validateImage" id="productImage1" accept=".jpg,.png,.gif" style="display: none;" onchange="previewImage(this)" data-previewon="#productImage1Preview">
                                            <img id="productImage1Preview" src="https://i.dlpng.com/static/png/6825249_preview.png" height="50" width="50" onclick="document.getElementById('productImage1').click()">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="file" name="productImage2" class="validateImage" id="productImage2" accept=".jpg,.png,.gif" style="display: none;" onchange="previewImage(this)" data-previewon="#productImage2Preview">
                                            <img id="productImage2Preview" src="https://i.dlpng.com/static/png/6825249_preview.png" height="50" width="50" onclick="document.getElementById('productImage2').click()">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="file" name="productImage3" class="validateImage" id="productImage3" accept=".jpg,.png,.gif" style="display: none;" onchange="previewImage(this)" data-previewon="#productImage3Preview">
                                            <img id="productImage3Preview" src="https://i.dlpng.com/static/png/6825249_preview.png" height="50" width="50" onclick="document.getElementById('productImage3').click()">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="file" name="productImage4" class="validateImage" id="productImage4" accept=".jpg,.png,.gif" style="display: none;" onchange="previewImage(this)" data-previewon="#productImage4Preview">
                                            <img id="productImage4Preview" src="https://i.dlpng.com/static/png/6825249_preview.png" height="50" width="50" onclick="document.getElementById('productImage4').click()">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="file" name="productImage5" class="validateImage" id="productImage5" accept=".jpg,.png,.gif" style="display: none;" onchange="previewImage(this)" data-previewon="#productImage5Preview">
                                            <img id="productImage5Preview" src="https://i.dlpng.com/static/png/6825249_preview.png" height="50" width="50" onclick="document.getElementById('productImage5').click()">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="file" name="productImage6" class="validateImage" id="productImage6" accept=".jpg,.png,.gif" style="display: none;" onchange="previewImage(this)" data-previewon="#productImage6Preview">
                                            <img id="productImage6Preview" src="https://i.dlpng.com/static/png/6825249_preview.png" height="50" width="50" onclick="document.getElementById('productImage6').click()">
                                        </div>


                                    </div>
                                </div>
                                <div class="card-header">
                                    <h4 class="card-title">Other Information Documents</h4>
                                    <p class="text-muted mb-0">Upload High Defination Images with minimum size of 35px X
                                        350px</p>
                                </div>
                                <!--end card-header-->
                                <div class="file-box-content">
                                    <div class="file-box">
                                        <a href="#" class="download-icon-link">
                                            <i class="las la-download file-download-icon"></i>
                                        </a>
                                        <div class="text-center">
                                            <i class="lar la-file-alt text-primary"></i>
                                            <h6 class="text-truncate"> Broucher</h6>
                                            <small class="text-muted">06 March 2021 / 5MB</small><br>
                                            <input accept="image/*,application/pdf" name="floor_map" type='file' id="floor_map" style="display:none;" onchange="previewImage(this)" data-previewon="#bouc">
                                            <img id="bouc" src="https://i.pinimg.com/originals/51/11/d8/5111d818140cbaef5459ce331151463f.gif" alt="your image" onclick="document.getElementById('floor_map').click()" height="80" width="80">

                                        </div>
                                    </div>
                                    <div class="file-box">
                                        <a href="#" class="download-icon-link">
                                            <i class="las la-download file-download-icon"></i>
                                        </a>
                                        <div class="text-center">
                                            <i class="lar la-file-video text-primary"></i>
                                            <h6 class="text-truncate">Partnership Proposal</h6>
                                            <small class="text-muted">06 March 2021 / 5MB</small><br>
                                            <input accept="" name="prop_vid" type='file' id="prop_vid" style="display:none;" onchange="previewImage(this)" data-previewon="#bouc1">
                                            <img id="bouc1" src="https://i.pinimg.com/originals/51/11/d8/5111d818140cbaef5459ce331151463f.gif" alt="your image" onclick="document.getElementById('prop_vid').click()" height="80" width="80">

                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div> <!-- end row -->

                    </div><!-- container -->
                </form>

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
                <?php
                // include 'footer.php'; ?>
                <!-- end Footer -->
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->
        <div id="formLoader">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="spinner-border text-primary" style="height: 10vh; width: 10vh;"></div>
                </div>
            </div>
        </div>

        <!-- Javascript  -->
        <script src="../assets/plugins/select/selectr.min.js"></script>

        <script src="../assets/pages/forms-advanced.js"></script>
        <!-- App js -->
        <script src="../assets/js/app.js"></script>
        <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="../assets/js/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
        <script src="../assets/plugins/summernote/summernote.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
            $(document).ready(function() {

                $("#enddatecheck").on("change", function() {
                    //alert("Please select");
                    if ($("#enddatecheck").is(":checked")) {
                        $("#end_date").val('');
                    }
                })
            })
            $("#ini_desc").summernote({
                placeholder: "Initatives Description",
            });
            $("#ini_high").summernote({
                placeholder: "Initatives Highlights",
            });
            $("#benefits").summernote({
                placeholder: "Benefits For Partners",
            });
            $("#terms").summernote({
                placeholder: "Terms & Conditions",
            });
            var show_alert = '<?php echo $show_sweet_alert; ?>';

            if (show_alert == '0') {
                Swal.fire({
                    title: 'Good job!',
                    text: 'Your Initatives Details has Been Added Sucessfully!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                })
            }



            function previewImage(th) {
                // console.log("call") ;
                var targetID = $(th).data("previewon");

                var fileExtension = ['png', 'jpeg', 'jpg', 'gif'];
                if ($.inArray($(th).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Only .jpeg, .png, .jpg, and .gif formats are allowed.',
                        showConfirmButton: true
                    })
                    th.value = '';
                } else {
                    var imgsrc = URL.createObjectURL(event.target.files[0]);
                    $(targetID).attr('src', imgsrc);
                }
            }
            $(".fee_type").on("change", function() {
                if ($(this).val() == 'Paid') {
                    $("#paid_div").fadeIn();
                } else {
                    $("#paid_div").fadeOut();
                }

            })

            $("#saveBtn").on("click", function() {
                if ($('#default').val() == '' || $('#default').val() == 'null') {
                    Swal.fire("Category is mandatory", '', 'error');
                    return;

                }
                if ($('.ini_type').val() == '') {
                    Swal.fire(" Select Initiative type", '', 'error');
                    return;

                }
                if ($('#ini_title').val() == '') {
                    Swal.fire("Please Add Title", '', 'error');
                    return;
                }
                if ($('#ini_desc').val() == '') {
                    Swal.fire("Please Add Description", '', 'error');
                    return;
                }
                if ($('#ini_high').val() == '') {
                    Swal.fire("Please Add Highlights", '', 'error');
                    return;
                }
                if ($('#benefits').val() == '') {
                    Swal.fire("Please Add Benefits for Partners", '', 'error');
                    return;
                }
                if ($('#tags').val() == '') {
                    Swal.fire("Please Add Tags", '', 'error');
                    return;
                }
                var flag = false;
                $('.suiselect:checked').each(function() {
                    flag = 'true';

                })
                if (flag === false) {
                    Swal.fire("Select atleast 1 Suitable for", '', 'error');
                    return;
                }
                if ($('#terms').val() == '') {
                    Swal.fire("Please Add Additional Details", '', 'error');
                    return;
                }
                if ($('#imgInp').val() == '') {
                    Swal.fire("Main Image is Complusory", '', 'error');
                    return;
                }

                $("#formLoader").css({
                    "display": "flex",
                })
                $("#form1").trigger("submit");
            })
        </script>

</body>
<!--end body-->


</html>