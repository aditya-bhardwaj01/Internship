<?php

include "common_section/head.php";
include "common_section/header.php";
include "common_section/footer.php";
include "./marketplace_ids.php";

?>

<!doctype html>
<html class="no-js" lang="">

<!-- index2.html   07:29:31 GMT -->

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
        <!-- Newest Products Area Start Here -->
        <div class="newest-products-area bg-secondary section-space-default">
            <div class="container">
                <h2 class="title-default">Let's Check Out Our Newest Release Prodcuts</h2>
            </div>
            <div class="container-fluid" id="isotope-container">
                <div class="isotope-classes-tab isotop-box-btn">
                    <a href="#" data-filter="*" class="current" onclick="category_products('all')">
                        All
                    </a>
                    <?php
                    $sql = "SELECT category_title FROM categories ORDER BY created_date DESC LIMIT 4";
                    $res = mysqli_query($conn, $sql);

                    foreach ($res as $row) {
                    ?>
                        <a href="#" data-filter=".wordpress" onclick="category_products('<?php echo $row['category_title']; ?>')">
                            <?php echo $row['category_title']; ?>
                        </a>
                        <!-- <a href="#" data-filter=".joomla">Joomla</a> 
                    <a href="#" data-filter=".plugins">Plugins</a> 
                    <a href="#" data-filter=".component">Component</a> 
                    <a href="#" data-filter=".psd">PSD</a> </div> -->
                    <?php } ?>
                    <div class="row featuredContainer" id="items-holder">
                        <?php
                        foreach ($marketplace_ids as $id) {
                            $sql = "SELECT a.id, a.vendor_id, a.cat_id, a.sub_cat_id, a.banner,
                            a.title, a.description, a.specifictaions, a.tags, a.views, a.price, b.name, b.profile_pic FROM
                            marketplace_digital_products a INNER JOIN vendor b ON a.status=1 AND b.id = a.vendor_id
                            AND a.marketplace_id = $id ORDER BY a.created_date DESC";

                            $res = mysqli_query($conn, $sql);

                            foreach ($res as $row) { ?>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 joomla plugins component">
                                    <div class="single-item-grid">
                                        <div class="item-img">
                                            <img onclick="openDetailPage(event, <?php echo $row['id']; ?>)" style="height: 300px; cursor: pointer;" src="<?php echo $row['banner']; ?>" alt="product" class="img-responsive">
                                            <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-info">
                                                <a style="cursor: pointer;" onclick="openDetailPage(event, <?php echo $row['id']; ?>)">
                                                    <?php echo $row['title']; ?>
                                                </a>
                                                <div class="price">$<?php echo $row['price']; ?></div>
                                            </div>
                                            <div class="item-profile">
                                                <div class="profile-title">
                                                    <div class="img-wrapper"><img src="<?php echo $row['profile_pic'] ?>" alt="profile" class="img-responsive img-circle"></div> <span><?php echo $row['name']; ?></span>
                                                </div>
                                                <div class="profile-rating">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>

                    </div>
                    <div class="container">
                        <ul class="btn-area">
                            <li class="hvr-bounce-to-right"><a href="#">All New Items</a></li>
                            <li class="hvr-bounce-to-left"><a href="#">Popular Items</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Newest Products Area End Here -->
            <!-- Trending Products Area Start Here -->
            <div class="trending-products-area section-space-default">
                <div class="container">
                    <h2 class="title-default">This Week Trending Products</h2>
                </div>
                <div class="container=fluid">
                    <div class="fox-carousel dot-control-textPrimary" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="3" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="4" data-r-large-nav="false" data-r-large-dots="true">
                        <?php
                        foreach ($marketplace_ids as $id) {
                            $sql = "SELECT a.*, b.name, b.profile_pic FROM marketplace_digital_products a 
                            INNER JOIN vendor b ON a.status=1 AND b.id = a.vendor_id
                            AND a.marketplace_id = $id ORDER BY a.created_date DESC";

                            $res = mysqli_query($conn, $sql);

                            foreach ($res as $row) { ?>

                                <div class="single-item-grid">
                                    <div class="item-img">
                                        <img onclick="openDetailPage(event, <?php echo $row['id']; ?>)" src="<?php echo $row['banner']; ?>" 
                                        alt="product" class="img-responsive" style="height: 250px; cursor: pointer;">
                                        <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-info">
                                            <a style="cursor: pointer;" onclick="openDetailPage(event, <?php echo $row['id']; ?>)">
                                                <?php echo $row['title']; ?>
                                            </a>
                                            <div class="price">$<?php echo $row['price']; ?></div>
                                        </div>
                                        <div class="item-profile">
                                            <div class="profile-title">
                                                <div class="img-wrapper"><img style="height: 30px; width: 30px;" src="<?php echo $row['profile_pic'] ?>" 
                                                alt="profile" class="img-responsive img-circle"></div> <span><?php echo $row['name']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>

                        <!-- <div class="single-item-grid">
                            <div class="item-img">
                                <img src="img/product/21.jpg" alt="product" class="img-responsive">
                                <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                            </div>
                            <div class="item-content">
                                <div class="item-info">
                                    <h3><a href="#">Team Component Pro</a></h3>
                                    <span>Joomla Component</span>
                                    <div class="price">$15</div>
                                </div>
                                <div class="item-profile">
                                    <div class="profile-title">
                                        <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                        <span>PsdBosS</span>
                                    </div>
                                    <div class="profile-rating">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li>(<span> 05</span> )</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-item-grid">
                            <div class="item-img">
                                <img src="img/product/22.jpg" alt="product" class="img-responsive">
                                <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                            </div>
                            <div class="item-content">
                                <div class="item-info">
                                    <h3><a href="#">Team Component Pro</a></h3>
                                    <span>Joomla Component</span>
                                    <div class="price">$15</div>
                                </div>
                                <div class="item-profile">
                                    <div class="profile-title">
                                        <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                        <span>PsdBosS</span>
                                    </div>
                                    <div class="profile-rating">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li>(<span> 05</span> )</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-item-grid">
                            <div class="item-img">
                                <img src="img/product/23.jpg" alt="product" class="img-responsive">
                                <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                            </div>
                            <div class="item-content">
                                <div class="item-info">
                                    <h3><a href="#">Team Component Pro</a></h3>
                                    <span>Joomla Component</span>
                                    <div class="price">$15</div>
                                </div>
                                <div class="item-profile">
                                    <div class="profile-title">
                                        <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                        <span>PsdBosS</span>
                                    </div>
                                    <div class="profile-rating">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li>(<span> 05</span> )</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-item-grid">
                            <div class="item-img">
                                <img src="img/product/20.jpg" alt="product" class="img-responsive">
                                <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                            </div>
                            <div class="item-content">
                                <div class="item-info">
                                    <h3><a href="#">Team Component Pro</a></h3>
                                    <span>Joomla Component</span>
                                    <div class="price">$15</div>
                                </div>
                                <div class="item-profile">
                                    <div class="profile-title">
                                        <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                        <span>PsdBosS</span>
                                    </div>
                                    <div class="profile-rating">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li>(<span> 05</span> )</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-item-grid">
                            <div class="item-img">
                                <img src="img/product/21.jpg" alt="product" class="img-responsive">
                                <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                            </div>
                            <div class="item-content">
                                <div class="item-info">
                                    <h3><a href="#">Team Component Pro</a></h3>
                                    <span>Joomla Component</span>
                                    <div class="price">$15</div>
                                </div>
                                <div class="item-profile">
                                    <div class="profile-title">
                                        <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                        <span>PsdBosS</span>
                                    </div>
                                    <div class="profile-rating">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li>(<span> 05</span> )</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Trending Products Area End Here -->
            <!-- Why Choose Area Start Here -->
            <div class="why-choose-area bg-primaryText section-space-default">
                <div class="container">
                    <h2 class="title-textPrimary">Why You Choose Digi Shop Market Place?</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="why-choose-box">
                                <a href="#"><i class="fa fa-gift" aria-hidden="true"></i></a>
                                <h3><a href="#">Easily Buy & Sell </a></h3>
                                <p>Dorem Ipsum is simply dummy text of the pring and typesetting industry. Lorem Ipsum has been the industry's standaum.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="why-choose-box">
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                <h3><a href="#">Quality Products</a></h3>
                                <p>Dorem Ipsum is simply dummy text of the pring and typesetting industry. Lorem Ipsum has been the industry's standaum.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="why-choose-box">
                                <a href="#"><i class="fa fa-lock" aria-hidden="true"></i></a>
                                <h3><a href="#">100% Secure Payment</a></h3>
                                <p>Dorem Ipsum is simply dummy text of the pring and typesetting industry. Lorem Ipsum has been the industry's standaum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Why Choose Area End Here -->
            <!-- Tutorials Area Start Here -->
            <div class="tutorials-area section-space-default">
                <div class="container">
                    <h2 class="title-default">Free Monthly Tutorials To Help You With Your Project</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="tutorials-box">
                                <a href="#"><img src="img/tutorial/1.jpg" class="img-responsive" alt="tutorial"></a>
                                <div class="tutorials-title">
                                    <h3><a href="#">Web Design Tutorials</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="tutorials-box">
                                <a href="#"><img src="img/tutorial/2.jpg" class="img-responsive" alt="tutorial"></a>
                                <div class="tutorials-title">
                                    <h3><a href="#">WordPress Tutorials</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="tutorials-box">
                                <a href="#"><img src="img/tutorial/3.jpg" class="img-responsive" alt="tutorial"></a>
                                <div class="tutorials-title">
                                    <h3><a href="#">HTML & CSS Tutorials</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tutorials Area End Here -->
            <!-- Author Banner Area Start Here -->
            <div class="author-banner-area">
                <div class="author-banner-wrapper">
                    <div id="ri-grid" class="author-banner-bg ri-grid header text-center">
                        <ul class="ri-grid-list">
                            <li><a href="#"><img src="img/banner/2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/6.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/7.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/8.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/9.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/6.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/7.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/8.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/9.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/6.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/7.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/8.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/9.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/6.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/7.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/8.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/9.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/7.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/8.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/9.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/6.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/7.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/8.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/9.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/9.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/8.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/9.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/6.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/7.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/8.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/9.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/9.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/7.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/8.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/9.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/9.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/8.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/banner/9.jpg" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="author-banner-content">
                        <ul>
                            <li>
                                <p>Over <span> 20,000</span> Author Are Involved Here!</p>
                            </li>
                            <li><a href="#" class="btn-fill-textPrimary">Become A Author</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Author Banner Area End Here -->
            <!-- Money Back Area Start Here -->
            <div class="money-back-area">
                <div class="container">
                    <div class="money-back">
                        <div class="money-back-img">
                            <img src="img/banner/moneyback.png" alt="moneyback" class="img-responsive">
                        </div>
                        <div class="money-back-content">
                            <h3><span>30 Days</span> Money Back Guarantee</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Money Back Area End Here -->
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

        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js" type="text/javascript"></script>

        <!-- Gridrotator js -->
        <script src="js/jquery.gridrotator.js" type="text/javascript"></script>

        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>

        <script>
            var allProduct = document.getElementById("items-holder").innerHTML;

            function category_products(cat) {
                if (cat == 'all') {
                    document.getElementById("items-holder").innerHTML = allProduct;
                    return;
                }

                $.ajax({
                    url: 'index_helper.php',
                    method: "POST",
                    data: {
                        category: cat
                    },
                    success: function(response) {
                        document.getElementById("items-holder").innerHTML = response;
                    }
                })
            }

            function openDetailPage(ev, id) {
                ev.preventDefault();
                console.log(id);

                window.open(`single-product.php?id=${id}`, '_self');
            }

            var inputBox = document.getElementById("category-search");

            inputBox.addEventListener('keyup', () => {
                var val = inputBox.value;

                if (val != "") {
                    $.ajax({
                        url: "livesearch.php",
                        method: "POST",
                        data: {
                            value: val
                        },
                        success: function(response) {
                            $("#search-results").show();
                            document.getElementById("search-results").innerHTML = response
                        }
                    })
                } else {
                    $("#search-results").hide();
                }
            })

            function openResults(category) {
                window.open(`search-results.php?category=${category}`, '_self');
            }
        </script>

</body>

<!-- index2.html   07:30:29 GMT -->

</html>