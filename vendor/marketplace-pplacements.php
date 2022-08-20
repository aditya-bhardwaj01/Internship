<?php
include '../config/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart eCommmerce Marketplace HTML Template</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="../assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="../assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.min.css">

    <!-- preloading link
    <link rel="preload" href="assets/fonts/venedor.woff" as="font" type="font/woff" crossorigin="anonymous"> -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.min.css">

</head>

<body>
    <!-- Start of Pgae Wrapper -->
    <div class="page-wrapper">
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
                                    <div class="widget widget-collapsible widget-categories">
                                        <h3 class="widget-title"><span>All Categories</span></h3>
                                        <ul class="shipping-methods mb-2">
                                            <?php
                                            $sql = "select distinct(category) as category from marketplace_placements where site_id=$this_site_id";
                                            $res = mysqli_query($conn, $sql);
                                            if (!$res) {
                                                errlog(mysqli_error($conn), $sql);
                                            }

                                            foreach ($res as $row) {
                                            ?>
                                                <li>
                                                    <div class="custom-radio">
                                                        <input type="radio" id="<?php echo htmlspecialchars($row['category']); ?>" 
                                                        class="custom-control-input" name="shipping" onchange="applyFilter('category', '<?php echo htmlspecialchars($row['category']); ?>')">
                                                        <label for="<?php echo htmlspecialchars($row['category']); ?>" class="custom-control-label color-dark"><?php echo htmlspecialchars($row['category']); ?></label>
                                                    </div>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                            <!-- <li>
                                                <div class="custom-radio">
                                                    <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                    <label for="free-shipping" class="custom-control-label color-dark">Category 1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-radio">
                                                    <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                    <label for="free-shipping" class="custom-control-label color-dark">Category 1</label>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="widget widget-collapsible widget-categories">
                                        <h3 class="widget-title"><span>City</span></h3>
                                        <ul class="shipping-methods mb-2">
                                            <?php
                                            $sql = "select distinct(city) as city from marketplace_placements where site_id=$this_site_id";
                                            $res = mysqli_query($conn, $sql);
                                            if (!$res) {
                                                errlog(mysqli_error($conn), $sql);
                                            }

                                            foreach ($res as $row) {
                                            ?>
                                                <li>
                                                    <div class="custom-radio">
                                                        <input type="radio" id="<?php echo htmlspecialchars($row['city']); ?>" 
                                                        class="custom-control-input" name="shipping" onchange="applyFilter('city', '<?php echo htmlspecialchars($row['city']); ?>')">
                                                        <label for="<?php echo htmlspecialchars($row['city']); ?>" class="custom-control-label color-dark"><?php echo htmlspecialchars($row['city']); ?></label>
                                                    </div>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                            <!-- <li>
                                                <div class="custom-radio">
                                                    <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                    <label for="free-shipping" class="custom-control-label color-dark">Category 1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-radio">
                                                    <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                    <label for="free-shipping" class="custom-control-label color-dark">Category 1</label>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible widget-categories">
                                        <h3 class="widget-title"><span>Open for</span>
                                        </h3>
                                        <ul class="shipping-methods mb-2">
                                            <?php
                                            $sql = "select distinct(open_for) as open_for from marketplace_placements where site_id=$this_site_id";
                                            $res = mysqli_query($conn, $sql);
                                            if (!$res) {
                                                errlog(mysqli_error($conn), $sql);
                                            }

                                            foreach ($res as $row) {
                                            ?>
                                                <li>
                                                    <div class="custom-radio">
                                                        <input type="radio" id="<?php echo htmlspecialchars($row['open_for']); ?>" 
                                                        class="custom-control-input" name="shipping" onchange="applyFilter('open_for', '<?php echo htmlspecialchars($row['open_for']); ?>')">
                                                        <label for="<?php echo htmlspecialchars($row['open_for']); ?>" class="custom-control-label color-dark"><?php echo htmlspecialchars($row['open_for']); ?></label>
                                                    </div>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                            <!-- <li>
                                                <div class="custom-radio">
                                                    <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                    <label for="free-shipping" class="custom-control-label color-dark">Category 1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-radio">
                                                    <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                    <label for="free-shipping" class="custom-control-label color-dark">Category 1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-radio">
                                                    <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                    <label for="free-shipping" class="custom-control-label color-dark">Category 1</label>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><span>Suitable for</span>
                                        </h3>
                                        <ul class="shipping-methods mb-2">

                                            <?php
                                            $sql = "select distinct(suitable_for) as suitable_for from marketplace_placements where site_id=$this_site_id";
                                            $res = mysqli_query($conn, $sql);
                                            if (!$res) {
                                                errlog(mysqli_error($conn), $sql);
                                            }

                                            foreach ($res as $row) {
                                            ?>
                                                <li>
                                                    <div class="custom-radio">
                                                        <input type="radio" id="<?php echo htmlspecialchars($row['suitable_for']); ?>" 
                                                        class="custom-control-input" name="shipping" onchange="applyFilter('suitable_for', '<?php echo htmlspecialchars($row['suitable_for']); ?>')">
                                                        <label for="<?php echo htmlspecialchars($row['suitable_for']); ?>" class="custom-control-label color-dark"><?php echo htmlspecialchars($row['suitable_for']); ?></label>
                                                    </div>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                            <!-- <li>
                                                <div class="custom-radio">
                                                    <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                    <label for="free-shipping" class="custom-control-label color-dark">Location 1</label>
                                                </div>
                                            </li> -->
                                            <!-- <li>
                                                <div class="custom-radio">
                                                    <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                    <label for="free-shipping" class="custom-control-label color-dark">Location 1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-radio">
                                                    <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                    <label for="free-shipping" class="custom-control-label color-dark">Location 1</label>
                                                </div>
                                            </li>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <!-- End of Widget -->

                                    <div class="widget widget-collapsible widget-categories">
                                        <h3 class="widget-title"><span>Label</span>
                                        </h3>
                                        <ul class="shipping-methods mb-2">
                                            <?php
                                            $sql = "select distinct(label) as label from marketplace_placements where site_id=$this_site_id";
                                            $res = mysqli_query($conn, $sql);
                                            if (!$res) {
                                                errlog(mysqli_error($conn), $sql);
                                            }

                                            foreach ($res as $row) {
                                            ?>
                                                <li>
                                                    <div class="custom-radio">
                                                        <?php
                                                        if ($row['label'] == 1) { ?>
                                                            <input type="radio" id="promoted" 
                                                            class="custom-control-input" name="shipping" onchange="applyFilter('label', 'Promoted')">
                                                            <label for="promoted" class="custom-control-label color-dark">Promoted</label>
                                                        <?php } else if ($row['label'] == 2) { ?>
                                                            <input type="radio" id="sponsored" 
                                                            class="custom-control-input" name="shipping" onchange="applyFilter('label', 'Sponsored')">
                                                            <label for="sponsored" class="custom-control-label color-dark">Sponsored</label>
                                                        <?php } else if ($row['label'] == 3) { ?>
                                                            <input type="radio" id="featured" 
                                                            class="custom-control-input" name="shipping" onchange="applyFilter('label', 'Featured')">
                                                            <label for="featured" class="custom-control-label color-dark">Featured</label>
                                                        <?php }
                                                        ?>

                                                    </div>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                            <!-- <li>
                                                <div class="custom-radio">
                                                    <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                    <label for="free-shipping" class="custom-control-label color-dark">Category 1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-radio">
                                                    <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                    <label for="free-shipping" class="custom-control-label color-dark">Category 1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-radio">
                                                    <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                    <label for="free-shipping" class="custom-control-label color-dark">Category 1</label>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible widget-products">
                                        <h3 class="widget-title"><span>Latest Matching Jobs</span></h3>
                                        <div class="widget-body">
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/1.jpg" alt="Product" width="100" height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="product-default.html">3D Television</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$220.00</div>
                                                </div>
                                            </div>
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/2-1.jpg" alt="Product" width="100" height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="product-default.html">Alarm Clock With Lamp</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <ins class="new-price">$30.00</ins><del class="old-price">$60.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/3.jpg" alt="Product" width="100" height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="product-default.html">Apple Laptop</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$1,000.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                        <div class="col-md-4 col-6">
                                            <div class="swiper-slide product product-image-gap product-simple">
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">Category</label>
                                                </div>

                                                <div id="main-productarea">
                                                <?php
                                                $sql = "select a.*, b.image_url from marketplace_placements a inner join product_images b
                                                where a.site_id=$this_site_id and a.id=b.product_id and b.type='IMAGE' and b.main=1 and b.marketplace_id=10";
                                                $res = mysqli_query($conn, $sql);
                                                if (!$res) {
                                                    errlog(mysqli_error($conn), $sql);
                                                }

                                                foreach ($res as $row) {
                                                ?>
                                                    <figure class="product-media">
                                                        <a href="product-default.html">
                                                            <img src="<?php echo htmlspecialchars($row['image_url']) ?>" alt="Product" width="295" height="335" />
                                                        </a>
                                                        <div class="product-action-vertical">
                                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">

                                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                                        <h4 class="product-name">
                                                            <a href="product-default.html"><?php echo htmlspecialchars($row['site_title']) ?></a>
                                                        </h4>
                                                        <p><span class="flaticon-placeholder"></span> <?php echo htmlspecialchars($row['city']) ?>, <?php echo htmlspecialchars($row['state']) ?></p>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 col-xs-2">
                                                                <div class="icon-box text-center">
                                                                    <div class="icon-box-content">
                                                                        <h4 class="icon-box-title">Availability</h4>
                                                                        <div class="product-cat">
                                                                            <a href="#"><?php echo htmlspecialchars($row['available_for']) ?></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-xs-2">
                                                                <div class="icon-box text-center">
                                                                    <div class="icon-box-content">
                                                                        <h4 class="icon-box-title">Engegement</h4>
                                                                        <div class="product-cat">
                                                                            <a href="#"><?php echo htmlspecialchars($row['suitable_for']) ?></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-xs-2">
                                                                <div class="icon-box text-center" role="group">
                                                                    <div class="icon-box-content">
                                                                        <h4 class="icon-box-title">Open for</h4>
                                                                        <div class="product-cat">
                                                                            <a href="#"><?php echo htmlspecialchars($row['open_for']) ?></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-pa-wrapper">
                                                            <div class="product-action">
                                                                <a href="#" class="btn-cart btn-product btn btn-link btn-underline">View Property
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                </div>
                                            </div>
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

    <!-- Start of Sticky Footer -->
    <!--div class="sticky-footer sticky-content fix-bottom">
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
                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84" width="94" />
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
                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84" height="94" />
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
    <!--/div>

        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Search</p>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div-->
    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->
    <!--div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>
        <!-- End of .mobile-menu-overlay -->

    <!--a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
        <!-- End of .mobile-menu-close -->

    <!--div class="mobile-menu-container scrollable">
            <form action="#" method="get" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
    <!--div class="tab">
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
                                        <li><a href="shop-horizontal-filter.html">Horizontal Filter<span
                                                    class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span
                                                    class="tip tip-new">New</span></a></li>
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
                                        <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span
                                                    class="tip tip-new">New</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Layouts</a>
                                    <ul>
                                        <li><a href="product-default.html">Default<span
                                                    class="tip tip-hot">Hot</span></a></li>
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
                            <a href="shop-banner-sidebar.html"
                                class="font-weight-bold text-primary text-uppercase ls-25">
                                View All Categories<i class="w-icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div-->
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
                            <i class="w-icon-cog"></i> Experience:<span class="product-category"><a href="#">5 yrs</a></span>
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

    <script src="https://maps.googleapis.com/maps/api/js?key="></script>

    <script>
        function applyFilter(type, filter){
            $.ajax({
                url: "marketplace_pplacements_helper.php",
                type: "POST",
                data: {
                    type: type,
                    filter: filter
                },
                success: function(result) {
                    document.getElementById("main-productarea").innerHTML = result;
                }
            })
        }
    </script>
</body>

</html>