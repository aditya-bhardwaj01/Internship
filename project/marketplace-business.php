<?php
include "../config/connection.php";

$business_shop = "business";

$cat_sql = "select Max(Max_Investment_Range) as max from marketplace_business where site_id = '$this_site_id' and status='1'";
$cat_row = $conn->query($cat_sql);
if (!$cat_row) {
    errlog(mysqli_error($conn), $cat_sql);
} else {
    $cat_res = $cat_row->fetch_assoc();
    $max_A = $cat_res["max"];
}
?>


<!DOCTYPE html>
<html lang="en">

<?php include 'site_head.php'; ?>

<body>
    <!-- Start of Pgae Wrapper -->
    <div class="page-wrapper">
        <!-- Start of Header -->
        <?php include 'shop_header.php'; ?>
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
                                    <div class="widget widget-collapsible widget-categories">
                                        <h3 class="widget-title"><span>All Categories</span></h3>
                                        <ul class="shipping-methods mb-2">
                                            <?php
                                            $cat_sql = "select distinct(Category) from marketplace_business where site_id = '$this_site_id' and status='1'";
                                            $cat_row = $conn->query($cat_sql);
                                            if (!$cat_row) {
                                                errlog(mysqli_error($conn), $cat_sql);
                                            } else {
                                                while ($cat_res = $cat_row->fetch_assoc()) {
                                                    if (!empty($cat_res["Category"])) {
                                            ?>

                                                        <li>
                                                            <div class="custom-radio">
                                                                <input type="checkbox" id="<?php echo htmlspecialchars($cat_res["Category"]); ?>" value="<?php echo (htmlspecialchars($cat_res["Category"])); ?>" class="common Category custom-control-input" name="$res">
                                                                <label for="<?php echo htmlspecialchars($cat_res["Category"]); ?>" class="custom-control-label color-dark"><?php echo (htmlspecialchars($cat_res["Category"])); ?></label>
                                                            </div>
                                                        </li>
                                            <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </ul>

                                    </div>
                                    <div class="widget widget-collapsible widget-categories">
                                        <h3 class="widget-title"><span>Max Price Range</span></h3>
                                        <div class="custom-radio ">
                                            <input type="hidden" name="min_price" id="min_price" value="100">
                                            <input type="hidden" name="max_price" id="max_price" value="<?= $max_A ?>" readonly class="border-0 amount text-center text-body font-weight-500">
                                            <p id="price">100&#8377; - <?= $max_A ?>&#8377;</p>

                                            <div id="price_range"></div>
                                        </div>
                                        </div-->
                                        <!-- End of Widget -->
                                        <div class="widget widget-collapsible widget-time">
                                            <h3 class="widget-title"><span>Business_Type</span>
                                            </h3>
                                            <ul class="shipping-methods mb-2">
                                                <?php
                                                $cat_sql = "select distinct(Business_Type) from marketplace_business where site_id = '$this_site_id' and status='1'";
                                                $cat_row = $conn->query($cat_sql);
                                                if (!$cat_row) {
                                                    errlog(mysqli_error($conn), $cat_sql);
                                                } else {
                                                    while ($cat_res = $cat_row->fetch_assoc()) {
                                                        if (!empty($cat_res["Business_Type"])) {
                                                ?>

                                                            <li>
                                                                <div class="custom-radio">
                                                                    <input type="checkbox" id="<?php echo htmlspecialchars($cat_res["Business_Type"]); ?>" value="<?php echo (htmlspecialchars($cat_res["Business_Type"])); ?>" class="common urgency custom-control-input" name="$res">
                                                                    <label for="<?php echo htmlspecialchars($cat_res["Business_Type"]); ?>" class="custom-control-label color-dark"><?php echo (htmlspecialchars($cat_res["Business_Type"])); ?></label>
                                                                </div>
                                                            </li>
                                                <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <!-- End of Widget -->

                                        <!-- End of Widget -->
                                        <!-- End of Widget -->
                                    </div>
                                </div>
                        </aside>
                        <!-- End of Sidebar -->

                        <div class="main-content">
                            <div class="tab tab-nav-underline tab-nav-boxed tab-vendor-wcfm">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="#tab-1" class="nav-link active">Jobas</a>
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
                                                        <option value="Business_Name asc">A - Z</option>
                                                        <option value="Business_Name desc">Z - A </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="toolbox-right">

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
                                        <div class="product-wrapper row cols-md-4 cols-sm-2 cols-2" id="data_div">

                                        </div>

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
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->

        <!-- End of Footer -->
    </div>
    <!-- End of Page-wrapper -->
    <!-- End of Mobile Menu -->

    <!-- Start of Quick View -->
    <div class="product product-single product-popup">
        <div class="row gutter-lg">
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="product-gallery product-gallery-sticky mb-0">
                    <div class="product-single-swiper swiper-container swiper-theme nav-inner row cols-1 gutter-no">
                        <figure class="product-image">
                            <img src="assets/images/pages/about_us/4.jpg" data-zoom-image="assets/images/pages/about_us/4.jpg" alt="seeker name" width="800" height="900">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-md-9 overflow-hidden p-relative">
                <div class="product-details scrollable pl-0">
                    <h2 class="product-title">Seeker Name</h2>
                    <h6 class="product-name"><a href="product-default.html">I'm an Ecommerce Expert and consultant with 7 years of experience in Seller Account / Marketplace Management. I've expertise in overseas marketplaces, specially into following.</a></h6>
                    <div class="product-meta" style="font-size:12px;">
                        <div class="product-categories">
                            <i class="w-icon-cog"></i> Experience:<span class="product-$res"><a href="#">5 yrs</a></span>
                        </div>
                        <div class="product-sku"> <i class="w-icon-wallet2"></i> Availability: <span>Notice Period</span></div>
                        <div class="product-sku mt-3"> <i class="w-icon-map-marker"></i> Location: <span>NCR/Delhi</span></div>
                    </div>
                    <div class="widget-body tags">
                        <a href="#" class="tag">Fashion</a>
                        <a href="#" class="tag">Style</a>
                        <a href="#" class="tag">Travel</a>
                        <a href="#" class="tag">Travel</a>
                        <a href="#" class="tag">Travel</a>
                        <a href="#" class="tag">Travel</a>

                    </div>
                    <div class="sold-by"> Posted <a href="#">13 mins ago</a></div>
                    <div class="sold-by"> Profile Added <a href="#">Self</a></div>

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
    <!-- End of Quick view -->


    <!-- Plugin JS File -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="../assets/vendor/sticky/sticky.min.js"></script>
    <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Main JS -->
    <script src="../assets/js/main.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>



</body>

</html>
<script>
    $(document).ready(function() {
        data();


        function data() {
            console.log('hi');

            var cat = filterdata("Category");

            var urgency = filterdata("urgency");

            var m_price = $('#max_price').val();
            var l_price = $('#min_price').val();

            console.log(m_price);
            console.log(l_price);

            var sort = $('#sort').val();

            var action = 'data';

            $.ajax({

                url: "filter_business.php",
                type: "POST",
                data: {
                    action: action,
                    category: cat,

                    type: urgency,
                    max: m_price,
                    min: l_price,

                    sort: sort

                },
                success: function(data) {

                    $('#data_div').html(data);
                }
            });
        }


        $('.common').on('change', function xyz() {


            var cat = filterdata("Category");

            var urgency = filterdata("urgency");

            var m_price = $('#max_price').val();
            var l_price = $('#min_price').val();



            var sort = $('#sort').val();
            console.log(sort);
            var action = 'data';

            $.ajax({

                url: "filter_business.php",
                type: "POST",
                data: {
                    action: action,
                    category: cat,

                    type: urgency,
                    max: m_price,
                    min: l_price,

                    sort: sort
                },
                success: function(data) {

                    $('#data_div').html(data);
                }
            });


        })

        function filterdata(classname) {
            var filter = [];
            $('.' + classname + ':checked').each(function() {
                filter.push($(this).val());
            });
            return filter;
        }

        var max = <?= $max_A ?>;
        console.log(max)
        $('#price_range').slider({
            range: true,
            min: 100,
            max: max,
            values: [100, max],
            step: 100,
            stop: function(event, ui) {
                $('#price').html(ui.values[0] + '$-' + ui.values[1] + '$');
                $('#min_price').val(ui.values[0]);
                $('#max_price').val(ui.values[1]);
                data();
            }
        })


        $('.head').on('input', function xyz() {


            var sort = $('#sort').val();

            var head = $("#category").val();
            var search = $("#search").val();

            var action = 'service';

            console.log(head);
            console.log(search);

            $.ajax({

                url: "filter_business.php",
                type: "POST",
                data: {
                    action: action,
                    sort: sort,
                    search: search,
                    head: head,

                },
                success: function(data) {

                    $('#data_div').html(data);
                }
            });


        })


    })
</script>