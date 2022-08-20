<?php

include 'common_section/head.php';
include 'common_section/header.php';
include 'common_section/footer.php';
include 'common_section/head_tag.php';
include './marketplace_ids.php';

?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- product.html  [XR&CO'2014], 1 08:12:29 1 -->

<head>
    <?php echo $head_tag; ?>
</head>

<body id="bdy">

    <!-- Start PreLoader 
    ============================================= -->
    <section>
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="L" class="letters-loading">
                            L
                        </span>

                        <span data-text-preloader="O" class="letters-loading">
                            O
                        </span>

                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>

                        <span data-text-preloader="D" class="letters-loading">
                            D
                        </span>

                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>

                        <span data-text-preloader="N" class="letters-loading">
                            N
                        </span>

                        <span data-text-preloader="G" class="letters-loading">
                            G
                        </span>
                    </div>
                </div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    </section>
    <!-- Start PreLoader-->

    <!-- Start header
    ============================================= -->
    <?php echo $head; ?>
    <!-- End header -->

    <main class="main">

        <!-- Start Breadcrumb
		============================================= -->
        <?php echo $header_part1 . 'Products' . $header_part2 . 'Products' . $header_part3; ?>
        <!-- End Breadcrumb -->

        <!-- Start Product
		============================================= -->
        <div class="product-area de-padding">
            <div class="container">
                <div class="product-wpr">
                    <div class="row ps g-5">
                        <div class="col-xl-8">
                            <div class="product-grid-app grid-2" id="products-holder-section">
                                <?php
                                foreach ($marketplace_ids as $id) {
                                    $sql = "SELECT a.id, a.vendor_id, a.cat_id, a.sub_cat_id, a.banner,
                            a.title, a.description, a.specifictaions, a.tags, a.views, a.price, b.name FROM
                            marketplace_digital_products a INNER JOIN vendor b ON a.status=1 AND b.id = a.vendor_id
                            AND a.marketplace_id = $id AND a.site_id = $this_site_id";

                                    $res = mysqli_query($conn, $sql);

                                    foreach ($res as $row) { ?>
                                        <div class="work-box wow fadeInUp">
                                            <a href="theme-single.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>" class="work-pic">
                                                <img style="height: 280px;" src="<?php echo $row['banner']; ?>" alt="MaanSoft">
                                            </a>
                                            <div class="work-desc">
                                                <a href="theme-single.html">
                                                    <h5 class="work-title">
                                                        <?php echo $row['title']; ?>
                                                    </h5>
                                                </a>
                                                <div class="work-meta">
                                                    <ul class="space-between">
                                                        <li>By- <a href="#"><?php echo $row['name']; ?></a></li>
                                                    </ul>
                                                </div>
                                                <div class="work-bottom space-between">
                                                    <div class="work-price">
                                                        <span class="value">$<?php echo $row['price'] ?></span>
                                                    </div>
                                                    <div class="work-btns">
                                                        <ul>
                                                            <li><?php echo $row['views']; ?> Views</li>
                                                            <li><a href="theme-single.html" class="btn-7">Preview</a></li>
                                                            <li>
                                                                <a href="#" class="btn-cart">
                                                                    <img src="assets/img/icons/cart-white.png" alt="MaanSoft">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php 
                                    }
                                } ?>

                            </div>
                            <div class="pagination" id="pagination">
                                <?php
                                $count = ceil($count / 4);
                                $curr = 1;
                                for ($i = 1; $i <= $count; $i++) {
                                ?>
                                    <a href="#"><?php echo $i; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <aside class="sidebar">
                                <!-- Search-->
                                <div class="widget search">
                                    <h5 class="work-title">Search</h5>
                                    <form class="search-form">
                                        <input type="text" class="input-style-2" placeholder="Search">
                                        <button class="btn-sub">
                                            <i><img src="assets/img/icons/search.png" alt="MaanSoft"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- Category -->
                                <div class="widget category">
                                    <h5 class="work-title">Category</h5>
                                    <div class="category-list">
                                        <ul>
                                            <?php

                                            $sql = "SELECT a.id, a.cat_id, d.icon
                                            FROM marketplace_digital_products a INNER JOIN 
                                            categories d ON d.category_type = 'main' AND a.cat_id = d.category_title";

                                            $res = mysqli_query($conn, $sql);
                                            $categories = array();
                                            if (mysqli_num_rows($res) > 0) {
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    if (!in_array($row['cat_id'], $categories)) {
                                            ?>
                                                        <li>
                                                            <a href="course.html">
                                                                <?php echo $row['icon']; ?>
                                                                <span><?php echo $row['cat_id']; ?></span>
                                                            </a>
                                                        </li>
                                            <?php
                                                        array_push($categories, $row['cat_id']);
                                                    }
                                                }
                                            } ?>
                                            <!-- <li>
                                                <a href="course.html">
                                                    <i><img src="assets/img/icons/cat-1.png" alt="MaanSoft"></i>
                                                    <span>Wordpress</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course.html">
                                                    <i><img src="assets/img/icons/cat-5.png" alt="MaanSoft"></i>
                                                    <span>HTML css</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course.html">
                                                    <i><img src="assets/img/icons/cat-3.png" alt="MaanSoft"></i>
                                                    <span>Laravel</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course.html">
                                                    <i><img src="assets/img/icons/cat-4.png" alt="MaanSoft"></i>
                                                    <span>Graphic Design</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course.html">
                                                    <i><img src="assets/img/icons/cat-5.png" alt="MaanSoft"></i>
                                                    <span>Mobile Apps</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="course.html">
                                                    <i><img src="assets/img/icons/cat-6.png" alt="MaanSoft"></i>
                                                    <span>Admin Pannel</span>
                                                </a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <!-- Slide Range -->
                                <div class="widget slide-range">
                                    <h5 class="work-title">Filter by price</h5>
                                    <div class="slidecontainer">
                                        <input type="range" min="1" max="100" value="100" class="slider" id="myRange" onchange="updateProductsForPrice(this.value)">
                                        <p>0 - <span id="demo"></span></p>
                                    </div>
                                </div>
                                <div class="widget dated">
                                    <h5 class="work-title">Date Added</h5>
                                    <div class="date-added-filters" style="padding: 0 0.6em;">
                                        <div class="form-check" style="margin: 20px;">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="all" checked onclick="updateProductsForDate(this.id);">
                                            <label class="form-check-label" for="all">
                                                All
                                            </label>
                                        </div>
                                        <div class="form-check" style="margin: 20px;">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="week" onclick="updateProductsForDate(this.id);">
                                            <label class="form-check-label" for="week">
                                                Last Week
                                            </label>
                                        </div>
                                        <div class="form-check" style="margin: 20px;">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="month" onclick="updateProductsForDate(this.id);">
                                            <label class="form-check-label" for="month">
                                                Last Month
                                            </label>
                                        </div>
                                        <div class="form-check" style="margin: 20px;">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="year" onclick="updateProductsForDate(this.id);">
                                            <label class="form-check-label" for="year">
                                                Last Year
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <ul class="sidebar-rating">
                                        <li>
                                            <span>All</span>
                                            <span>1.23</span>
                                        </li>
                                        <li>
                                            <span>Last Week</span>
                                            <span>2.13</span>
                                        </li>
                                        <li>
                                            <span>Last Month</span>
                                            <span>3.43</span>
                                        </li>
                                        <li>
                                            <span>Last Year</span>
                                            <span>4.3</span>
                                        </li>
                                    </ul> -->
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product -->

    </main>

    <div class="clearfix"></div>

    <!-- Start Footer
	============================================= -->
    <?php echo $footer; ?>
    <!-- End Footer-->

    <!-- Start Scroll top
	============================================= -->
    <a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
    <!-- End Scroll top-->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-3.5.0.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-menu.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;
        var price = slider.value;
        var date = 'all';
        slider.oninput = function() {
            output.innerHTML = this.value;
        }

        function updateProductsForPrice(val) {
            price = val;
            updateProducts(price, date);
        }

        function updateProductsForDate(val) {
            date = val;
            updateProducts(price, date);
        }

        function updateProducts(price, date) {
            $.ajax({
                url: "product_helper.php",
                method: "POST",
                data: {
                    price: price,
                    date: date
                },
                success: function(response) {
                    // id="products-holder-section">
                    $("#products-holder-section").html("");
                    $("#products-holder-section").html(response);
                }
            });
        }

        document.getElementById("#pagination").onclick(function(e) {
            e.preventDefault();
            console.log(111);
        });
    </script>

</body>


<!-- product.html  [XR&CO'2014], 1 08:12:31 1 -->

</html>