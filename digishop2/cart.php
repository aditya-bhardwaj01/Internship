<?php

include "common_section/head.php";
include "common_section/header.php";
include "common_section/footer.php";

?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- cart.html   07:33:34 GMT -->
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
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->          
            <!-- Cart Page Area Start Here -->
            <div class="cart-page-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cart-page-top table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td class="cart-form-heading"></td>
                                            <td class="cart-form-heading">Product</td>
                                            <td class="cart-form-heading">Price</td>
                                            <td class="cart-form-heading">Quantity</td>
                                            <td class="cart-form-heading">Total</td>
                                            <td class="cart-form-heading"></td>
                                        </tr>
                                    </thead>
                                    <tbody id="quantity-holder">
                                        <tr>
                                            <td class="cart-img-holder">
                                                <a href="#"><img src="img/product/62.jpg" alt="cart" class="img-responsive"></a>
                                            </td>
                                            <td>
                                                <h3><a href="#">Product Title Name</a></h3>
                                            </td>
                                            <td class="amount">$59.00</td>
                                            <td class="quantity">
                                                <div class="input-group quantity-holder">
                                                    <input type="text" name='quantity' class="form-control quantity-input" value="1" placeholder="1">
                                                    <div class="input-group-btn-vertical">
                                                        <button class="btn btn-default quantity-plus" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                        <button class="btn btn-default quantity-minus" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="amount">$59.00</td>
                                            <td class="dismiss"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="cart-img-holder">
                                                <a href="#"><img src="img/product/63.jpg" alt="cart" class="img-responsive"></a>
                                            </td>
                                            <td>
                                                <h3><a href="#">Product Title Name</a></h3>
                                            </td>
                                            <td class="amount">$59.00</td>
                                            <td class="quantity">
                                                <div class="input-group quantity-holder">
                                                    <input type="text" name='quantity' class="form-control quantity-input" value="1" placeholder="1">
                                                    <div class="input-group-btn-vertical">
                                                        <button class="btn btn-default quantity-plus" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                        <button class="btn btn-default quantity-minus" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="amount">$59.00</td>
                                            <td class="dismiss"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="update-button">
                                     <button class="btn-apply-coupon disabled" type="submit" value="Login">Update Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="cart-page-bottom-left">
                                <h2>Coupon</h2>
                                <form method="post">
                                    <input type="text" id="coupon" name="coupon" placeholder="Enter your coupon code if you have one">
                                    <button value="Coupon" type="submit" class="btn-apply-coupon disabled">Apply Coupon</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="cart-page-bottom-right">
                                <h2>Total</h2>
                                <h3>Subtotal<span>$ 118.00</span></h3>
                                <h3>Total<span>$ 118.00</span></h3>
                                <div class="proceed-button">
                                     <button class="btn-apply-coupon disabled" type="submit" value="Login">Proceed To Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cart Page Area End Here -->
            <!-- Footer Area Start Here -->
            <?php echo $footer; ?>
            <!-- Footer Area End Here -->
        </div>
        <!-- Main Body Area End Here -->
        <!-- jquery-->  
        <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>

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

    </body>

<!-- cart.html   07:33:34 GMT -->
</html>
