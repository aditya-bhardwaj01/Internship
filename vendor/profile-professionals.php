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



    <link href="assets/plugins/tobii/tobii.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                        <li class="breadcrumb-item active">Profile</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Profile</h4>
                            </div>
                            <!--end page-title-box-->
                        </div>
                        <!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="met-profile">
                                        <div class="row">
                                            <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                                <div class="met-profile-main">
                                                    <?php
                                                    require_once 'config/connection.php';
                                                    $id = getVendorID();

                                                    $sql = "SELECT a.*, b.*, c.sub_cat_title FROM vendor a, marketplace_professionals b, prof_sub_cat c WHERE a.site_id = $this_site_id
                                                AND a.id = $id AND b.vendor_id = $id AND b.sub_cat_id=c.id";
                                                    $res = mysqli_query($conn, $sql);
                                                    if (!$res) {
                                                        errlog(mysqli_error($conn), $sql);
                                                    }

                                                    foreach ($res as $row) {
                                                    ?>
                                                        <div class="met-profile-main-pic">
                                                            <img src="<?php echo $row['profile_pic']; ?>" alt="" height="110" class="rounded-circle">
                                                            <span class="met-profile_main-pic-change">
                                                                <i class="fas fa-camera"></i>
                                                            </span>
                                                        </div>

                                                        <div class="met-profile_user-detail">
                                                            <h5 class="met-user-name"><?php echo $row['name']; ?></h5>




                                                            <p class="mb-0 met-user-name-post" id="displayRole"><span id="role-display"><?php echo $row['sub_cat_title']; ?></span>
                                                                <i onclick="setValue('role-display', 'roleInput')" class="fa fa-pencil toggleVisibility" data-onclick-hide="#displayRole" data-onclick-show="#inputRole"></i>
                                                            </p>
                                                            <span id="inputRole" style="display: none;">
                                                                <input type="text" value="" id="roleInput">
                                                                <i onclick="updateProfile('roleInput', <?php echo $id; ?>)" class="fa fa-check toggleVisibility saveInputData" data-source="#roleInput" data-target="#role-display" data-onclick-hide="#inputRole" data-onclick-show="#displayRole"></i>
                                                            </span>





                                                            <p class="mb-0 met-user-name-post" id="displayLocation"><span id="location-display"><?php echo $row['city'] . ', ' . $row['country']; ?></span>
                                                                <i onclick="setValue('location-display', 'locationInput')" class="fa fa-pencil toggleVisibility" data-onclick-hide="#displayLocation" data-onclick-show="#inputLocation"></i>
                                                            </p>
                                                            <span id="inputLocation" style="display: none;">
                                                                <input type="text" value="" id="locationInput">
                                                                <i onclick="updateProfile('locationInput', <?php echo $id; ?>)" class="fa fa-check toggleVisibility saveInputData" data-source="#locationInput" data-target="#location-display" data-onclick-hide="#inputLocation" data-onclick-show="#displayLocation"></i>
                                                            </span>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-4 ms-auto align-self-center">
                                                <ul class="list-unstyled personal-detail mb-0">


                                                    <?php
                                                    foreach ($res as $row) {
                                                    ?>
                                                        <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> phone </b> :
                                                            <p class="mb-0 met-user-name-post" id="displayPhone"><span id="phone-display"><?php echo $row['mobile']; ?></span>
                                                                <i onclick="setValue('phone-display', 'phoneInput')" class="fa fa-pencil toggleVisibility" data-onclick-hide="#displayPhone" data-onclick-show="#inputPhone"></i>
                                                            </p>
                                                            <span id="inputPhone" style="display: none;">
                                                                <input type="text" value="" id="phoneInput">
                                                                <i onclick="updateProfile('phoneInput', <?php echo $id; ?>)" class="fa fa-check toggleVisibility saveInputData" data-source="#phoneInput" data-target="#phone-display" data-onclick-hide="#inputPhone" data-onclick-show="#displayPhone"></i>
                                                            </span>
                                                        </li>

                                                        <li class="mt-2"><i class="las la-envelope mr-2 text-secondary font-22 align-middle mr-2"></i> <b> Email </b> :
                                                            <p class="mb-0 met-user-name-post" id="displayEmail"><span id="email-display"><?php echo $row['email']; ?></span>
                                                                <i onclick="setValue('email-display', 'emailInput')" class="fa fa-pencil toggleVisibility" data-onclick-hide="#displayEmail" data-onclick-show="#inputEmail"></i>
                                                            </p>
                                                            <span id="inputEmail" style="display: none;">
                                                                <input type="text" value="" id="emailInput">
                                                                <i onclick="updateProfile('emailInput', <?php echo $id; ?>)" class="fa fa-check toggleVisibility saveInputData" data-source="#emailInput" data-target="#email-display" data-onclick-hide="#inputEmail" data-onclick-show="#displayEmail"></i>
                                                            </span>
                                                        </li>

                                                        <li class="mt-2"><i class="las la-globe mr-2 text-secondary font-22 align-middle mr-2"></i> <b> Affiliaton </b> :
                                                            <p class="mb-0 met-user-name-post" id="displayaff"><span id="aff-display"><?php echo $row['affiliation']; ?></span>
                                                                <i onclick="setValue('aff-display', 'affInput')" class="fa fa-pencil toggleVisibility" data-onclick-hide="#displayaff" data-onclick-show="#inputaff"></i>
                                                            </p>
                                                            <span id="inputaff" style="display: none;">
                                                                <input type="text" value="" id="affInput">
                                                                <i onclick="updateProfile('affInput', <?php echo $id; ?>)" class="fa fa-check toggleVisibility saveInputData" data-source="#affInput" data-target="#aff-display" data-onclick-hide="#inputaff" data-onclick-show="#displayaff"></i>
                                                            </span>
                                                        </li>

                                                        <li class="mt-2"><i class="las la-globe mr-2 text-secondary font-22 align-middle mr-2"></i> <b> Afflation Number </b> :
                                                            <p class="mb-0 met-user-name-post" id="displayaffnum"><span id="affnum-display"><?php echo $row['affiliation_number']; ?></span>
                                                                <i onclick="setValue('affnum-display', 'affnumInput')" class="fa fa-pencil toggleVisibility" data-onclick-hide="#displayaffnum" data-onclick-show="#inputaffnum"></i>
                                                            </p>
                                                            <span id="inputaffnum" style="display: none;">
                                                                <input type="text" value="" id="affnumInput">
                                                                <i onclick="updateProfile('affnumInput', <?php echo $id; ?>)" class="fa fa-check toggleVisibility saveInputData" data-source="#affnumInput" data-target="#affnum-display" data-onclick-hide="#inputaffnum" data-onclick-show="#displayaffnum"></i>
                                                            </span>
                                                        </li>
                                                    <?php
                                                    }
                                                    ?>

                                                </ul>

                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4 align-self-center">
                                                <div class="row">
                                                    <div class="col-auto text-end border-end">
                                                        <button type="button" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm mb-2">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </button>
                                                        <p class="mb-0 fw-semibold">Facebook</p>
                                                        <h4 class="m-0 fw-bold">25k <span class="text-muted font-12 fw-normal">Followers</span></h4>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-auto">
                                                        <button type="button" class="btn btn-soft-info btn-icon-circle btn-icon-circle-sm mb-2">
                                                            <i class="fab fa-twitter"></i>
                                                        </button>
                                                        <p class="mb-0 fw-semibold">Twitter</p>
                                                        <h4 class="m-0 fw-bold">58k <span class="text-muted font-12 fw-normal">Followers</span></h4>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end f_profile-->
                                </div>
                                <!--end card-body-->
                                <div class="card-body p-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#Post" role="tab" aria-selected="true">Business Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Post2" role="tab" aria-selected="true">Expertse & Skills</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Gallery" role="tab" aria-selected="false">Business Documents</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Settings" role="tab" aria-selected="false"> Profile Settings</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane p-3 active" id="Post" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-8"> 
                                                    <h4 class="card-title">Busness Information</h4>
                                                    <div class="form-group mb-3 row">
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input id="business-name" class="form-control" type="text" value="" placeholder="Busness Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <textarea id="about-business" class="form-control" rows="5" id="bio" placeholder="About Business"></textarea>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="la la-globe"></i></span>
                                                                <input id="vendor-website" type="text" class="form-control" value=" https://mannatthemes.com/" placeholder="WebSiste">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input id="corporate-address" class="form-control" type="text" value="" placeholder="Coporate Address">
                                                        </div>
                                                    </div>

                                                    <!-- <div class="form-group mb-3 row">
                                                    <div class="col-lg-6 col-xl-6">
                                                        <select class="form-select">
                                                            <option>London</option>
                                                            <option>India</option>
                                                            <option>USA</option>
                                                            <option>Canada</option>
                                                            <option>Thailand</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <select class="form-select">
                                                            <option>London</option>
                                                            <option>India</option>
                                                            <option>USA</option>
                                                            <option>Canada</option>
                                                            <option>Thailand</option>
                                                        </select>
                                                    </div>
                                                </div> -->
                                                </div>
                                                <div class="col-md-3">

                                                    <label for="banner_image">
                                                        <h4>Store Banner</h4>
                                                    </label>
                                                    <div class="card-body">
                                                        <input accept="image/*" class="validateImage" name="banner_image" type='file' id="banner_image" style="display:none;" alt="banner_image" onchange="previewImage(this)" data-previewon="#banner">
                                                        <img id="banner" src="https://i.pinimg.com/originals/51/11/d8/5111d818140cbaef5459ce331151463f.gif" height="170" width="300" onclick="document.getElementById('banner_image').click()">
                                                    </div>

                                                    <!-- <label for="banner_image">
                                                        <h4>Store Banner</h4>
                                                    </label>
                                                    <div class="card-body">
                                                    <input accept="image/*" class="validateImage" name="banner_image" type='file' id="banner_image" style="display:none;" alt="banner_image"
                                                    onchange="previewImage(this)" data-previewon="#banner">
                                                        <img id="banner" src="https://i.pinimg.com/originals/51/11/d8/5111d818140cbaef5459ce331151463f.gif" 
                                                        height="170" width="300" onclick="document.getElementById('banner_image').click()">
                                                    </div> -->


                                                    <label for="company_logo">
                                                        <h4>Company logo</h4>
                                                    </label>
                                                    <div class="card-body">
                                                        <input accept="image/*" class="validateImage" name="company_logo" type='file' id="company_logo" style="display:none;" alt="company_logo" onchange="previewImage(this)" data-previewon="#logo">
                                                        <img id="logo" src="https://i.pinimg.com/originals/51/11/d8/5111d818140cbaef5459ce331151463f.gif" height="170" width="300" onclick="document.getElementById('company_logo').click()">
                                                    </div>
                                                    
                                                    <!-- <h4 class="card-title">Company Logo</h4>
                                                    <div class="card-body">
                                                        <img src="https://i.pinimg.com/originals/51/11/d8/5111d818140cbaef5459ce331151463f.gif" height="170" width="300">
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <h4 class="card-title">Business Images</h4>

                                                <div class="col-md-2">
                                                    <input accept="image/*" class="validateImage" name="img1" type='file' id="img1" style="display:none;" 
                                                    onchange="previewImage(this)" data-previewon="#i1">
                                                    <img id="i1" src="https://i.dlpng.com/static/png/6825249_preview.png" alt="business_image" 
                                                    height="50" width="50" onclick="document.getElementById('img1').click()">
                                                </div>

                                                <div class="col-md-2">
                                                    <input accept="image/*" class="validateImage" name="img2" type='file' id="img2" style="display:none;" 
                                                    onchange="previewImage(this)" data-previewon="#i2">
                                                    <img id="i2" src="https://i.dlpng.com/static/png/6825249_preview.png" alt="business_image" 
                                                    height="50" width="50" onclick="document.getElementById('img2').click()">
                                                </div>

                                                <div class="col-md-2">
                                                    <input accept="image/*" class="validateImage" name="img3" type='file' id="img3" style="display:none;" 
                                                    onchange="previewImage(this)" data-previewon="#i3">
                                                    <img id="i3" src="https://i.dlpng.com/static/png/6825249_preview.png" alt="business_image" 
                                                    height="50" width="50" onclick="document.getElementById('img3').click()">
                                                </div>

                                                <div class="col-md-2">
                                                    <input accept="image/*" class="validateImage" name="img4" type='file' id="img4" style="display:none;" 
                                                    onchange="previewImage(this)" data-previewon="#i4">
                                                    <img id="i4" src="https://i.dlpng.com/static/png/6825249_preview.png" alt="business_image" 
                                                    height="50" width="50" onclick="document.getElementById('img4').click()">
                                                </div>

                                                <div class="col-md-2">
                                                    <input accept="image/*" class="validateImage" name="img5" type='file' id="img5" style="display:none;" 
                                                    onchange="previewImage(this)" data-previewon="#i5">
                                                    <img id="i5" src="https://i.dlpng.com/static/png/6825249_preview.png" alt="business_image" 
                                                    height="50" width="50" onclick="document.getElementById('img5').click()">
                                                </div>

                                                <div class="col-md-2">
                                                    <input accept="image/*" class="validateImage" name="img6" type='file' id="img6" style="display:none;" 
                                                    onchange="previewImage(this)" data-previewon="#i6">
                                                    <img id="i6" src="https://i.dlpng.com/static/png/6825249_preview.png" alt="business_image" 
                                                    height="50" width="50" onclick="document.getElementById('img6').click()">
                                                </div>

                                            </div>
                                            <div class="form-group mb-3 row mt-5">
                                                <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                    <button type="submit" class="btn btn-de-primary" onclick="updateBusinessProfile(<?php echo $id; ?>)">Update</button>
                                                    <button type="button" class="btn btn-de-danger">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane p-3" id="Post2" role="tabpanel">
                                            <h4 class="card-title">Expertise & Skills</h4>
                                            <div class=" card-body">
                                                <div class="row">
                                                    <div class="form-group mb-3 row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Experitse</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="text" value="Rosa">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Industry You have worked With</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="text" value="Rosa">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row mt-5">
                                                    <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                        <button type="submit" class="btn btn-de-primary">Update</button>
                                                        <button type="button" class="btn btn-de-danger">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane p-3" id="Gallery" role="tabpanel">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Document Title</th>
                                                                            <th>Document Type</th>
                                                                            <th>Thumbnail</th>
                                                                            <th>Visibility</th>
                                                                            <th>Status</th>
                                                                            <th>Actions</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <p class="d-inline-block align-middle mb-0">
                                                                                    <a href="#" class="d-inline-block align-middle mb-0 product-name fw-semibold">Document Name</a>
                                                                                    <br>
                                                                                    <small>3 days ago</small>
                                                                                </p>
                                                                            </td>
                                                                            <td>Type</td>
                                                                            <td><img src="assets/images/products/04.png" alt="" height="40"></td>
                                                                            <td><span class="badge badge-soft-purple">Private</span></td>
                                                                            <td><span class="badge badge-soft-pink">Pending</span></td>
                                                                            <td>
                                                                                <a href="#" class="mr-2"><i class="las la-bell text-secondary font-16"></i></a>
                                                                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p class="d-inline-block align-middle mb-0">
                                                                                    <a href="#" class="d-inline-block align-middle mb-0 product-name fw-semibold">Vendor Name</a>
                                                                                    <br>
                                                                                    <small>3 days ago</small>
                                                                                </p>
                                                                            </td>
                                                                            <td>Type</td>
                                                                            <td><img src="assets/images/products/04.png" alt="" height="40"></td>
                                                                            <td><span class="badge badge-soft-warning">Public</span></td>
                                                                            <td><span class="badge badge-soft-success">Approved</span></td>
                                                                            <td>
                                                                                <a href="#" class="mr-2"><i class="las la-bell text-secondary font-16"></i></a>
                                                                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                                            </td>
                                                                        </tr>
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
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Upload Documents</h4>
                                                            <p class="text-muted mb-0">Upload High Defination Images with minimum size of 35px X 350px</p>
                                                        </div>
                                                        <!--end card-header-->
                                                        <div class="card-body">
                                                            <img src="https://i.pinimg.com/originals/51/11/d8/5111d818140cbaef5459ce331151463f.gif" height="170" width="300">
                                                        </div><!-- end card-body -->
                                                        <div class="card-body">
                                                            <div class="mb-3">
                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Document Title">
                                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected="">Visibility</option>
                                                                        <option value="1">Public </option>
                                                                        <option value="2">Private</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected="">Document Type</option>
                                                                        <option value="1">Business Document</option>
                                                                        <option value="2">Personal Document</option>
                                                                        <option value="2">Identification Proofs</option>
                                                                        <option value="2">Eductional Documents</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <textarea class="form-control" rows="5" id="message" placeholder="Gig Description"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row my-2 mx-2">
                                                            <div class="col-sm-12 text-end">
                                                                <button type="submit" class="btn btn-de-primary px-4">Save Details </button>
                                                            </div>
                                                        </div>
                                                    </div> <!-- end card -->
                                                </div> <!-- end col -->
                                            </div>
                                        </div>
                                        <div class="tab-pane p-3" id="Settings" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row align-items-center">
                                                                <div class="col">
                                                                    <h4 class="card-title">Personal Information</h4>
                                                                </div>
                                                                <!--end col-->
                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                        <!--end card-header-->
                                                        <div class="card-body">
                                                            <div class="form-group mb-3 row">
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" value="" placeholder="Introduction">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Vendor Name</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" value="Rosa">
                                                                </div>
                                                            </div>

                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact Phone</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"><i class="las la-phone"></i></span>
                                                                        <input type="text" class="form-control" value="+123456789" placeholder="Phone" aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Whatapp Number</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"><i class="las la-phone"></i></span>
                                                                        <input type="text" class="form-control" value="+123456789" placeholder="Phone" aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email Address</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"><i class="las la-at"></i></span>
                                                                        <input type="text" class="form-control" value="rosa.dodson@demo.com" placeholder="Email" aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">

                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                                    <button type="submit" class="btn btn-de-primary">Submit</button>
                                                                    <button type="button" class="btn btn-de-danger">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Change Password</h4>
                                                        </div>
                                                        <!--end card-header-->
                                                        <div class="card-body">
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Current Password</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="password" placeholder="Password">
                                                                    <a href="#" class="text-primary font-12">Forgot password ?</a>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">New Password</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="password" placeholder="New Password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirm Password</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="password" placeholder="Re-Password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                                    <button type="submit" class="btn btn-de-primary">Change Password</button>
                                                                    <button type="button" class="btn btn-de-danger">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Other Settings</h4>
                                                        </div>
                                                        <!--end card-header-->
                                                        <div class="card-body">

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="Email_Notifications" checked>
                                                                <label class="form-check-label" for="Email_Notifications">
                                                                    Email Notifications
                                                                </label>
                                                                <span class="form-text text-muted font-12 mt-0">Do you need them?</span>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="API_Access">
                                                                <label class="form-check-label" for="API_Access">
                                                                    API Access
                                                                </label>
                                                                <span class="form-text text-muted font-12 mt-0">Enable/Disable access</span>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->
                                                </div> <!-- end col -->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

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
    <?php } ?>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <script src="assets/plugins/tobii/tobii.min.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/vkg001/scripts/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/vkg001/library/shortcuts.js"></script>
    <script>
        const tobii = new Tobii()
        //fromId, toId
        function setValue(fromId, toId) {
            document.getElementById(toId).value = document.getElementById(fromId).innerHTML;
        }

        function updateProfile(inputId, id) {
            newValue = document.getElementById(inputId).value;

            $.ajax({
                url: "profile_professionals_helper.php",
                type: "POST",
                data: {
                    type: 'upper',
                    field: inputId,
                    newValue: newValue,
                    id: id
                },
                success: function(response) {
                    console.log(response);
                }
            });
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

        function updateBusinessProfile(id){
            // business-name about-business vendor-website corporate-address
            var business_name = document.getElementById('business-name').value;
            var about_business = document.getElementById('about-business').value;
            var website = document.getElementById('vendor-website').value;
            var address = document.getElementById('corporate-address').value;
            
            var myFormData = new FormData();

            myFormData.append('type', 'business-lower');
            myFormData.append('id', id);
            myFormData.append('business_name', business_name);
            myFormData.append('about_business', about_business);
            myFormData.append('website', website);
            myFormData.append('address', address);
            myFormData.append('banner_image', document.getElementById('banner_image').files[0]);
            myFormData.append('company_logo', document.getElementById('company_logo').files[0]);
            myFormData.append('image1', document.getElementById('img1').files[0]);
            myFormData.append('image2', document.getElementById('img3').files[0]);
            myFormData.append('image3', document.getElementById('img3').files[0]);
            myFormData.append('image4', document.getElementById('img4').files[0]);
            myFormData.append('image5', document.getElementById('img5').files[0]);
            myFormData.append('image6', document.getElementById('img6').files[0]);

            $.ajax({
                url: "profile_professionals_helper.php",
                type: "POST",
                data: myFormData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                //     if(response){
                //         swal({
                //     title: "Success!",
                //     text: "Profile update successfully.",
                //     icon: "Success",
                //     timer: 5000,
                //     button: false
                // });
                //     }

                //     else{
                //         swal({
                //     title: "Error",
                //     text: "Error has occured",
                //     icon: "error",
                //     timer: 5000,
                //     button: false
                // });
                //     }
                }
            });
        }
    </script>

</body>

</html>