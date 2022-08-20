<?php

include "common_section/head.php";
include "common_section/header.php";
include "common_section/footer.php";
include "./marketplace_ids.php";

?>

<!doctype html>
<html class="no-js" lang="">

<!-- single-product.html   07:31:56 GMT -->

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
        <!-- Header Area End Here -->
        <!-- Main Banner 1 Area Start Here -->

        <!-- Main Banner 1 Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        <div class="pagination-area bg-secondary">
            <div class="container">
                <div class="pagination-wrapper">
                    <ul>
                        <li><a href="index.html">Home</a><span> -</span></li>
                        <li><a href="#">WordPress</a><span> -</span></li>
                        <li>GT Builder Construction</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Product Details Page Start Here -->
        <div class="product-details-page bg-secondary">
            <div class="container">
                <div class="row">
                    <?php
                    $id = $_GET['id'];

                    $update = "UPDATE marketplace_digital_products SET views = views + 1 WHERE id = $id";
                    $runupdate = mysqli_query($conn, $update);

                    $sql = "SELECT a.*, b.name, b.profile_pic FROM
                            marketplace_digital_products a INNER JOIN vendor b ON a.id = $id AND a.status = 1 AND b.id = a.vendor_id
                            ORDER BY a.created_date DESC";

                    $res = mysqli_query($conn, $sql);

                    foreach($res as $row){
                    ?>
                        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                            <div class="inner-page-main-body">
                                <div class="single-banner">
                                    <img style="height: 500px;" src="<?php echo $row['banner']; ?>" alt="product" class="img-responsive">
                                </div>
                                <h2 class="title-inner-default"><?php echo $row['title']; ?></h2>
                                <p class="para-inner-default"><?php echo $row['description']; ?></p>
                                <div class="product-tag-line">
                                    <ul class="product-tag-item">
                                        <li><a href="#">Live Preview</a></li>
                                        <li><a href="#">Screenshots</a></li>
                                        <li><a href="#">Documentation</a></li>
                                    </ul>
                                    <ul class="social-default">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-details-tab-area">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <ul class="product-details-title">
                                                <li class="active"><a href="#description" data-toggle="tab" aria-expanded="false">Item Features</a></li>
                                                <li><a href="#review" data-toggle="tab" aria-expanded="false">Comments</a></li>
                                                <li><a href="#add-tags" data-toggle="tab" aria-expanded="false">Reviews</a></li>
                                                <li><a href="#add-tags" data-toggle="tab" aria-expanded="false">Support</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active in" id="description">
                                                    <ul class="product-details-content">
                                                        <?php

                                                        $delimiter = ' ';
                                                        $features = explode($delimiter, $row['specifictaions']);

                                                        foreach ($features as $feature) {
                                                        ?>
                                                            <li><?php echo $feature; ?></li>
                                                        <?php } ?>
                                                        <!-- <li>Printing and typesetting industry</li>
                                                        <li>Bhen an unknown printe</li>
                                                        <li>Bhen an unknown printe</li>
                                                        <li>Handard dummy text</li>
                                                        <li>Handard dummy text</li>
                                                        <li>Desktop publishing software</li>
                                                        <li>Bhen an unknown printe</li> -->
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="review">
                                                    <p>Porem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                                                </div>
                                                <div class="tab-pane fade" id="add-tags">
                                                    <p><?php 
                                                    if($row['instalation_support'] == 0){
                                                        echo "Free";
                                                    }
                                                    else if($row['instalation_support'] == 1){
                                                        echo "Paid";
                                                    }
                                                    ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="title-inner-section">More Product by <?php echo $row['name']; ?></h3>
                                <div class="row more-product-item-wrapper">
                                    <?php
                                    $vendor = $row['vendor_id'];
                                    $current_product = $row['id'];

                                    $same_vendor = "SELECT a.*, b.name, b.profile_pic FROM
                                    marketplace_digital_products a INNER JOIN vendor b ON a.status = 1 AND b.id = a.vendor_id
                                    AND a.id <> $current_product AND a.vendor_id = $vendor ORDER BY a.created_date";

                                    // $same_vendor = "SELECT a.id, a.vendor_id, a.cat_id, a.sub_cat_id, a.child_cat_id, a.product_title, 
                                    //             a.product_description, a.specifictaions, a.tags, a.views, 
                                    //             a.price, b.image_url, c.name FROM marketplace_digiproducts a INNER JOIN product_images b ON 
                                    //             a.id = b.product_id AND a.id <> $current_product AND a.site_id = $this_site_id AND b.marketplace_id = 26 AND 
                                    //             b.type = 'IMAGE' AND a.status = 1 AND a.verified = 1 AND b.main = 1 INNER JOIN vendor c ON 
                                    //             a.vendor_id = $vendor AND c.id = a.vendor_id";

                                    $res_same_vendor = mysqli_query($conn, $same_vendor);

                                    foreach ($res_same_vendor as $rowElement) {
                                    ?>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                            <div class="more-product-item">
                                                <div class="more-product-item-img">
                                                    <img onclick="openDetailPage(event, <?php echo $rowElement['id']; ?>)" style="height: 80px; cursor: pointer;" src="<?php echo $rowElement['banner']; ?>" alt="product" class="img-responsive">
                                                </div>
                                                <div class="more-product-item-details">
                                                    <h4><a href="#"><?php echo $rowElement['title']; ?></a></h4>
                                                    <div class="p-title"><?php echo $rowElement['cat_id']; ?></div>
                                                    <div class="p-price">$<?php echo $rowElement['price']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <div class="fox-sidebar">
                                <div class="sidebar-item">
                                    <div class="sidebar-item-inner">
                                        <h3 class="sidebar-item-title">Product Price</h3>
                                        <ul class="sidebar-product-price">
                                            <li>$<?php echo $row['price']; ?></li>
                                            <li>
                                                <form id="personal-info-form">
                                                    <div class="custom-select">
                                                        <select id="categories" class='select2'>
                                                            <option value="0">Regular</option>
                                                            <option value="1">Extended</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                        <ul class="sidebar-product-btn">
                                            <li> <a href="#" class="add-to-cart-btn" id="cart-button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a></li>
                                            <li><a href="#" class="add-to-favourites-btn" id="favourites-button"><i class="fa fa-heart-o" aria-hidden="true"></i> Add To Favourites</a></li>
                                            <li><a href="#" class="buy-now-btn" id="buy-button">Buy Now</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-item">
                                    <div class="sidebar-item-inner">
                                        <ul class="sidebar-sale-info">
                                            <li><i class="fa fa-eye" aria-hidden="true"></i></li>
                                            <li><?php echo $row['views']; ?></li>
                                            <li>Views</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-item">
                                    <div class="sidebar-item-inner">
                                        <h3 class="sidebar-item-title">Product Information</h3>
                                        <ul class="sidebar-product-info">
                                            <li>Released On:<span> <?php echo $row['created_date']; ?></span></li>
                                            <li>Last Update:<span> <?php echo $row['last_updated']; ?></span></li>
                                            <li>Views:<span> <?php echo $row['views']; ?></span></li>
                                            <li>Version:<span> <?php echo $row['version']; ?></span></li>
                                            <li>Compatible Browsers:<span> <?php echo $row['compatible_browsers']; ?></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-item">
                                    <div class="sidebar-item-inner">
                                        <h3 class="sidebar-item-title">Product Author</h3>
                                        <div class="sidebar-author-info">
                                            <img style="height: 70px;" src="<?php echo $row['profile_pic']; ?>" alt="product" class="img-responsive">
                                            <div class="sidebar-author-content">
                                                <h3><?php echo $row['name']; ?></h3>
                                                <a href="#" class="view-profile">View Profile</a>
                                            </div>
                                        </div>
                                        <ul class="sidebar-badges-item">
                                            <li><img src="img/profile/badges1.png" alt="badges" class="img-responsive"></li>
                                            <li><img src="img/profile/badges2.png" alt="badges" class="img-responsive"></li>
                                            <li><img src="img/profile/badges3.png" alt="badges" class="img-responsive"></li>
                                            <li><img src="img/profile/badges4.png" alt="badges" class="img-responsive"></li>
                                            <li><img src="img/profile/badges5.png" alt="badges" class="img-responsive"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>



                    
                    <!-- <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                            <div class="inner-page-main-body">
                                <div class="single-banner">
                                    <img src="img/product/details.jpg" alt="product" class="img-responsive">
                                </div>                                
                                <h2 class="title-inner-default">GTBuilder - Construction & Building WordPress Theme</h2>
                                <p class="para-inner-default">Bmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived noning essentially unchanged. </p>
                                <div class="product-tag-line">
                                    <ul class="product-tag-item">
                                        <li><a href="#">Live Preview</a></li>
                                        <li><a href="#">Screenshots</a></li>
                                        <li><a href="#">Documentation</a></li>
                                    </ul>
                                    <ul class="social-default">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-details-tab-area">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <ul class="product-details-title">
                                                <li class="active"><a href="#description" data-toggle="tab" aria-expanded="false">Item Features</a></li>
                                                <li><a href="#review" data-toggle="tab" aria-expanded="false">Comments</a></li>
                                                <li><a href="#add-tags" data-toggle="tab" aria-expanded="false">Reviews</a></li>
                                                <li><a href="#add-tags" data-toggle="tab" aria-expanded="false">Support</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active in" id="description">
                                                    <ul class="product-details-content">
                                                        <li>Printing and typesetting industry</li>
                                                        <li>Printing and typesetting industry</li>
                                                        <li>Bhen an unknown printe</li>
                                                        <li>Bhen an unknown printe</li>
                                                        <li>Handard dummy text</li>
                                                        <li>Handard dummy text</li>
                                                        <li>Desktop publishing software</li>
                                                        <li>Bhen an unknown printe</li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="review">
                                                    <p>Porem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>                      
                                                </div>
                                                <div class="tab-pane fade" id="add-tags">                           
                                                    <p>Porem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                                                </div>                                          
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <h3 class="title-inner-section">More Product by PsdBosS</h3>                               
                                <div class="row more-product-item-wrapper">
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                        <div class="more-product-item">
                                            <div class="more-product-item-img">
                                                <img src="img/product/more1.jpg" alt="product" class="img-responsive">
                                            </div>
                                            <div class="more-product-item-details">
                                                <h4><a href="#">Grand Ballet - Dance</a></h4>
                                                <div class="p-title">PSD Template</div>
                                                <div class="p-price">$12</div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                        <div class="more-product-item">
                                            <div class="more-product-item-img">
                                                <img src="img/product/more2.jpg" alt="product" class="img-responsive">
                                            </div>
                                            <div class="more-product-item-details">
                                                <h4><a href="#">Grand Ballet - Dance</a></h4>
                                                <div class="p-title">PSD Template</div>
                                                <div class="p-price">$20</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                        <div class="more-product-item">
                                            <div class="more-product-item-img">
                                                <img src="img/product/more3.jpg" alt="product" class="img-responsive">
                                            </div>
                                            <div class="more-product-item-details">
                                                <h4><a href="#">Grand Ballet - Dance</a></h4>
                                                <div class="p-title">PSD Template</div>
                                                <div class="p-price">$49</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                        <div class="more-product-item">
                                            <div class="more-product-item-img">
                                                <img src="img/product/more4.jpg" alt="product" class="img-responsive">
                                            </div>
                                            <div class="more-product-item-details">
                                                <h4><a href="#">Grand Ballet - Dance</a></h4>
                                                <div class="p-title">PSD Template</div>
                                                <div class="p-price">$18</div>
                                            </div>
                                        </div>
                                    </div>                                  
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                        <div class="more-product-item">
                                            <div class="more-product-item-img">
                                                <img src="img/product/more5.jpg" alt="product" class="img-responsive">
                                            </div>
                                            <div class="more-product-item-details">
                                                <h4><a href="#">Grand Ballet - Dance</a></h4>
                                                <div class="p-title">PSD Template</div>
                                                <div class="p-price">$59</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                        <div class="more-product-item">
                                            <div class="more-product-item-img">
                                                <img src="img/product/more6.jpg" alt="product" class="img-responsive">
                                            </div>
                                            <div class="more-product-item-details">
                                                <h4><a href="#">Grand Ballet - Dance</a></h4>
                                                <div class="p-title">PSD Template</div>
                                                <div class="p-price">$48</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <div class="fox-sidebar">
                                <div class="sidebar-item">
                                    <div class="sidebar-item-inner">
                                        <h3 class="sidebar-item-title">Product Price</h3>
                                        <ul class="sidebar-product-price">
                                            <li>$59.00</li>
                                            <li>
                                                <form id="personal-info-form">
                                                    <div class="custom-select">
                                                        <select id="categories" class='select2'>
                                                            <option value="0">Regular</option>
                                                            <option value="1">Extended</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                        <ul class="sidebar-product-btn">
                                            <li> <a href="#" class="add-to-cart-btn" id="cart-button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a></li>
                                            <li><a href="#" class="add-to-favourites-btn" id="favourites-button"><i class="fa fa-heart-o" aria-hidden="true"></i> Add To Favourites</a></li>
                                            <li><a href="#" class="buy-now-btn" id="buy-button">Buy Now</a></li>
                                        </ul>
                                    </div>
                                </div>                                
                                <div class="sidebar-item">
                                    <div class="sidebar-item-inner">
                                        <ul class="sidebar-sale-info">
                                            <li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                                            <li>05</li>
                                            <li>Sales</li>                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-item">
                                    <div class="sidebar-item-inner">
                                        <h3 class="sidebar-item-title">Product Information</h3>
                                        <ul class="sidebar-product-info">
                                            <li>Released On:<span> 1 January, 2016</span></li>
                                            <li>Last Update:<span> 20 April, 2016</span></li>
                                            <li>Download:<span> 613</span></li>
                                            <li>Version:<span> 1.1</span></li>
                                            <li>Compatibility:<span> Wordpress 4+</span></li>
                                            <li>Compatible Browsers:<span> IE9, IE10, IE11, Firefox, Safari, Opera, Chrome</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-item">
                                    <div class="sidebar-item-inner">
                                        <h3 class="sidebar-item-title">Product Author</h3>
                                        <div class="sidebar-author-info">
                                            <img src="img/profile/avatar.jpg" alt="product" class="img-responsive">
                                            <div class="sidebar-author-content">
                                                <h3>PsdBoss</h3>
                                                <a href="#" class="view-profile">View Profile</a>
                                            </div>
                                        </div>
                                        <ul class="sidebar-badges-item">
                                            <li><img src="img/profile/badges1.png" alt="badges" class="img-responsive"></li>
                                            <li><img src="img/profile/badges2.png" alt="badges" class="img-responsive"></li>
                                            <li><img src="img/profile/badges3.png" alt="badges" class="img-responsive"></li>
                                            <li><img src="img/profile/badges4.png" alt="badges" class="img-responsive"></li>
                                            <li><img src="img/profile/badges5.png" alt="badges" class="img-responsive"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>                         -->
                </div>
            </div>
        </div>
        <!-- Product Details Page End Here -->
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

    <!-- Select2 Js -->
    <script src="js/select2.min.js" type="text/javascript"></script>

    <!-- Custom Js -->
    <script src="js/main.js" type="text/javascript"></script>

    <script>
        function openDetailPage(ev, id) {
            ev.preventDefault();
            console.log(id);

            window.open(`single-product.php?id=${encodeURI(id)}`, '_self');
        }
    </script>

</body>

<!-- single-product.html   07:32:49 GMT -->

</html>