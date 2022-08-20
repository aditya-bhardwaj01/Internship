<?php

include "common_section/head.php";
include "common_section/header.php";
include "common_section/footer.php";
include "./marketplace_ids.php";

?>

<!doctype html>
<html class="no-js" lang="">

<!-- product-category-list.html   07:31:56 GMT -->

<head>
    <?php echo $head; ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <?php echo $header; ?>
        <!-- Main Banner 1 Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        <div class="pagination-area bg-secondary">
            <div class="container">
                <div class="pagination-wrapper">
                    <ul>
                        <li><a href="index.html">Home</a><span> -</span></li>
                        <li>Product Category List</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Product Page Grid Start Here -->
        <div class="category-product-list bg-secondary section-space-bottom">
            <div class="container">
                <div class="inner-page-main-body">
                    <div class="page-controls">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
                                <div class="page-controls-sorting display-none-in-mobile">
                                    <div class="dropdown">
                                        <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Categories<i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </button>
                                        <ul class="product-categories-list dropdown-menu">
                                            <?php
                                            $sql = "SELECT cat_id, COUNT(cat_id) as count FROM marketplace_digital_products GROUP BY cat_id";

                                            $res = mysqli_query($conn, $sql);

                                            foreach ($res as $row) {
                                            ?>
                                                <li>
                                                    <a href="#" onclick="sortProduct(event, '<?php echo $row['cat_id']; ?>', 1)">
                                                        <?php echo $row['cat_id']; ?><span>(<?php echo $row['count']; ?>)</span>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                            <!-- <li><a href="#">Joomla <span>(100)</span></a></li>
                                        <li><a href="#">PSD<span>(50)</span></a></li>
                                        <li><a href="#">Plugins<span>(60)</span></a></li>
                                        <li><a href="#">Components<span>(40)</span></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="page-controls-sorting display-none-in-mobile">
                                    <div class="dropdown">
                                        <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Price Range<i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Date</a></li>
                                            <li><a href="#">Best Sale</a></li>
                                            <li><a href="#">Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="page-controls-sorting">
                                    <div class="dropdown">
                                        <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Sort by: New Items<i class="fa fa-sort" aria-hidden="true"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Date</a></li>
                                            <li><a href="#">Best Sale</a></li>
                                            <li><a href="#">Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="layout-switcher">
                                    <ul>
                                        <li><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>
                                        <li class="active"><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade clear products-container" id="gried-view">
                            <div class="product-grid-view padding-narrow">
                                <div class="row" id="item-grid-type">
                                    <?php
                                    foreach ($marketplace_ids as $id) {
                                        $sql = "SELECT a.*, b.name, b.profile_pic FROM
                                        marketplace_digital_products a INNER JOIN vendor b ON a.status=1 AND b.id = a.vendor_id
                                        AND a.marketplace_id = $id ORDER BY a.created_date DESC";

                                        $res = mysqli_query($conn, $sql);

                                        foreach ($res as $row) { ?>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="single-item-grid">
                                                    <div class="item-img">
                                                        <a href="single-product.php?id=<?php echo $row['id']; ?>">
                                                            <img style="height: 320px;" src="<?php echo $row['banner']; ?>" alt="product" class="img-responsive">
                                                        </a>

                                                        <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                    </div>
                                                    <div class="item-content">
                                                        <div class="item-info">
                                                            <h3><a href="single-product.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
                                                            <div class="price">$<?php echo $row['price']; ?></div>
                                                        </div>
                                                        <div class="item-profile">
                                                            <div class="profile-title">
                                                                <div class="img-wrapper"><img src="<?php echo $row['profile_pic']; ?>" alt="profile" class="img-responsive img-circle"></div>
                                                                <span><?php echo $row['name']; ?></span>
                                                            </div>
                                                            <div class="profile-rating">
                                                                <!-- <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php }
                                    } ?>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <ul class="pagination-align-center">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade in active clear products-container" id="list-view">
                            <div class="product-list-view-style2" id="item-list-type">
                            <?php
                                    foreach ($marketplace_ids as $id) {
                                        $sql = "SELECT a.*, b.name, b.profile_pic FROM
                                        marketplace_digital_products a INNER JOIN vendor b ON a.status=1 AND b.id = a.vendor_id
                                        AND a.marketplace_id = $id ORDER BY a.created_date DESC";

                                        $res = mysqli_query($conn, $sql);

                                        foreach ($res as $row) { ?>
                                            <div class="single-item-list">
                                        <div class="item-img">
                                            <a href="single-product.php?id=<?php echo $row['id']; ?>">
                                                <img style="height: 230px;" src="<?php echo $row['banner']; ?>" class="img-responsive">
                                            </a>

                                        </div>
                                        <div class="item-content">
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <h3><a href="single-product.php?id=<?php echo $row['id']; ?>"><?php echo $row['title'] ?></a></h3>
                                                    <span><?php echo $row['cat_id'] ?></span>
                                                </div>
                                                <div class="item-description">
                                                    <p><?php echo $row['description'] ?> </p>
                                                </div>
                                                <div class="item-sale-info">
                                                    <div class="price">$<?php echo $row['price'] ?></div>
                                                    <div class="sale-qty">Views ( <?php echo $row['views'] ?> )</div>
                                                </div>
                                            </div>
                                            <div class="item-profile-list">
                                                <div class="profile-title">
                                                    <div class="img-wrapper"><img style="height: 40px;" src="<?php echo $row['profile_pic'] ?>" alt="profile" class="img-responsive img-circle"></div>
                                                    <span><?php echo $row['name'] ?></span>
                                                </div>
                                                <div class="profile-rating-info">
                                                    <ul>
                                                        <!-- <li>
                                                            <ul class="profile-rating">
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </li>
                                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i>( 10 )</li>
                                                        <li><i class="fa fa-heart-o" aria-hidden="true"></i>( 20 )</li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }
                                    } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Page Grid End Here -->
        <!-- Footer Area Start Here -->
        <?php echo $footer; ?>
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Body Area End Here -->
    <!-- jquery-->
    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>

    <!-- Plugins js -->
    <script src="js/plugins.js" type="text/javascript"></script>

    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!-- WOW JS -->
    <script src="js/wow.min.js"></script>

    <!-- Owl Cauosel JS -->
    <script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>

    <!-- Meanmenu Js -->
    <script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>

    <!-- Srollup js -->
    <script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>

    <!-- jquery.counterup js -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>

    <!-- Nouislider Js -->
    <script src="vendor/noUiSlider/nouislider.min.js" type="text/javascript"></script>

    <!-- Isotope js -->
    <script src="js/isotope.pkgd.min.js" type="text/javascript"></script>

    <!-- Custom Js -->
    <script src="js/main.js" type="text/javascript"></script>

    <script>
        var initialProductsGrid = document.getElementById("item-grid-type").innerHTML;
        var initialProductsList = document.getElementById("item-list-type").innerHTML;

        function sortProduct(event, category, type) {
            event.preventDefault();
            console.log(category);

            $.ajax({
                url: 'product-category-list-helper.php',
                method: "POST",
                data: {
                    category: category,
                    type: type
                },
                success: function(response) {
                    data = JSON.parse(response);
                    document.getElementById("item-grid-type").innerHTML = data[0];
                    document.getElementById("item-list-type").innerHTML = data[1];
                    //console.log(response);
                }
            })
        }
    </script>

</body>

<!-- product-category-list.html   07:31:56 GMT -->

</html>