<?php
session_start();
$given_category = "All";
include "./config/connection.php";
$service_shop = true;

if (isset($_GET['cat_id'])) {
    $given_category = urldecode(base64_decode($_GET['cat_id']));
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- <?php include 'site_head.php'; ?> -->

<body>
    <!-- Start of Pgae Wrapper -->
    <div class="page-wrapper">
        <?php include 'shop_header.php'; ?>
        <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>
        <!-- Start of Header -->

        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
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
                    <div class="row gutter-lg">
                        <aside class="sidebar left-sidebar vendor-sidebar sticky-sidebar-wrapper sidebar-fixed">
                            <!-- Start of Sidebar Overlay -->
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                            <a href="#" class="sidebar-toggle"><i class="w-icon-angle-right"></i></a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar">

                                    <div class="widget widget-collapsible widget-categories slider-range slider-range-secondary">
                                        <h3 class="widget-title"><span>Price Range</span></h3>
                                        <div class="custom-radio ">
                                            <?php
                                            $qry = "SELECT max(price) as max_price, min(price) as min_price FROM `marketplace_services` WHERE site_id = $this_site_id AND status = 1 AND verified = 1 AND save_type = 'ORG' ";
                                            $tmp = mysqli_query($conn, $qry);
                                            $prices = mysqli_fetch_assoc($tmp);
                                            ?>
                                            <input type="hidden" name="min_price" id="min_price" value="<?php echo $prices['min_price'] ?>">
                                            <input type="hidden" name="max_price" id="max_price" value="<?php echo $prices['max_price'] ?>" readonly class="border-0 amount text-center text-body font-weight-500">
                                            <p id="price"><?php echo $prices['min_price'] ?>&#8377; - <?php echo $prices['max_price'] ?>&#8377;</p>
                                            <div id="price_range"></div>
                                        </div>
                                    </div>

                                    <div class="widget widget-collapsible widget-categories">
                                        <h3 class="widget-title"><span>All Categories</span></h3>
                                        <ul class="shipping-methods mb-2">
                                            <?php
                                            $categoryPreselected = str_replace("_","&",$_GET['category']);
                                            

                                            $cat_sql = "select distinct(cat_id) from marketplace_services WHERE site_id = '$this_site_id' AND status = 1 AND verified = 1 AND save_type = 'ORG' ";
                                            if ($given_category != 'All') {
                                                $cat_sql .= " AND cat_id = '" . realEscape($given_category) . "' ";
                                            }

                                            $cat_row = $conn->query($cat_sql);
                                            if (!$cat_row) {
                                                errlog(mysqli_error($conn), $cat_sql);
                                            } else {
                                                while ($cat_res = $cat_row->fetch_assoc()) {
                                                    if (!empty($cat_res["cat_id"])) {
                                            ?>

                                                        <li>
                                                            <div class="custom-radio">
                                                                <input <?php
                                                                        if(htmlspecialchars($cat_res["cat_id"]) == htmlspecialchars($categoryPreselected)) echo "checked";
                                                                        ?>
                                                                type="checkbox" id="<?php echo ($cat_res["cat_id"]); ?>" value="<?php echo (htmlspecialchars($cat_res["cat_id"])); ?>" class="common sub_category custom-control-input" name="sub_category">
                                                                <label for="<?php echo ($cat_res["cat_id"]); ?>" class="custom-control-label color-dark"><?php echo (htmlspecialchars($cat_res["cat_id"])); ?></label>
                                                            </div>
                                                        </li>
                                            <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>

                                    <?php
                                    $pos_sql = "select distinct(label) from marketplace_services WHERE site_id = '$this_site_id' AND status = 1 AND verified = 1 AND label != '' AND label IS NOT NULL AND save_type = 'ORG' ";
                                    if ($given_category != 'All') {
                                        $pos_sql .= " AND cat_id = '" . realEscape($given_category) . "' ";
                                    }
                                    $pos_row = $conn->query($pos_sql);

                                    $num = mysqli_fetch_all($pos_row, MYSQLI_ASSOC);
                                    if (count($num) > 0) {
                                        // echo "<pre>" ;
                                        // print_r($num) ;
                                        // echo "</pre>" ;
                                    ?>
                                        <div class="widget widget-collapsible widget-time">
                                            <h3 class="widget-title"><span><i class="far fa-clock"></i>Label</span>
                                            </h3>
                                            <ul class="shipping-methods mb-2">
                                                <?php

                                                if (!$pos_row) {
                                                    errlog(mysqli_error($conn), $pos_sql);
                                                } else {
                                                    foreach ($num as $pos_res) {
                                                        if (!empty($pos_res["label"])) {
                                                            if ($pos_res["label"] == '1') {
                                                                $s = "featured";
                                                            } elseif ($pos_res["label"] == '2') {
                                                                $s = "promoted";
                                                            } elseif ($pos_res["label"] == '3') {
                                                                $s = "ads";
                                                            } else {
                                                                $s = htmlspecialchars($pos_res["label"]);
                                                            }
                                                ?>

                                                            <li>
                                                                <div class="custom-radio">
                                                                    <input type="checkbox" id="<?php echo $conn->real_escape_string($pos_res["label"]); ?>" value="<?php echo $conn->real_escape_string(htmlspecialchars($pos_res["label"])); ?>" class="common label custom-control-input" name="position">
                                                                    <label for="<?php echo $conn->real_escape_string($pos_res["label"]); ?>" class="custom-control-label color-dark"><?php echo $s; ?></label>
                                                                </div>
                                                            </li>
                                                <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </aside>
                        <!-- End of Sidebar -->

                        <div class="main-content">
                            <div class="tab tab-nav-underline tab-nav-boxed tab-vendor-wcfm">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="#tab-1" class="nav-link active">Jobs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-2" class="nav-link">Recruiter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-3" class="nav-link">Companies</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-4" class="nav-link">Reviews(1)</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-1">
                                        <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                            <div class="toolbox-left">
                                                <div class="toolbox-item toolbox-sort select-box text-dark">
                                                    <label>Sort By :</label>
                                                    <select name="orderby" class="form-control common" id="sort">
                                                        <option value="default" selected="selected">Default sorting
                                                        </option>

                                                        <option value="id desc">Sort by latest</option>
                                                        <option value="id asc">Sort by Oldest</option>
                                                        <option value="service_name asc">A - Z</option>
                                                        <option value="service_name desc">Z - A </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </nav>

                                        <?php
                                        $sql = "SELECT a.*, b.image_url FROM marketplace_services a 
                                                INNER JOIN categories b WHERE a.site_id = $this_site_id AND
                                                a.status = 1 AND a.verified = 1 AND a.cat_id = '$categoryPreselected' AND 
                                                b.category_title = '$categoryPreselected' AND b.category_type = 'main' AND 
                                                b.marketplace_id = 16";

                                        $res = mysqli_query($conn, $sql);
                                        foreach($res as $row){
                                        ?>
                                        <div class="product-wrap" style="padding: 1em;">
                                        <div class="product text-center">
                                            
                                        <h1>Aditya</h1>
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="<?php echo $row['image_url']; ?>" alt="product_image" style="height: 250px;">
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
                                                    <a href="#"><?php echo $row['service_name']; ?></a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="#"><?php echo $row['cat_id']; ?></a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                        <?php } ?>


                                    </div>

                                    <div class="tab-pane" id="tab-2">
                                        <p class="mb-4"><strong>L</strong>orem ipsum dolor sit amet, consectetur
                                            adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Venenatis tellus in metus vulputate eu scelerisque felis. Vel
                                            pretium lectus quam id leo in vitae turpis massa. Nunc id cursus
                                            metus aliquam. Libero id faucibus nisl tincidunt eget. Aliquam
                                            id diam maecenas ultricies mi eget mauris.</p>
                                        <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt tellus in metus vulputate eu scelerisque
                                            felis. Vel pretium lectus quam id leo. id faucibus nisl tincidunt eget.
                                            Aliquam id diam maecenas ultricies mi eget mauris. ut labore et dolore magna
                                            aliqua. Venenatis.</p>
                                    </div>
                                    <div class="tab-pane" id="tab-3">
                                        <div class="policies-area">
                                            <h3 class="title">Shipping Policy</h3>
                                            <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipiscing elit,
                                                sed do eiusmod tempor incididunt arcu cursus. Sagittis id consectetur
                                                purus
                                                ut. Tellus rutrum tellus pelle.</p>
                                        </div>
                                        <div class="policies-area">
                                            <h3 class="title">Refund Policy</h3>
                                            <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipiscing elit,
                                                sed do eiusmod tempor incididunt arcu cursus. Sagittis id consectetur
                                                purus ut. Tellus rutrum tellus pelle.</p>
                                        </div>
                                        <div class="policies-area">
                                            <h3 class="title text-left">Cancellation / Return / Exchange Policy</h3>
                                            <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipiscing elit,
                                                sed do eiusmod tempor incididunt arcu cursus. Sagittis id consectetur
                                                purus ut. Tellus rutrum tellus pelle.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-4">
                                        <div class="review-area">
                                            <h3 class="title font-weight-bold mb-5">Write A Review</h3>
                                            <input name="review" type="text" class="form-control" placeholder="your review">
                                            <button class="btn btn-rounded">Add Your Review</button>
                                        </div>
                                        <!-- End of Reveiw Area -->
                                        <div class="review-area">
                                            <h3 class="title font-weight-bold mb-5">Reviews</h3>
                                            <div class="reviewers d-flex align-items-center flex-wrap mb-7">
                                                <div class="reviewers-picture d-flex mr-2">
                                                    <figure>
                                                        <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar" width="113" height="112" />
                                                    </figure>
                                                    <figure>
                                                        <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar" width="113" height="112" />
                                                    </figure>
                                                    <figure>
                                                        <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar" width="113" height="112" />
                                                    </figure>
                                                </div>
                                                <div class="reviewer-name">
                                                    <a href="#" class="font-weight-bold mr-1">John Doe</a>has reviewed
                                                    this store
                                                </div>
                                            </div>
                                            <!-- End of Reviewers -->
                                            <div class="review-ratings">
                                                <div class="review-ratings-left mr-auto">
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Feature</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Varity</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Flexibility</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Delivery</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Support</label>
                                                    </div>
                                                </div>
                                                <!-- End of Review Ratings Left -->
                                                <div class="review-ratings-right">
                                                    <div class="average-rating">5.0<sub>/5</sub></div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full mr-0">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End of Review Ratings Right -->
                                            </div>
                                            <!-- End of Review Ratings -->
                                            <div class="user-wrap">
                                                <div class="user-photo">
                                                    <figure>
                                                        <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar" width="113" height="112" />
                                                    </figure>
                                                    <div class="rated text-center">
                                                        <label>Rated</label>
                                                        <span class="score">5.0</span>
                                                    </div>
                                                </div>
                                                <!-- End of User Photo -->
                                                <div class="user-info">
                                                    <h4 class="user-name">John Doe</h4>
                                                    <div class="user-date mb-7">
                                                        <span>1 Reviews</span>
                                                        <span>April 1, 2021 12:12 Pm</span>
                                                    </div>
                                                    <p>Diam in arcu cursus euismod quis. Eget sit amet tellusvitae
                                                        sapien pellentesque habitant morbi tristique senectus et.
                                                        Cras adipiscing enim ermentum et sollicitudin ac orci phasellus.
                                                    </p>
                                                </div>
                                                <!-- End of User Info -->
                                                <div class="review-ratings">
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Feature</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Varity</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Flexibility</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Delivery</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Support</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of User Wrap -->
                                        </div>
                                        <!-- End of Reveiw Area -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Main Content -->
                    </div>
                </div>
            </div>


            <div class="product product-single product-popup">
                <div class="row gutter-lg">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="product-gallery product-gallery-sticky">
                            <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                <div class="swiper-wrapper row cols-1 gutter-no" id="quickPart1">
                                    <div class="swiper-slide">
                                        <figure class="product-image">
                                            <img src="../assets/images/products/brand/loadingImage.jpg" data-zoom-image="../assets/images/products/brand/loadingImage.jpg" alt="Water Boil Black Utensil" width="800" height="900">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <button class="swiper-button-next"></button>
                            <button class="swiper-button-prev"></button>
                        </div>
                        <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                        'navigation': {
                            'nextEl': '.swiper-button-next',
                            'prevEl': '.swiper-button-prev'
                        }
                    }">
                            <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm" id="quickPart3">
                                <div class="product-thumb swiper-slide">
                                    <!-- <img src="../assets/images/products/brand/loadingImage.jpg" alt="Product Thumb" width="103" height="116"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 overflow-hidden p-relative">
                        <div class="product-details scrollable pl-0" id="quickPart2">
                            <h2 class="product-title"><b>Loading..</b></h2>
                            <div class="product-meta" style="font-size:12px;">
                                <div class="product-categories">
                                    <i class="w-icon-cog"></i> Descripition:<span class="product-category"><a href="#"><b> Loading... </b></a></span>
                                </div>

                                <div class="sold-by"> Posted <a href="#">:Loading..</a></div>
                                <div class="sold-by"> Profile Added :<a href="#">Loading...</a></div>
                                <div class="social-links-wrapper">

                                    <span class="divider d-xs-show"></span>
                                    <div class="product-link-wrapper d-flex">
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                        <a href="#" class="btn-product-icon btn-compare btn-icon-left  w-icon-call"></a>
                                    </div>
                                </div>
                                <hr class="product-divider">
                                <div class="product-form">
                                    <button class="btn btn-primary btn-cart">
                                        <i class="w-icon-cart"></i>
                                        <span>Apply</span>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <!-- <?php include 'shop_footer.php'; ?> -->
        <!-- End of Footer -->
    </div>
    <!-- End of Page-wrapper -->


    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>

    <!-- Start of Quick View -->






    <!-- End of Quick view -->

    <!-- Plugin JS File -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/sticky/sticky.js"></script>
    <script src="../assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/nouislider/nouislider.min.js"></script>
    <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/vendor/zoom/jquery.zoom.js"></script>
    <script src="../assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="../assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <script>
        function quick(thi) {
            // console.log('hii');


            var id = $(thi).parents("div").attr("id");

            var action = 'data';

            $.ajax({

                url: "filter_service.php",
                type: "POST",
                data: {
                    quickPart1: action,
                    id: id
                },

                success: function(data) {

                    $('#quickPart1').replaceWith(data);
                    window.dispatchEvent(new Event('resize'));
                }
            });

            $.ajax({

                url: "filter_service.php",
                type: "POST",
                data: {
                    quickPart2: action,
                    id: id
                },

                success: function(data) {

                    $('#quickPart2').replaceWith(data);
                    window.dispatchEvent(new Event('resize'));
                }
            });

        }


        function filterdata(classname) {
            // console.log("class " + classname);
            var filter = '';
            $('.' + classname + ':checked').each(function() {
                filter += "," + ($(this).val());
            });
            return filter;
        }


        function data2() {
            // console.log('hi');
            $("#loadMoreServices").html("Loading..");
            $("#loadMoreServices").attr("disabled", true);

            var sub_cat = filterdata("sub_category");
            var tsg = filterdata("tags");
            var label = filterdata("label");
            var category = $("#category").val();
            var min = $('#min_price').val();
            var max = $('#max_price').val();

            var sort = $('#sort').val();

            // console.log(sub_cat);
            // return;

            var action = 'data';

            $.ajax({

                url: "filter_service.php",
                type: "POST",
                data: {
                    loadMore: action,
                    category: category,
                    sub_category: sub_cat,
                    tags: tsg,
                    label: label,
                    min: min,
                    max: max,
                    sort: sort
                },
                beforeSend: function() {
                },
                success: function(data) {

                    $("#loadMoreServices").html("Load More");
                    $("#loadMoreServices").attr("disabled", false);
                    $('#data_div').append(data);
                }
            });
        }

        function data() {
            // console.log('hi');
            $("#loadMoreServices").html("Loading..");
            $("#loadMoreServices").attr("disabled", true);

            var sub_cat = filterdata("sub_category");
            var tsg = filterdata("tags");
            var label = filterdata("label");
            var category = $("#category").val();
            var min = $('#min_price').val();
            var max = $('#max_price').val();

            var sort = $('#sort').val();

            // console.log(sub_cat);
            // return;

            var action = 'data';

            $.ajax({

                url: "filter_service.php",
                type: "POST",
                data: {
                    action: action,
                    category: category,
                    sub_category: sub_cat,
                    tags: tsg,
                    label: label,
                    min: min,
                    max: max,
                    sort: sort
                },
                beforeSend: function() {
                    $('#data_div').html('<div class="row">' +
                        '<div class="col-sm-12 text-center">' +
                        '<div class="display-2" style="font-size: 30px; font-weight: 900;">Loading...</div>' +
                        '</div>' +
                        '</div>');
                },
                success: function(data) {
                    $("#loadMoreServices").html("Load More");
                    $("#loadMoreServices").attr("disabled", false);
                    $('#data_div').html(data);
                }
            });
        }



        $(document).ready(function() {
            // data();
            data();

            $("#loadMoreServices").on("click", function() {
                data2();
            })

            $('#price_range').slider({
                range: true,
                min: <?php echo $prices['min_price'] ?>,
                max: <?php echo $prices['max_price'] ?>,
                values: [<?php echo $prices['min_price'] ?>, <?php echo ($prices['max_price'] + $prices['min_price']) / 2 ?>],
                step: <?php echo ($prices['max_price'] - $prices['min_price']) / 100 ?>,
                stop: function(event, ui) {
                    $('#price').html(ui.values[0] + '&#8377;-' + ui.values[1] + '&#8377;');
                    $('#min_price').val(ui.values[0]);
                    $('#max_price').val(ui.values[1]);
                    data();
                }
            })



            $('.common').on('change', function xyz() {


                data();

            })



        })
    </script>

</body>

</html>