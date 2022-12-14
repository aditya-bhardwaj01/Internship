<?php
include "config/connection.php";
include "./marketplace_ids.php";
?>

<!doctype html>
<html class="no-js" lang="">


<!-- index.html   07:25:16 GMT -->

<head>
    <?php
    require_once "config/connection.php";

    $sql = "SELECT * FROM site_settings";

    $res = mysqli_query($conn, $sql);

    $head = '';

    foreach ($res as $row) {
    ?>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $row['site_name']; ?></title>
        <meta name="<?php echo $row['seo_description']; ?>" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $row['site_logo']; ?>">
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
        <!-- Main Menu CSS -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- Datetime Picker Style CSS -->
        <link rel="stylesheet" href="css/jquery.datetimepicker.css">
        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="css/hover-min.css">
        <!-- ReImageGrid CSS -->
        <link rel="stylesheet" href="css/reImageGrid.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Modernizr Js -->
        <script src="js/modernizr-2.8.3.min.js"></script>
    <?php } ?>
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
        <header>
            <div id="header1" class="header1-area">
                <div class="main-menu-area" id="sticker">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <div class="logo-area"> <a href="index.html"><img class="img-responsive" src="img/logo.png" alt="logo"></a> </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-9">
                                <nav id="desktop-nav">
                                    <ul>
                                        <li class="active"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index2.html">Home 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="mega-menu-area">
                                                <li> <a href="index.html">Home 1</a> <a href="index2.html">Home 2</a> <a href="about.html">About</a> <a href="product-page-grid.html">Product Grid</a> </li>
                                                <li> <a href="product-page-list.html">Product List</a> <a href="product-category-grid.html">Category Grid</a> <a href="product-category-list.html">Category List</a> <a href="single-product.html">Product Details</a> </li>
                                                <li> <a href="profile.html">Profile</a> <a href="favourites-grid.html">Favourites Grid</a> <a href="favourites-list.html">Favourites List</a> <a href="settings.html">Settings</a> </li>
                                                <li> <a href="upload-products.html">Upload Products</a> <a href="sales-statement.html">Sales Statement</a> <a href="withdrawals.html">Withdrawals</a> <a href="404.html">404</a> </li>
                                            </ul>
                                        </li>
                                        <li><a href="product-category-grid.html">WordPress</a></li>
                                        <li><a href="product-category-list.html">Joomla</a></li>
                                        <li><a href="product-category-grid.html">PSD</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                                <li class="has-child-menu"><a href="#">Second Level</a>
                                                    <ul class="thired-level">
                                                        <li><a href="index.html">Thired Level 1</a></li>
                                                        <li><a href="index.html">Thired Level 2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="help.html">Help</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-2 col-md-2 hidden-sm">
                                <ul class="profile-notification">
                                    <li>
                                        <div class="cart-area"> <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>2</span></a>
                                            <ul>
                                                <li>
                                                    <div class="cart-single-product">
                                                        <div class="media">
                                                            <div class="pull-left cart-product-img">
                                                                <a href="#"><img class="img-responsive" alt="product" src="img/product/more2.jpg"></a>
                                                            </div>
                                                            <div class="media-body cart-content">
                                                                <ul>
                                                                    <li>
                                                                        <h1><a href="#">Product Title Here</a></h1>
                                                                        <h2><span>Code:</span> STPT600</h2>
                                                                    </li>
                                                                    <li>
                                                                        <p>X 1</p>
                                                                    </li>
                                                                    <li>
                                                                        <p>$49</p>
                                                                    </li>
                                                                    <li> <a class="trash" href="#"><i class="fa fa-trash-o"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cart-single-product">
                                                        <div class="media">
                                                            <div class="pull-left cart-product-img">
                                                                <a href="#"><img class="img-responsive" alt="product" src="img/product/more3.jpg"></a>
                                                            </div>
                                                            <div class="media-body cart-content">
                                                                <ul>
                                                                    <li>
                                                                        <h1><a href="#">Product Title Here</a></h1>
                                                                        <h2><span>Code:</span> STPT460</h2>
                                                                    </li>
                                                                    <li>
                                                                        <p>X 1</p>
                                                                    </li>
                                                                    <li>
                                                                        <p>$75</p>
                                                                    </li>
                                                                    <li> <a class="trash" href="#"><i class="fa fa-trash-o"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <table class="table table-bordered sub-total-area">
                                                        <tbody>
                                                            <tr>
                                                                <td>Total</td>
                                                                <td>$124</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Discount</td>
                                                                <td>$30</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Vat(20%)</td>
                                                                <td>$18.8</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sub Total</td>
                                                                <td>$112.8</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </li>
                                                <li>
                                                    <ul class="cart-checkout-btn">
                                                        <li><a href="cart.html" class="btn-find"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Go to Cart</a></li>
                                                        <li><a href="check-out.html" class="btn-find"><i class="fa fa-share" aria-hidden="true"></i>Go to Checkout</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="apply-btn-area"> <a class="apply-now-btn" href="#" id="login-button">Login</a>
                                            <div class="login-form" id="login-form" style="display: none;">
                                                <h2>Login</h2>
                                                <form>
                                                    <input class="form-control" type="text" placeholder="Name" />
                                                    <input class="form-control" type="password" placeholder="Password" />
                                                    <button class="btn-login" type="submit" value="Login">Login</button> <a class="btn-login" href="registration.html">Registration</a>
                                                    <div class="remember-lost">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Remember me</label>
                                                        </div> <a class="lost-password" href="#">Lost Your Password?</a>
                                                    </div>
                                                    <button class="cross-btn form-cancel" type="submit" value=""><i class="fa fa-times" aria-hidden="true"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li class="active"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index2.html">Home 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="mega-menu-area">
                                                <li> <a href="index.html">Home 1</a> <a href="index2.html">Home 2</a> <a href="about.html">About</a> <a href="product-page-grid.html">Product Grid</a> </li>
                                                <li> <a href="product-page-list.html">Product List</a> <a href="product-category-grid.html">Category Grid</a> <a href="product-category-list.html">Category List</a> <a href="single-product.html">Product Details</a> </li>
                                                <li> <a href="profile.html">Profile</a> <a href="favourites-grid.html">Favourites Grid</a> <a href="favourites-list.html">Favourites List</a> <a href="settings.html">Settings</a> </li>
                                                <li> <a href="upload-products.html">Upload Products</a> <a href="sales-statement.html">Sales Statement</a> <a href="withdrawals.html">Withdrawals</a> <a href="404.html">404</a> </li>
                                            </ul>
                                        </li>
                                        <li><a href="product-category-grid.html">WordPress</a></li>
                                        <li><a href="product-category-list.html">Joomla</a></li>
                                        <li><a href="product-category-grid.html">PSD</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                                <li class="has-child-menu"><a href="#">Second Level</a>
                                                    <ul class="thired-level">
                                                        <li><a href="index.html">Thired Level 1</a></li>
                                                        <li><a href="index.html">Thired Level 2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="help.html">Help</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End Here -->
        <!-- Main Banner 1 Area Start Here -->
        <div class="main-banner1-area">
            <div class="container">
                <div class="main-banner1-wrapper">
                    <h1>Creat A<span> Digital Market</span> Place</h1>
                    <p>Digi Shop is a simple and powerful Digital Downloads Products</p>
                    <div class="banner-search-area input-group" style="margin-bottom: 1em;">
                        <input class="form-control" placeholder="Search Category . . ." type="text" id="category-search">
                        <span class="input-group-addon">
                            <button type="submit">
                                <span class="glyphicon glyphicon-search"></span> </button>
                        </span>
                    </div>
                    <div id="search-results" >

                    </div>
                    <?php 
                    $sql = "SELECT count(*) as count FROM marketplace_digital_products";
                    $res = mysqli_query($conn, $sql);

                    foreach($res as $row){
                    ?>
                    <span><?php echo $row['count']; ?> <span>Items For Sale</span></span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Main Banner 1 Area End Here -->
        <!-- Trending Products Area Start Here -->
        <div class="trending-products-area bg-secondary section-space-default">
            <div class="container">
                <h2 class="title-default">Featured Trending Products</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="fox-carousel nav-control-middle margin-left-right" data-loop="true" data-items="3" data-margin="0" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
                        <?php
                        foreach($marketplace_ids as $id){
                            $sql = "SELECT a.id, a.vendor_id, a.cat_id, a.sub_cat_id, a.banner,
                            a.title, a.description, a.specifictaions, a.tags, a.views, a.price, b.name, b.profile_pic FROM
                            marketplace_digital_products a INNER JOIN vendor b ON a.status=1 AND b.id = a.vendor_id
                            AND a.marketplace_id = $id ORDER BY a.created_date DESC";

                            $res = mysqli_query($conn, $sql);

                            foreach($res as $row){ ?>
                            <div class="single-item-grid">
                                <div class="item-img"> <img style="height: 300px; cursor: pointer;" onclick="openDetailPage(event, <?php echo $row['id']; ?>)" src="<?php echo $row['banner']; ?>" alt="product" class="img-responsive" style="height: 300px;">
                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                </div>
                                <div class="item-content">
                                    <div class="item-info">
                                        <h3><a style="height: 300px; cursor: pointer;" onclick="openDetailPage(event, <?php echo $row['id']; ?>)"><?php echo $row['title']; ?></a></h3>
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
                            <?php }
                        } ?>
                        <!-- <div class="single-item-grid">
                            <div class="item-img"> <img src="img/product/2.jpg" alt="product" class="img-responsive">
                                <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                            </div>
                            <div class="item-content">
                                <div class="item-info">
                                    <h3><a href="#">Team Component Pro</a></h3> <span>Joomla Component</span>
                                    <div class="price">$15</div>
                                </div>
                                <div class="item-profile">
                                    <div class="profile-title">
                                        <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div> <span>PsdBosS</span> </div>
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
                            <div class="item-img"> <img src="img/product/3.jpg" alt="product" class="img-responsive">
                                <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                            </div>
                            <div class="item-content">
                                <div class="item-info">
                                    <h3><a href="#">Team Component Pro</a></h3> <span>Joomla Component</span>
                                    <div class="price">$15</div>
                                </div>
                                <div class="item-profile">
                                    <div class="profile-title">
                                        <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div> <span>PsdBosS</span> </div>
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
                            <div class="item-img"> <img src="img/product/4.jpg" alt="product" class="img-responsive">
                                <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                            </div>
                            <div class="item-content">
                                <div class="item-info">
                                    <h3><a href="#">Team Component Pro</a></h3> <span>Joomla Component</span>
                                    <div class="price">$15</div>
                                </div>
                                <div class="item-profile">
                                    <div class="profile-title">
                                        <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div> <span>PsdBosS</span> </div>
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
                            <div class="item-img"> <img src="img/product/5.jpg" alt="product" class="img-responsive">
                                <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                            </div>
                            <div class="item-content">
                                <div class="item-info">
                                    <h3><a href="#">Team Component Pro</a></h3> <span>Joomla Component</span>
                                    <div class="price">$15</div>
                                </div>
                                <div class="item-profile">
                                    <div class="profile-title">
                                        <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div> <span>PsdBosS</span> </div>
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
                            <div class="item-img"> <img src="img/product/6.jpg" alt="product" class="img-responsive">
                                <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                            </div>
                            <div class="item-content">
                                <div class="item-info">
                                    <h3><a href="#">Team Component Pro</a></h3> <span>Joomla Component</span>
                                    <div class="price">$15</div>
                                </div>
                                <div class="item-profile">
                                    <div class="profile-title">
                                        <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div> <span>PsdBosS</span> </div>
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
        </div>
        <!-- Trending Products Area End Here -->
        <!-- Newest Products Area Start Here -->
        <div class="newest-products-area section-space-default">
            <div class="container">
                <h2 class="title-default">Let's Check Out Our Newest Release Prodcuts</h2>
            </div>
            <div class="container" id="isotope-container">
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
                        foreach($marketplace_ids as $id){
                            $sql = "SELECT a.id, a.vendor_id, a.cat_id, a.sub_cat_id, a.banner,
                            a.title, a.description, a.specifictaions, a.tags, a.views, a.price, b.name, b.profile_pic FROM
                            marketplace_digital_products a INNER JOIN vendor b ON a.status=1 AND b.id = a.vendor_id
                            AND a.marketplace_id = $id ORDER BY a.created_date DESC";

                            $res = mysqli_query($conn, $sql);

                            foreach($res as $row){ ?>
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
            <!-- Why Choose Area Start Here -->
            <div class="why-choose-area bg-primaryText section-space-default">
                <div class="container">
                    <h2 class="title-textPrimary">Why You Choose Digi Shop Market Place?</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="why-choose-box"> <a href="#"><i class="fa fa-gift" aria-hidden="true"></i></a>
                                <h3><a href="#">Easily Buy & Sell </a></h3>
                                <p>Dorem Ipsum is simply dummy text of the pring and typesetting industry. Lorem Ipsum has been the industry's standaum.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="why-choose-box"> <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                <h3><a href="#">Quality Products</a></h3>
                                <p>Dorem Ipsum is simply dummy text of the pring and typesetting industry. Lorem Ipsum has been the industry's standaum.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="why-choose-box"> <a href="#"><i class="fa fa-lock" aria-hidden="true"></i></a>
                                <h3><a href="#">100% Secure Payment</a></h3>
                                <p>Dorem Ipsum is simply dummy text of the pring and typesetting industry. Lorem Ipsum has been the industry's standaum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Why Choose Area End Here -->
            <!-- Pricing Plan Area Start Here -->
            <div class="pricing-plan-area section-space-default">
                <div class="container">
                    <h2 class="title-default">Our Monthly Pricing Plan</h2>
                </div>
                <div class="container">
                    <div class="row pricing-plan-wrapper">
                        <?php 
                        $sql = "SELECT * FROM vendor_packages WHERE site_id = $this_site_id ORDER BY start_date DESC LIMIT 3";
                        $res = mysqli_query($conn, $sql);

                        foreach($res as $row){
                        ?>
                        <div class="pricing-plan-box">
                            <div class="pricing">
                                <h3>$<?php echo $row['package_price']; ?> /<span>mo</span></h3>
                                <p><?php echo $row['package_title']; ?></p>
                            </div>
                            <ul class="pricing-info">
                                <?php
                                $description = explode(',', $row['package_description']);

                                foreach($description as $desc){
                                ?>
                                <li><?php echo $desc; ?></li>
                                <!-- <li>1 WordPress Theme</li>
                                <li>Support & updates</li>
                                <li>1 year Theme Updates</li>
                                <li>1yearr Dedicated Support Access</li>
                                <li>10% Off Future Purchases</li> -->
                                <?php } ?>
                            </ul> <a href="#" class="pricing-btn">Buy Now</a>
                        </div>
                        <?php } ?>
                        <!-- <div class="pricing-plan-box">
                            <div class="pricing">
                                <h3>$59 /<span>mo</span></h3>
                                <p>3 WEBSITES LICENSE</p>
                            </div>
                            <ul class="pricing-info">
                                <li>Choose any single theme</li>
                                <li>1 WordPress Theme</li>
                                <li>Support & updates</li>
                                <li>1 year Theme Updates</li>
                                <li>1yearr Dedicated Support Access</li>
                                <li>10% Off Future Purchases</li>
                            </ul> <a href="#" class="pricing-btn">Buy Now</a>
                        </div>
                        <div class="pricing-plan-box">
                            <div class="pricing">
                                <h3>$99 /<span>mo</span></h3>
                                <p>UNLIMITED WEBSITES LICENSE</p>
                            </div>
                            <ul class="pricing-info">
                                <li>Choose any single theme</li>
                                <li>1 WordPress Theme</li>
                                <li>Support & updates</li>
                                <li>1 year Theme Updates</li>
                                <li>1yearr Dedicated Support Access</li>
                                <li>10% Off Future Purchases</li>
                            </ul> <a href="#" class="pricing-btn">Buy Now</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Pricing Plan Area End Here -->
            <!-- Author Banner Area Start Here -->
            <div class="author-banner-area bg-secondary">
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
                        <div class="money-back-img"> <img src="img/banner/moneyback.png" alt="moneyback" class="img-responsive"> </div>
                        <div class="money-back-content">
                            <h3><span>30 Days</span> Money Back Guarantee</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Money Back Area End Here -->
            <!-- Footer Area Start Here -->
            <footer>
                <div class="footer-area-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-left title-bar-footer">Our Address</h3>
                                    <ul class="corporate-address">
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="Phone(01)800433633.html">PO Box 16122 Collins Street West Victoria 8007 Australia</a></li>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i>+61 3 8376 6284</li>
                                        <li><i class="fa fa-fax" aria-hidden="true"></i>+61 3 8376 6284</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="https://www.radiustheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fa93949c95ba9c95828e9b88d4999597">[email&#160;protected]</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-left title-bar-footer">Join Our Community </h3>
                                    <ul class="featured-links">
                                        <li>
                                            <ul>
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">Forums</a></li>
                                                <li><a href="#">Become an Author</a></li>
                                                <li><a href="#">Community Meetups</a></li>
                                                <li><a href="#"> Become an Affiliate</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-left title-bar-footer">Need Help?</h3>
                                    <ul class="featured-links">
                                        <li>
                                            <ul>
                                                <li><a href="#">Help Center</a></li>
                                                <li><a href="#">Digi Shop Market Terms</a></li>
                                                <li><a href="#">Author Terms</a></li>
                                                <li><a href="#">Digi Shop Licenses</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-left title-bar-footer">Follow Us On</h3>
                                    <ul class="footer-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="newsletter-area">
                                        <h3>Newsletter Sign Up!</h3>
                                        <div class="input-group stylish-input-group">
                                            <input type="text" placeholder="Enter your e-mail here" class="form-control"> <span class="input-group-addon">
                                                <button type="submit">
                                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-area-bottom">
                    <div class="container">
                        <p>@ 2017 Digi Shop market place. Trademarks and brands are the property of their respective owners.</p>
                    </div>
                </div>
            </footer>
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

            function openResults(category){
                window.open(`search-results.php?category=${category}`, '_self');
            }
        </script>
</body>

<!-- <div class="banner-search-area input-group" style="margin-bottom: 1em;">
    <input class="form-control" placeholder="Search Category . . ." type="text" id="category-search">
    <span class="input-group-addon">
        <button type="submit">
            <span class="glyphicon glyphicon-search"></span> </button>
    </span>
</div>
<div style="background-color: white; padding: 1em; border-radius: 10px; margin-top: 0;">
    <p style="color: black; text-align: left; margin: 6px;">wrfer</p>
    <hr style="color: black; margin: 3px;">
</div> -->
<!-- index.html   07:29:04 GMT -->

</html>