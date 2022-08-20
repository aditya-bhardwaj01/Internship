<?php
session_start();
include '../config/connection.php';

if (!isset($_GET['id'])  &&  !isset($_SESSION['vendor_id'])  &&  !isset($_SESSION['user_id'])) {
    echo "Bad Request";
    die();
}
$cart = true;
// echo urlencode(base64_encode(1)) ;  MQ%3D%3D

$logged_vendor_id = getVendorID();
// Mzk%3D => 39
if (isset($_GET['id'])) {
    $vendor_id = realEscape(urldecode(base64_decode($_GET['id'])));
} else {
    $vendor_id = $logged_vendor_id;
}
// For profile
$qry = "SELECT * from vendor where id = $vendor_id";
$res = mysqli_query($conn, $qry);
$vendor_data = mysqli_fetch_assoc($res);

// For logged in user
$qry = "SELECT * from vendor where id = $logged_vendor_id";
$res = mysqli_query($conn, $qry);
$logged_vendor_data = mysqli_fetch_assoc($res);

function getProfilePercent()
{
    global $vendor_id;
    global $conn;
    // Necessary Fields ==> Name,Email,Mobile,city,state,country,pincode,pickupPincode,profile_pic,
    // mobile_verified,youtube_link,
    $qry = "SELECT * from vendor where id = $vendor_id";
    $res = mysqli_query($conn, $qry);
    $row = mysqli_fetch_assoc($res);
    $count = 0;
    $total = 15;
    if ($row['name'] != null)
        $count++;
    if ($row['email'] != null)
        $count++;
    if ($row['mobile'] != null)
        $count++;
    if ($row['city'] != null)
        $count++;
    if ($row['state'] != null)
        $count++;
    if ($row['country'] != null)
        $count++;
    if ($row['pincode'] != null)
        $count++;
    if ($row['pickup_pincode'] != null)
        $count++;
    if ($row['profile_pic'] != null)
        $count++;
    if ($row['youtube_link'] != null)
        $count++;
    if ($row['fb_link'] != null)
        $count++;
    if ($row['twitter_link'] != null)
        $count++;
    if ($row['linkedin_link'] != null)
        $count++;
    if ($row['whatsapp'] != null)
        $count++;
    if ($row['mobile_verified'] != null)
        $count++;


    if ($row['vendor_type'] == 2) {
        if ($row['gst'] != null)
            $count++;
        if ($row['gst_verified'] != null)
            $count++;
        if ($row['company_name'] != null)
            $count++;
        if ($row['company_logo'] != null)
            $count++;
        if ($row['website'] != null)
            $count++;
    }
    // echo "count: ".$count;
    return (int)(($count * 100) / $total);
}

function getReviewPercentage($rating)
{
    global $conn;
    global $this_site_id;
    global $vendor_id;
    $review_qry = "SELECT * from vendor_review where site_id = '$this_site_id' AND review_for = '$vendor_id' AND status = 1";
    $review_res = mysqli_query($conn, $review_qry);
    if (!$review_res)
        errlog(mysqli_error($conn), $review_qry);
    $c = 0;
    while ($row = mysqli_fetch_assoc($review_res)) {
        if ($row['rating'] == $rating)
            $c++;
    }

    if (mysqli_num_rows($review_res))
        return (int)(($c * 100) / mysqli_num_rows($review_res)) . '%';
    else
        return '0%';
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- vendor-wcfm-store-product-grid 11:48:26 GMT -->

<?php require_once "site_head.php" ?>

<style>
    .modal-backdrop {
        opacity: 0.5 !important;
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

    .edit {
        cursor: pointer;
        margin-left: 36px;
    }

    #profile_pic_edit {
        background: rgba(0, 0, 0, 0.2);
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        color: #fff;
        transform: translate(-50%, -50%);
        font-size: 20px;
        cursor: pointer;
    }

    #cover_pic_edit {
        background: rgba(0, 0, 0, 0.2);
        position: absolute;
        top: 20px;
        right: 20px;
        border-radius: 50%;
        color: #fff;
        font-size: 15px;
        cursor: pointer;
        width: 50px;
        height: 50px;
        display: grid;
        place-items: center;
    }
</style>

<body>
    <!-- Loader Starts -->
    <div id="formLoader">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="spinner-border text-primary" style="height: 10vh; width: 10vh;"></div>
            </div>
        </div>
    </div>
    <!-- Loader Ends -->
    <!-- Start of Pgae Wrapper -->
    <div class="page-wrapper">

        <!-- Start of Header -->
        <?php
        require_once "shop_header.php";
        ?>
        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav" style="z-index: 1000 !important;">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="#">Vendor</a></li>
                        <li><a href="#">WCFM</a></li>
                        <li>Store</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Pgae Contetn -->
            <div class="page-content mb-8">
                <div class="container">
                    <div class="store store-wcfm-banner">
                        <figure style="position:relative;" class="store-media">
                            <?php
                            $img = isset($vendor_data['cover_photo']) != '' ? $vendor_data['cover_photo'] : '../assets/images/cover-default.jpg';
                            ?>
                            <img class="cover_pic" src="<?= $img ?>" alt="Vendor" style="background-color: #40475e; height:200px; width:1240px;" />
                        </figure>
                        <div class="store-content">
                            <div class="store-content-left mr-auto">
                                <div class="personal-info">
                                    <figure style="position:relative;" class="seller-brand">
                                        <img class="profile_pic" src="<?= $vendor_data['profile_pic'] ?>" alt="Brand" width="100" height="100" />
                                    </figure>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="address-info">
                                    <h4 data-id="name" style="display:inline-block;" class="store-title">
                                        <?= $vendor_data['name'] ?></h4>
                                    <ul class="seller-info-list list-style-none">
                                        <li class="store-address">
                                            <i class="w-icon-map-marker"></i>
                                            <span data-id="address"><?= $vendor_data['city'] ?>,
                                                <?= $vendor_data['state'] ?>, <?= $vendor_data['country'] ?>,
                                                <?= $vendor_data['pincode'] ?></span>
                                        </li>
                                        <li class="store-phone">
                                            <a href="tel:<?= $vendor_data['mobile'] ?>">
                                                <i class="w-icon-phone"></i>
                                                <?= $vendor_data['mobile'] ?>
                                            </a>
                                        </li>
                                        <li class="store-email">
                                            <a href="email:<?= $vendor_data['email'] ?>">
                                                <i class="far fa-envelope"></i>
                                                <?= $vendor_data['email'] ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="store-content-right" style="width: calc(100% - 394px);">
                                <p style="font-size:2rem; color:#fff;"><?= getProfilePercent() ?>% Completed</p>
                                <div class="progress mb-5" style="width: 23%; height: 10px;">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="<?php echo getProfilePercent(); ?>" aria-valuemin="0" aria-valuemax="100">
                                        <?php echo getProfilePercent(); ?>
                                    </div>
                                </div>
                                <div class="social-icons social-icons-colored border-thin">
                                    <a href="#" data-social="facebook" data-toggle="modal" data-target="#socialMediaLink" class="social-icon social-facebook w-icon-facebook"></a>
                                    <a href="#" data-social="twitter" data-toggle="modal" data-target="#socialMediaLink" class="social-icon social-twitter w-icon-twitter"></a>
                                    <a href="#" data-social="linkedin" data-toggle="modal" data-target="#socialMediaLink" class="social-icon social-linkedin fab fa-linkedin"></a>
                                    <a href="#" data-social="youtube" data-toggle="modal" data-target="#socialMediaLink" class="social-icon social-youtube w-icon-youtube"></a>
                                    <a href="#" data-social="instagram" data-toggle="modal" data-target="#socialMediaLink" class="social-icon social-instagram w-icon-instagram"></a>
                                </div>
                            </div>
                            <!-- Modal For Image Upload -->
                            <!--end modal-->
                        </div>
                    </div>
                    <!-- End of Store WCMP Banner -->
                    <?php
                    // For review
                    $review_qry = "SELECT * from vendor_review where site_id = '$this_site_id' AND review_for = '$vendor_id' AND status = 1";
                    $review_res = mysqli_query($conn, $review_qry);
                    if (!$review_res)
                        errlog(mysqli_error($conn), $review_qry);
                    ?>
                    <div class="row">
                        <div class="col-8 gutter-lg">
                            <div class="tab tab-nav-underline tab-nav-boxed tab-vendor-wcfm">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="#tab-1" class="nav-link active">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-2" class="nav-link">Consultant Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-3" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-4" class="nav-link">Reviews(<?= mysqli_num_rows($review_res) ?>)</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-1">
                                        <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                            <div class="toolbox-left">
                                                <div class="toolbox-item toolbox-sort select-box text-dark">
                                                    <label>Sort By :</label>
                                                    <select name="orderby" class="form-control">
                                                        <option value="default" selected="selected">Default sorting
                                                        </option>
                                                        <option value="popularity">Sort by popularity</option>
                                                        <option value="rating">Sort by average rating</option>
                                                        <option value="date">Sort by latest</option>
                                                        <option value="price-low">Sort by pric: low to high</option>
                                                        <option value="price-high">Sort by price: high to low</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="toolbox-right">
                                                <div class="toolbox-item toolbox-show select-box">
                                                    <select name="count" class="form-control">
                                                        <option value="9">Show 9</option>
                                                        <option value="12" selected="selected">Show 12</option>
                                                        <option value="24">Show 24</option>
                                                        <option value="36">Show 36</option>
                                                    </select>
                                                </div>
                                                <div class="toolbox-item toolbox-layout">
                                                    <a href="vendor-wcfm-store-product-grid.html" class="icon-mode-grid btn-layout active">
                                                        <i class="w-icon-grid"></i>
                                                    </a>
                                                    <a href="vendor-wcfm-store-product-list.html" class="icon-mode-list btn-layout">
                                                        <i class="w-icon-list"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </nav>
                                        <!-- End of Swiper -->
                                        <div class="title-link-wrapper title-deals after-none appear-animate mt-2">
                                            <?php
                                            $qry = "SELECT * from marketplace_services where site_id = '$this_site_id' AND vendor_id = '$vendor_id' limit 6";
                                            $res = mysqli_query($conn, $qry);
                                            if (!$res)
                                                errlog(mysqli_error($conn), $qry);

                                            if (mysqli_num_rows($res)) {
                                            ?>
                                                <h2 class="title font-secondary mb-1">Service Packages</h2>
                                                <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">
                                                    More
                                                    <i class="w-icon-long-arrow-right"></i>
                                                </a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="swiper-container swiper-theme category-banner-3cols pt-2 pb-2 mb-2 appear-animate" data-swiper-options="{
                                                'spaceBetween': 20,
                                                'slidesPerView': 1,
                                                'autoplay': {
                                                    'delay': 4000,
                                                    'disableOnInteraction': false
                                                },
                                                'breakpoints': {
                                                    '576': {
                                                        'slidesPerView': 2
                                                    },
                                                    '992': {
                                                        'slidesPerView': 7
                                                    }
                                                }
                                            }">
                                            <div class="swiper-wrapper row cols-lg-5">
                                                <?php
                                                $counter = 0;
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    $counter++;
                                                    if ($counter == 5) {
                                                        break;
                                                    }
                                                ?>
                                                    <div class="swiper-slide " style="padding: 0.5rem;">
                                                        <div class="product-wrap">
                                                            <div class="product text-center">
                                                                <figure class="product-media">
                                                                    <a href="product-default.html">
                                                                        <?php
                                                                        $im = "select * from product_images where marketplace_id='16' and main='1' and product_id='" . $row["id"] . "'";
                                                                        $im_r = $conn->query($im);
                                                                        if (!$im_r) {
                                                                            errlog(mysqli_error($conn), $im);
                                                                        } else {
                                                                            $img = $im_r->fetch_assoc();
                                                                            if (!isset($img['image_url'])  ||  $img['image_url']  == '') {
                                                                                $img['image_url'] = '../assets/images/banner.jpg';
                                                                            }
                                                                        ?>
                                                                            <img src="<?= $img['image_url'] ?>" alt="Product" style="height: 15rem;">
                                                                    </a>
                                                                    <div class="product-action-horizontal">
                                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                    </div>
                                                                </figure>
                                                                <div class="product-details">
                                                                    <div class="product-cat">
                                                                        <a href="shop-banner-sidebar.html"><?= $row['sub_cat_id'] ?></a>
                                                                    </div>
                                                                    <h3 class="product-name">
                                                                        <a href="product-default.html"><?= $row['service_name'] ?></a>
                                                                    </h3>
                                                                    <div class="ratings-container">
                                                                        <div class="ratings-full">
                                                                            <span class="ratings" style="width: 100%;"></span>
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                        <a href="product-default.html" class="rating-reviews">(3
                                                                            reviews)</a>
                                                                    </div>
                                                                    <div class="product-pa-wrapper">
                                                                        <div class="product-price">
                                                                            ₹<?= $row['price'] ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php
                                                                        }
                                                                    }


                                            ?>
                                            <!-- End of Product List -->
                                            </div>
                                        </div>
                                        <div class="title-link-wrapper title-deals after-none appear-animate mt-2">
                                            <?php
                                            $qry = "SELECT *, marketplace_products.id as prod_id,product_variants.id as var_id from marketplace_products,product_variants where marketplace_products.site_id = '$this_site_id' AND vendor_id = '$vendor_id' AND marketplace_products.id = product_variants.product_id";
                                            $res = mysqli_query($conn, $qry);
                                            if (!$res)
                                                errlog(mysqli_error($conn), $qry);

                                            if (mysqli_num_rows($res) > 4) {
                                            ?>
                                                <h2 class="title font-secondary mb-1">Products</h2>
                                                <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">
                                                    More
                                                    <i class="w-icon-long-arrow-right"></i>
                                                </a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 p-2">
                                                <div class="swiper-container swiper-theme category-banner-5cols pt-2 pb-2 mb-2 appear-animate" style="padding: 0.5rem;" data-swiper-options="{
                                                'spaceBetween': 20,
                                                'slidesPerView': 1,
                                                'autoplay': {
                                                    'delay': 4000,
                                                    'disableOnInteraction': false
                                                },
                                                'breakpoints': {
                                                    '576': {
                                                        'slidesPerView': 2
                                                    },
                                                    '992': {
                                                        'slidesPerView': 7
                                                    }
                                                }
                                            }">
                                                    <div class="swiper-wrapper row cols-md-5 p-3">
                                                        <?php
                                                        $counter = 0;
                                                        while ($row = mysqli_fetch_assoc($res)) {
                                                            $counter++;
                                                            if ($counter == 5) {
                                                                break;
                                                            }
                                                        ?>
                                                            <div class="swiper-slide">
                                                                <div class="product-wrap">
                                                                    <div class="product text-center">
                                                                        <figure class="product-media">
                                                                            <a href="product-default.html">
                                                                                <?php
                                                                                $main_image = 'x';
                                                                                $qry = "SELECT * from product_images where product_id = '" . $row['prod_id'] . "' and main = '1' and type = 'IMAGE' and marketplace_id = '5' ";
                                                                                $img_res = mysqli_query($conn, $qry);
                                                                                if (!$img_res) {
                                                                                    errlog(mysqli_error($conn), $qry);
                                                                                }
                                                                                if ($img_res) {
                                                                                    $main_image = mysqli_fetch_assoc($img_res);
                                                                                    if ($main_image) {
                                                                                        $main_image = $main_image['image_url'];
                                                                                    }
                                                                                }

                                                                                $dp = '';

                                                                                $qry = "SELECT * from product_images where product_id = '" . $row['prod_id'] . "' and main = '0' AND variant_id = '" . $row['var_id'] . "' and type = 'IMAGE' and marketplace_id = '5' ";
                                                                                $img_res = mysqli_query($conn, $qry);
                                                                                if (!$img_res) {
                                                                                    errlog(mysqli_error($conn), $qry);
                                                                                }
                                                                                if ($img_res) {
                                                                                    $img_res = mysqli_fetch_assoc($img_res);
                                                                                    // print_r($res) ;
                                                                                    if (isset($img_res['id'])) {
                                                                                        $dp = $img_res['image_url'];
                                                                                    }
                                                                                }

                                                                                if ($dp != '') {
                                                                                    $main_image = $dp;
                                                                                }

                                                                                if ($main_image  == '') {
                                                                                    $main_image = '../assets/images/success_icon.png';
                                                                                }

                                                                                ?>
                                                                                <img src="<?= $main_image ?>" alt="Product" style="height: 15rem;">
                                                                            </a>
                                                                            <div class="product-action-horizontal">
                                                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="product-details">
                                                                            <div class="product-cat">
                                                                                <a href="shop-banner-sidebar.html"><?= $row['cat_id'] ?></a>
                                                                            </div>
                                                                            <h3 class="product-name">
                                                                                <a href="product-default.html"><?= $row['product_title'] ?></a>
                                                                            </h3>
                                                                            <div class="product-pa-wrapper">
                                                                                <div class="product-price">
                                                                                    $220.00 - $230.00
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                        }

                                                        ?>
                                                        <!-- End of Product List -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Swiper -->
                                    </div>
                                    <div class="tab-pane" id="tab-2">
                                        <h5>About Consultant</h5>
                                        <p class="mb-4">
                                            <?= $vendor_data['bio'] ?? 'No bio' ?>
                                        </p>

                                        <h5>My Team</h5>
                                        <section class="member-section mt-5 pt-5 mb-5 pb-4">
                                            <div class="container">
                                                <h4 class="title title-center mb-3">Meet Our Team</h4>
                                                <!--p class="text-center mb-8">Nunc id cursus metus aliquam. Libero id faucibus nisl tincidunt eget. Aliquam<br>
                                                maecenas ultricies mi eget mauris. Volutpat ac</p-->
                                                <?php
                                                $qry = "SELECT * from team_details where vendor_id = $vendor_id group by role";
                                                $res = mysqli_query($conn, $qry);

                                                if (!$res) {
                                                    errlog(mysqli_error($conn), $qry);
                                                }

                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    if ($row['role'] != null) {
                                                ?>
                                                        <div class="swiper-container swiper-theme" data-swiper-options="{
                                                                    'spaceBetween': 20,
                                                                    'slidesPerView': 1,
                                                                    'breakpoints': {
                                                                        '576': {
                                                                            'slidesPerView': 2
                                                                        },
                                                                        '768': {
                                                                            'slidesPerView': 3
                                                                        },
                                                                        '992': {
                                                                            'slidesPerView': 6
                                                                        }
                                                                    }
                                                                }">
                                                            <h5><?= $row['role'] ?></h5>
                                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-sm-2 cols-1">
                                                                <?php
                                                                $member_qry = "SELECT * from team_details where vendor_id = $vendor_id AND role = '" . $row['role'] . "'";
                                                                $member_res = mysqli_query($conn, $member_qry);

                                                                while ($member = mysqli_fetch_assoc($member_res)) {
                                                                    $qry = "SELECT * from vendor where id = '" . $member['member_id'] . "'";
                                                                    $member_data_res = mysqli_query($conn, $qry);
                                                                    if (!$member_data_res)
                                                                        errlog(mysqli_error($conn), $qry);
                                                                    $member_data = mysqli_fetch_assoc($member_data_res);
                                                                    if (isset($member_data['id'])) {
                                                                ?>
                                                                        <div class="swiper-slide member-wrap">
                                                                            <figure class="br-lg">
                                                                                <img src="<?= $member_data['profile_pic'] ?>" alt="Member" style="height:250px" ; />
                                                                            </figure>
                                                                            <div class="member-info text-center">
                                                                                <h4 class="member-name"><?= $member_data['name'] ?></h4>
                                                                                <p class="text-uppercase">Team Id:
                                                                                    <?= $member['team_id'] ?></p>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </div>
                                                            <div class="swiper-pagination"></div>
                                                        </div>
                                                <?php
                                                    }
                                                }


                                                ?>
                                            </div>
                                        </section>

                                        <h5>Documents</h5>
                                        <div class="container">
                                            <div class="swiper-container swiper-theme category-banner-3 cols pt-2 pb-2 mb-2 appear-animate" data-swiper-options="{
                                                    'spaceBetween': 20,
                                                    'slidesPerView': 1,
                                                    'autoplay': {
                                                        'delay': 4000,
                                                        'disableOnInteraction': false
                                                    },
                                                    'breakpoints': {
                                                        '576': {
                                                            'slidesPerView': 2
                                                        },
                                                        '992': {
                                                            'slidesPerView': 7
                                                        }
                                                    }
                                                }">
                                                <div class="swiper-wrapper row cols-lg-6">
                                                    <?php
                                                    $doc_qry = "SELECT * from image_gallery where vendor_id = $vendor_id";
                                                    $doc_res = mysqli_query($conn, $doc_qry);
                                                    if (!$doc_res)
                                                        errlog(mysqli_error($conn), $doc_qry);

                                                    while ($doc = mysqli_fetch_assoc($doc_res)) {
                                                        if ($doc['cat_id'] == 'photo') {
                                                    ?>
                                                            <div class="swiper-slide ml-2">
                                                                <div class="mb-2" style="position: relative;">
                                                                    <img style="width:250px;height:150px;object-fit:cover;" src="<?= $doc['image_url'] ?? '' ?>" alt="">
                                                                    <svg style="background: white; position: absolute; top:10px;right:10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-patch-check" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                                                        <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                                                                    </svg>
                                                                    <h5>
                                                                        <?= $doc['description'] ?? 'No doc name' ?>

                                                                    </h5>

                                                                </div>
                                                            </div>
                                                        <?php
                                                        } else if ($doc['cat_id'] == "document") {
                                                        ?>
                                                            <div class="swiper-slide ml-2">
                                                                <div class="mb-2" style="position: relative;">
                                                                    <img style="width:250px;height:150px;object-fit:cover;" src="https://play-lh.googleusercontent.com/9XKD5S7rwQ6FiPXSyp9SzLXfIue88ntf9sJ9K250IuHTL7pmn2-ZB0sngAX4A2Bw4w" alt="">
                                                                    <svg style="background: white; position: absolute; top:10px;right:10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-patch-check" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                                                        <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                                                                    </svg>
                                                                    <h5>
                                                                        <?= $doc['description'] ?? 'No doc name' ?>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                    <?php

                                                        }
                                                    }
                                                    ?>
                                                    <!-- End of Product List -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab-3">
                                        <h4> Photo Gallery</h4>
                                        <h4> News Gallery</h4>
                                        <h4> Video Gallery</h4>
                                    </div>
                                    <div class="tab-pane" id="tab-4">
                                        <div class="row mb-4">
                                            <div class="col-xl-4 col-lg-5 mb-4">
                                                <div class="ratings-wrapper">
                                                    <div class="avg-rating-container">
                                                        <h4 class="avg-mark font-weight-bolder ls-50">3.3</h4>
                                                        <div class="avg-rating">
                                                            <p class="text-dark mb-1">Average Rating</p>
                                                            <div class="ratings-container">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                                <a href="#" class="rating-reviews">(<?= mysqli_num_rows($review_res) ?>
                                                                    Reviews)</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ratings-value d-flex align-items-center text-dark ls-25">
                                                        <span class="text-dark font-weight-bold">66.7%</span>Recommended<span class="count">(2 of 3)</span>
                                                    </div>
                                                    <div class="ratings-list">
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark><?= getReviewPercentage(5) ?></mark>
                                                            </div>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark><?= getReviewPercentage(4) ?></mark>
                                                            </div>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark><?= getReviewPercentage(3) ?></mark>
                                                            </div>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 40%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark><?= getReviewPercentage(2) ?></mark>
                                                            </div>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 20%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm " width="<?= getReviewPercentage(1) ?>">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark><?= getReviewPercentage(1) ?></mark>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 mb-4">
                                                <div class="review-form-wrapper">
                                                    <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your
                                                        Review</h3>
                                                    <p class="mb-3">Your email address will not be published. Required
                                                        fields are marked *</p>
                                                    <div class="rating-form">
                                                        <label for="rating">Your Rating Of This Product :</label>
                                                        <select name="rating" class="rating" id='rating'>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <textarea cols="30" rows="6" placeholder="Write Your Review Here..." class="form-control" id="review"></textarea>
                                                    <div class="row gutter-md">
                                                        <div class="col-md-6">
                                                            <input type="text" name="name" class="form-control" placeholder="Your Name" id="author" value="<?= $logged_vendor_data['name'] ?? '' ?>" readonly>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" placeholder="Your Email" id="email_1" value="<?= $logged_vendor_data['email'] ?? '' ?>" readonly>
                                                        </div>
                                                        <input type="hidden" name="vendor_id">
                                                    </div>
                                                    <!-- <div class="form-group">
                                                            <input type="checkbox" class="custom-checkbox"
                                                                id="save-checkbox">
                                                            <label for="save-checkbox">Save my name, email, and website
                                                                in this browser for the next time I comment.</label>
                                                        </div> -->
                                                    <button type="submit" name="submit_review" class="btn btn-dark submit_review" <?= (($logged_vendor_id == $vendor_id) || (!isset($_SESSION['vendor_id']))) ? 'disabled' : '' ?>>Submit
                                                        Review</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane active" id="show-all">
                                                <ul class="comments list-style-none">
                                                    <?php
                                                    while ($review = mysqli_fetch_assoc($review_res)) {
                                                        $commenter_qry = "SELECT * from vendor where id = '" . $review['vendor_id'] . "'";
                                                        $commenter_res = mysqli_query($conn, $commenter_qry);
                                                        $commenter = mysqli_fetch_assoc($commenter_res);
                                                    ?>
                                                        <li class="comment">
                                                            <div class="comment-body">
                                                                <figure class="comment-avatar">
                                                                    <img src="<?= $commenter['profile_pic'] ?? '../assets/images/users/no-profile.png' ?>" alt="Commenter Avatar" width="90" height="90">
                                                                </figure>
                                                                <div class="comment-content">
                                                                    <h4 class="comment-author">
                                                                        <a href="#"><?= $commenter['name'] ?></a>
                                                                        <span class="comment-date">
                                                                            <?= ($review['updated_date'] != $review['created_date']) ? 'Edited: ' . $review['updated_date'] : $review['created_date'] ?>
                                                                        </span>
                                                                    </h4>
                                                                    <div class="ratings-container comment-rating">
                                                                        <div class="ratings-full">
                                                                            <?php
                                                                            $review_star = (int)$review['rating'] * 100 / 5;
                                                                            ?>
                                                                            <span class="ratings" style="width: <?= $review_star ?>%;"></span>
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                    </div>
                                                                    <p><?= $review['comment'] ?></p>
                                                                    <div class="comment-action">
                                                                        <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                            <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                        </a>
                                                                        <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                            <i class="far fa-thumbs-down"></i>Unhelpful
                                                                            (0)
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 ml-5 advertisement">
                            <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    < ?php 
                                        $qry = "SELECT * from create_ad where site_id = '$this_site_id' AND vendor_id = '$vendor_id' AND ad_position = 'profile' AND ad_format = 'banner' AND status = '1'";
                                        $res = mysqli_query($conn,$qry);
                                        if(!$res){
                                            errlog(mysqli_error($conn),$qry);
                                        }
                                        $i = 0;
                                        while($row = mysqli_fetch_assoc($res)){

                                            $now = time();
                                            $start_date = strtotime($row['start_date']);
                                            $end_date = strtotime($row['end_date']);
                                            $start_diff = $now - ($start_date + 24*60*60);
                                            if(-1*$start_diff <= 24*60*60 && ($end_date - $now) > 0){
                                            ?>
                                    <div data-id="< ?=urlencode(base64_encode($row['id']))?>"
                                        data-href="< ?=$row['redirecturl']?>"
                                        class="ad carousel-item < ?=$i == 0 ? 'active' : ''?> m-5">
                                        <img src="< ?=$row['banner_url']?>" alt="">
                                    </div>
                                    < ?php
                                            }
                                            $i++;
                                        }
                                    ?>
                                </div>
                            </div> -->

                            <!-- <div id="carouselExampleSlides" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    < ?php 
                                        // echo "here";
                                        $qry = "SELECT * from create_ad where site_id = '$this_site_id' AND vendor_id = '$vendor_id' AND ad_position = 'profile' AND ad_format = 'video' AND status = '1'";
                                        $res = mysqli_query($conn,$qry);
                                        if(!$res){
                                            errlog(mysqli_error($conn),$qry);
                                        }
                                        $j = 0;
                                        while($row = mysqli_fetch_assoc($res)){
                                            $now = time();
                                            $start_date = strtotime($row['start_date']);
                                            $end_date = strtotime($row['end_date']);
                                            $start_diff = ($now) - ($start_date);
                                            if($start_diff >= 0 && ($end_date - $now) > 0){
                                                if($row['video_code'] != null){
                                                    ?>
                                    <div data-id="< ?=urlencode(base64_encode($row['id']))?>"
                                        data-href="< ?=$row['redirecturl']?>"
                                        class="ad carousel-item < ?=$j == 0 ? 'active' : ''?> m-5">
                                        < ?=$row['video_code']?>
                                    </div>
                                    < ?php
                                                }else if($row['video_thumbnail']){
                                                ?>
                                    <div data-id="< ?=urlencode(base64_encode($row['id']))?>"
                                        data-href="< ?=$row['redirecturl']?>"
                                        class="ad carousel-item < ?=$j == 0 ? 'active' : ''?> m-5">
                                        <video poster="< ?=$row['video_thumbnail']?>" src="< ?=$row['banner_url']?>"
                                            alt="">
                                    </div>
                                    < ?php
                                                }
                                            } 
                                            $i++;
                                        }
                                    ?>
                                </div>
                            </div> -->



                        </div>
                    </div>
                </div>
                <!-- End of Page Content -->
            </div>
        </main>

        <!-- End of Main -->

        <!-- Start of Footer -->
        <footer class="footer appear-animate" data-animation-options="{
            'name': 'fadeIn'
            }">
            <div class="footer-newsletter bg-primary pt-6 pb-6">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="icon-box icon-box-side text-white">
                                <div class="icon-box-icon d-inline-flex">
                                    <i class="w-icon-envelop3"></i>
                                </div>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title text-white text-uppercase mb-0">Subscribe To Our
                                        Newsletter</h4>
                                    <p class="text-white">Get all the latest information on Events, Sales and Offers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                                <input type="email" class="form-control mr-2 bg-white" name="email" id="email" placeholder="Your E-mail Address" />
                                <button class="btn btn-dark btn-rounded" type="submit">Subscribe<i class="w-icon-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-about">
                                <a href="demo1.html" class="logo-footer">
                                    <img src="../assets/images/logo_footer.png" alt="logo-footer" width="144" height="45" />
                                </a>
                                <div class="widget-body">
                                    <p class="widget-about-title">Got Question? Call us 24/7</p>
                                    <a href="tel:18005707777" class="widget-about-call">1-800-570-7777</a>
                                    <p class="widget-about-desc">Register now to get updates on pronot get up icons
                                        & coupons ster now toon.
                                    </p>

                                    <div class="social-icons social-icons-colored">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                        <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                        <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h3 class="widget-title">Company</h3>
                                <ul class="widget-body">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">Team Member</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="#">Affilate</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="widget-body">
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="cart.html">View Cart</a></li>
                                    <li><a href="login.html">Sign In</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="wishlist.html">My Wishlist</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4>
                                <ul class="widget-body">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Product Returns</a></li>
                                    <li><a href="#">Support Center</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Term and Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle">
                    <div class="widget widget-category">
                        <div class="category-box">
                            <h6 class="category-name">Consumer Electric:</h6>
                            <a href="#">TV Television</a>
                            <a href="#">Air Condition</a>
                            <a href="#">Refrigerator</a>
                            <a href="#">Washing Machine</a>
                            <a href="#">Audio Speaker</a>
                            <a href="#">Security Camera</a>
                            <a href="#">View All</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Clothing & Apparel:</h6>
                            <a href="#">Men's T-shirt</a>
                            <a href="#">Dresses</a>
                            <a href="#">Men's Sneacker</a>
                            <a href="#">Leather Backpack</a>
                            <a href="#">Watches</a>
                            <a href="#">Jeans</a>
                            <a href="#">Sunglasses</a>
                            <a href="#">Boots</a>
                            <a href="#">Rayban</a>
                            <a href="#">Accessories</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Home, Garden & Kitchen:</h6>
                            <a href="#">Sofa</a>
                            <a href="#">Chair</a>
                            <a href="#">Bed Room</a>
                            <a href="#">Living Room</a>
                            <a href="#">Cookware</a>
                            <a href="#">Utensil</a>
                            <a href="#">Blender</a>
                            <a href="#">Garden Equipments</a>
                            <a href="#">Decor</a>
                            <a href="#">Library</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Health & Beauty:</h6>
                            <a href="#">Skin Care</a>
                            <a href="#">Body Shower</a>
                            <a href="#">Makeup</a>
                            <a href="#">Hair Care</a>
                            <a href="#">Lipstick</a>
                            <a href="#">Perfume</a>
                            <a href="#">View all</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Jewelry & Watches:</h6>
                            <a href="#">Necklace</a>
                            <a href="#">Pendant</a>
                            <a href="#">Diamond Ring</a>
                            <a href="#">Silver Earing</a>
                            <a href="#">Leather Watcher</a>
                            <a href="#">Rolex</a>
                            <a href="#">Gucci</a>
                            <a href="#">Australian Opal</a>
                            <a href="#">Ammolite</a>
                            <a href="#">Sun Pyrite</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Computer & Technologies:</h6>
                            <a href="#">Laptop</a>
                            <a href="#">iMac</a>
                            <a href="#">Smartphone</a>
                            <a href="#">Tablet</a>
                            <a href="#">Apple</a>
                            <a href="#">Asus</a>
                            <a href="#">Drone</a>
                            <a href="#">Wireless Speaker</a>
                            <a href="#">Game Controller</a>
                            <a href="#">View all</a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-left">
                        <p class="copyright">Copyright © 2021 Wolmart Store. All Rights Reserved.</p>
                    </div>
                    <div class="footer-right">
                        <span class="payment-label mr-lg-8">We're using safe payment for</span>
                        <figure class="payment">
                            <img src="../assets/images/payment.png" alt="payment" width="159" height="25" />
                        </figure>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Page-wrapper -->

    <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo1.html" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="shop-banner-sidebar.html" class="sticky-link">
            <i class="w-icon-category"></i>
            <p>Shop</p>
        </a>
        <a href="my-account.html" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a href="cart.html" class="sticky-link">
                <i class="w-icon-cart"></i>
                <p>Cart</p>
            </a>
            <div class="dropdown-box">
                <div class="products">
                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product-default.html">Beige knitted elas<br>tic
                                    runner shoes</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$25.68</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="../assets/images/cart/product-1.jpg" alt="product" height="84" width="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="https://www.portotheme.com/html/wolmart/product.html">Blue utility pina<br>fore
                                    denim dress</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$32.99</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="../assets/images/cart/product-2.jpg" alt="product" width="84" height="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="cart-total">
                    <label>Subtotal:</label>
                    <span class="price">$58.67</span>
                </div>

                <div class="cart-action">
                    <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                    <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                </div>
            </div>
            <!-- End of Dropdown Box -->
        </div>

        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Search</p>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search" required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>
        <!-- End of .mobile-menu-overlay -->

        <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
        <!-- End of .mobile-menu-close -->

        <div class="mobile-menu-container scrollable">
            <form action="#" method="get" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search" required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#main-menu" class="nav-link active">Main Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Categories</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                    <ul class="mobile-menu">
                        <li><a href="demo1.html">Home</a></li>
                        <li>
                            <a href="shop-banner-sidebar.html">Shop</a>
                            <ul>
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul>
                                        <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                        <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Full Width Banner</a></li>
                                        <li><a href="shop-horizontal-filter.html">Horizontal Filter<span class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span class="tip tip-new">New</span></a></li>
                                        <li><a href="shop-infinite-scroll.html">Infinite Ajax Scroll</a></li>
                                        <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="shop-both-sidebar.html">Both Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop Layouts</a>
                                    <ul>
                                        <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                        <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                        <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                        <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                        <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                        <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                        <li><a href="shop-list.html">List Mode</a></li>
                                        <li><a href="shop-list-sidebar.html">List Mode With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Pages</a>
                                    <ul>
                                        <li><a href="product-variable.html">Variable Product</a></li>
                                        <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                        <li><a href="product-accordion.html">Data In Accordion</a></li>
                                        <li><a href="product-section.html">Data In Sections</a></li>
                                        <li><a href="product-swatch.html">Image Swatch</a></li>
                                        <li><a href="product-extended.html">Extended Info</a>
                                        </li>
                                        <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                        <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span class="tip tip-new">New</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Layouts</a>
                                    <ul>
                                        <li><a href="product-default.html">Default<span class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                        <li><a href="product-grid.html">Grid Images</a></li>
                                        <li><a href="product-masonry.html">Masonry</a></li>
                                        <li><a href="product-gallery.html">Gallery</a></li>
                                        <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                        <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                        <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="vendor-dokan-store.html">Vendor</a>
                            <ul>
                                <li>
                                    <a href="#">Store Listing</a>
                                    <ul>
                                        <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                        <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                        <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                        <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Vendor Store</a>
                                    <ul>
                                        <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                        <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a></li>
                                        <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a></li>
                                        <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog.html">Classic</a></li>
                                <li><a href="blog-listing.html">Listing</a></li>
                                <li>
                                    <a href="https://www.portotheme.com/html/wolmart/blog-grid.html">Grid</a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Masonry</a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Mask</a>
                                    <ul>
                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="post-single.html">Single Post</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about-us.html">Pages</a>
                            <ul>

                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="error-404.html">Error 404</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="elements.html">Elements</a>
                            <ul>
                                <li><a href="element-products.html">Products</a></li>
                                <li><a href="element-titles.html">Titles</a></li>
                                <li><a href="element-typography.html">Typography</a></li>
                                <li><a href="element-categories.html">Product Category</a></li>
                                <li><a href="element-buttons.html">Buttons</a></li>
                                <li><a href="element-accordions.html">Accordions</a></li>
                                <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                <li><a href="element-tabs.html">Tabs</a></li>
                                <li><a href="element-testimonials.html">Testimonials</a></li>
                                <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                <li><a href="element-instagrams.html">Instagrams</a></li>
                                <li><a href="element-cta.html">Call to Action</a></li>
                                <li><a href="element-vendors.html">Vendors</a></li>
                                <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                <li><a href="element-icons.html">Icons</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="categories">
                    <ul class="mobile-menu">
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-tshirt2"></i>Fashion
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Women</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                Watches</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Sale</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Men</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                Watches</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-home"></i>Home & Garden
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Bedroom</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Beds, Frames &
                                                Bases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Dressers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Nightstands</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Kid's Beds &
                                                Headboards</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Armoires</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Living Room</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Coffee Tables</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Chairs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Tables</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Futons & Sofa
                                                Beds</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Cabinets &
                                                Chests</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Office</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Office Chairs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Desks</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bookcases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">File Cabinets</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Breakroom
                                                Tables</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Kitchen & Dining</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Dining Sets</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Kitchen Storage
                                                Cabinets</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bashers Racks</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dining Chairs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dining Room
                                                Tables</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bar Stools</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-electronics"></i>Electronics
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Laptops &amp; Computers</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Desktop
                                                Computers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Monitors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Laptops</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Hard Drives &amp;
                                                Storage</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Computer
                                                Accessories</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">TV &amp; Video</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">TVs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Home Audio
                                                Speakers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Projectors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Media Streaming
                                                Devices</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Digital Cameras</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Digital SLR
                                                Cameras</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Sports & Action
                                                Cameras</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Camera Lenses</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Photo Printer</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Digital Memory
                                                Cards</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cell Phones</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Carrier Phones</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Unlocked Phones</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Phone & Cellphone
                                                Cases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Cellphone
                                                Chargers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-furniture"></i>Furniture
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Furniture</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Sofas & Couches</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Armchairs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bed Frames</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Beside Tables</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dressing Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Lighting</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Light Bulbs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Lamps</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Celling Lights</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Wall Lights</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Bathroom
                                                Lighting</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Home Accessories</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Decorative
                                                Accessories</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Candals &
                                                Holders</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Home Fragrance</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Mirrors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clocks</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Garden & Outdoors</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Garden
                                                Furniture</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Lawn Mowers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Pressure
                                                Washers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">All Garden
                                                Tools</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Outdoor Dining</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-heartbeat"></i>Healthy & Beauty
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-gift"></i>Gift Ideas
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-gamepad"></i>Toy & Games
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ice-cream"></i>Cooking
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ios"></i>Smart Phones
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-camera"></i>Cameras & Photo
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ruby"></i>Accessories
                            </a>
                        </li>
                        <li>
                            <a href="shop-banner-sidebar.html" class="font-weight-bold text-primary text-uppercase ls-25">
                                View All Categories<i class="w-icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Mobile Menu -->

    <!-- Start of Quick View -->
    <div class="product product-single product-popup">
        <div class="row gutter-lg">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="product-gallery product-gallery-sticky mb-0">
                    <div class="product-single-swiper swiper-container swiper-theme nav-inner row cols-1 gutter-no">
                        <figure class="product-image">
                            <img src="../assets/images/products/popup/1-440x494.jpg" data-zoom-image="../assets/images/products/popup/1-800x900.jpg" alt="Water Boil Black Utensil" width="800" height="900">
                        </figure>
                        <figure class="product-image">
                            <img src="../assets/images/products/popup/2-440x494.jpg" data-zoom-image="../assets/images/products/popup/2-800x900.jpg" alt="Water Boil Black Utensil" width="800" height="900">
                        </figure>
                        <figure class="product-image">
                            <img src="../assets/images/products/popup/3-440x494.jpg" data-zoom-image="../assets/images/products/popup/3-800x900.jpg" alt="Water Boil Black Utensil" width="800" height="900">
                        </figure>
                        <figure class="product-image">
                            <img src="../assets/images/products/popup/4-440x494.jpg" data-zoom-image="../assets/images/products/popup/4-800x900.jpg" alt="Water Boil Black Utensil" width="800" height="900">
                        </figure>
                    </div>
                    <div class="product-thumbs-wrap">
                        <div class="product-thumbs">
                            <div class="product-thumb active">
                                <img src="../assets/images/products/popup/1-103x116.jpg" alt="Product Thumb" width="103" height="116">
                            </div>
                            <div class="product-thumb">
                                <img src="../assets/images/products/popup/2-103x116.jpg" alt="Product Thumb" width="103" height="116">
                            </div>
                            <div class="product-thumb">
                                <img src="../assets/images/products/popup/3-103x116.jpg" alt="Product Thumb" width="103" height="116">
                            </div>
                            <div class="product-thumb">
                                <img src="../assets/images/products/popup/4-103x116.jpg" alt="Product Thumb" width="103" height="116">
                            </div>
                        </div>
                        <button class="thumb-up disabled"><i class="w-icon-angle-left"></i></button>
                        <button class="thumb-down disabled"><i class="w-icon-angle-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 overflow-hidden p-relative">
                <div class="product-details scrollable pl-0">
                    <h2 class="product-title">Electronics Black Wrist Watch</h2>
                    <div class="product-bm-wrapper">
                        <figure class="brand">
                            <img src="../assets/images/products/brand/brand-1.jpg" alt="Brand" width="102" height="48" />
                        </figure>
                        <div class="product-meta">
                            <div class="product-categories">
                                Category:
                                <span class="product-category"><a href="#">Electronics</a></span>
                            </div>
                            <div class="product-sku">
                                SKU: <span>MS46891340</span>
                            </div>
                        </div>
                    </div>

                    <hr class="product-divider">

                    <div class="product-price">$40.00</div>

                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 80%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                    </div>

                    <div class="product-short-desc">
                        <ul class="list-type-check list-style-none">
                            <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                            <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                            <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                        </ul>
                    </div>

                    <hr class="product-divider">

                    <div class="product-form product-variation-form product-color-swatch">
                        <label>Color:</label>
                        <div class="d-flex align-items-center product-variations">
                            <a href="#" class="color" style="background-color: #ffcc01"></a>
                            <a href="#" class="color" style="background-color: #ca6d00;"></a>
                            <a href="#" class="color" style="background-color: #1c93cb;"></a>
                            <a href="#" class="color" style="background-color: #ccc;"></a>
                            <a href="#" class="color" style="background-color: #333;"></a>
                        </div>
                    </div>
                    <div class="product-form product-variation-form product-size-swatch">
                        <label class="mb-1">Size:</label>
                        <div class="flex-wrap d-flex align-items-center product-variations">
                            <a href="#" class="size">Small</a>
                            <a href="#" class="size">Medium</a>
                            <a href="#" class="size">Large</a>
                            <a href="#" class="size">Extra Large</a>
                        </div>
                        <a href="#" class="product-variation-clean">Clean All</a>
                    </div>

                    <div class="product-variation-price">
                        <span></span>
                    </div>

                    <div class="product-form">
                        <div class="product-qty-form">
                            <div class="input-group">
                                <input class="quantity form-control" type="number" min="1" max="10000000">
                                <button class="quantity-plus w-icon-plus"></button>
                                <button class="quantity-minus w-icon-minus"></button>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-cart">
                            <i class="w-icon-cart"></i>
                            <span>Add to Cart</span>
                        </button>
                    </div>

                    <div class="social-links-wrapper">
                        <div class="social-links">
                            <div class="social-icons social-no-color border-thin">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                            </div>
                        </div>
                        <span class="divider d-xs-show"></span>
                        <div class="product-link-wrapper d-flex">
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                            <a href="#" class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Quick view -->



    <!-- Plugin JS File -->
    <script src="../assets/js/app.js"></script>
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="../assets/vendor/sticky/sticky.min.js"></script>
    <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="../assets/js/main.min.js"></script>

    <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js" integrity="sha512-nUuQ/Dau+I/iyRH0p9sp2CpKY9zrtMQvDUG7iiVY8IBMj8ZL45MnONMbgfpFAdIDb7zS5qEJ7S056oE7f+mCXw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let rating = -1;
        $(".progress-bar").each(function() {
            each_bar_width = $(this).attr('aria-valuenow');
            $(this).width(each_bar_width + '%');
        });

        $('#rating').barrating({
            theme: 'fontawesome-stars',
            onSelect: function(value, text, event) {
                rating = value;
            }
        });

        $('.submit_review').click((e) => {
            let review_for = '<?= $vendor_id ?>';
            let review = $('#review').val();
            if (rating != -1) {
                $.ajax({
                    url: 'profile_helper.php',
                    method: "POST",
                    data: {
                        add_vendor_review: true,
                        review: review,
                        review_for: review_for,
                        rating: rating
                    },
                    beforeSend: () => {
                        $('#formLoader').css('display', 'flex')
                    },
                    success: (data) => {
                        console.log(data);
                        $('#formLoader').css('display', 'none');
                        if (data.indexOf('error') != -1)
                            new Swal("Something went wrong", "Please try again", "error");
                        else
                            new Swal("Your review has been submitted successfully", '', "success");

                        window.location.reload();
                    }
                })
            }
        });

        $('.ad').click(function() {
            let id = $(this).data('id');
            let href = $(this).data('href');
            $.ajax({
                url: "profile_helper.php",
                method: "POST",
                data: {
                    update_ad_click: true,
                    id: id
                },
                success: function(data) {
                    if (data.indexOf("error") != -1) {
                        new Swal("Something went wrong", "Can't redirect you to the ad page", "");
                    } else {
                        window.location.href = href;
                    }
                }
            })
            console.log(id, href);
        })
    </script>
</body>


<!-- vendor-wcfm-store-product-grid 11:48:28 GMT -->

</html>