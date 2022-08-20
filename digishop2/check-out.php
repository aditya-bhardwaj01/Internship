<?php

include "common_section/head.php";
include "common_section/header.php";
include "common_section/footer.php";

?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- check-out.html   07:33:34 GMT -->
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
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->          
            <!-- Checkout Page Area Start Here -->
            <div class="checkout-page-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="checkout-page-top">
                                <p><i class="fa fa-check" aria-hidden="true"></i><a href="#"> Returning customer? Click here to login</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="billing-details-area">
                                <h2 class="cart-area-title">BILLING DETAILS</h2>
                                <form class="checkout-form-select2">
                                    <div class="row">
                                        <!-- First Name -->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                            <div class="form-group">
                                                <label class="control-label" for="first-name">First Name *</label>
                                                <input type="text" id="first-name" class="form-control">
                                            </div>
                                        </div>
                                        <!-- last Name -->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                            <div class="form-group">
                                                <label class="control-label" for="last-name">Last Name *</label>
                                                <input type="text" id="last-name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Company Name -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                                            <div class="form-group">
                                                <label class="control-label" for="company-name">Company Name</label>
                                                <input type="text" id="company-name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Email -->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                            <div class="form-group">
                                                <label class="control-label" for="email">E-mail Address *</label>
                                                <input type="text" id="email" class="form-control">
                                            </div>
                                        </div>
                                        <!-- Phone -->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                            <div class="form-group">
                                                <label class="control-label" for="phone">Phone *</label>
                                                <input type="text" id="phone" class="form-control">
                                            </div>
                                        </div>
                                    </div>                                  
                                    <div class="row">
                                        <!-- Country -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                                            <div class="form-group">
                                                <label class="control-label" for="country">Country</label>
                                                <div class="custom-select">
                                                    <select id="country" class='select2'>
                                                        <option value="0">Select your country</option>
                                                        <option value="1">Bangladesh</option>
                                                        <option value="2">Spain</option>
                                                        <option value="3">Belgium</option>
                                                        <option value="3">Ecuador</option>
                                                        <option value="3">Ghana</option>
                                                        <option value="3">South Africa</option>
                                                        <option value="3">India</option>
                                                        <option value="3">Pakistan</option>
                                                        <option value="3">Thailand</option>
                                                        <option value="3">Malaysia</option>
                                                        <option value="3">Italy</option>
                                                        <option value="3">Japan</option>
                                                        <option value="4">Germany</option>
                                                        <option value="5">USA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Address -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                                            <div class="form-group">
                                                <label class="control-label">Address</label>
                                                <input type="text" id="address-line1" class="form-control">
                                                <input type="text" id="address-line2" class="form-control">
                                            </div>
                                        </div>                                      
                                    </div>      
                                    <div class="row">
                                        <!-- Town / City -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                                            <div class="form-group">
                                                <label class="control-label" for="town-city">Town / City</label>
                                                <input type="text" id="town-city" class="form-control">
                                                
                                            </div>
                                        </div>                                      
                                    </div>  
                                    <div class="row">
                                        <!-- District -->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                            <div class="form-group">
                                                <label class="control-label" for="district">District *</label>
                                                <div class="custom-select">
                                                    <select id="district" class='select2'>
                                                        <option value="0">Select Your District</option>
                                                        <option value="1">Dhaka</option>
                                                        <option value="2">Rajshahi</option>
                                                        <option value="4">Chittagong</option>
                                                        <option value="5">GAZIPUR</option>
                                                        <option value="6">GOPALGANJ</option>
                                                        <option value="7">JAMALPUR</option>
                                                        <option value="8">KISHOREGONJ</option>
                                                        <option value="9">MADARIPUR</option>
                                                        <option value="10">MANIKGANJ</option>
                                                        <option value="11">MUNSHIGANJ</option>
                                                        <option value="12">MYMENSINGH</option>
                                                        <option value="13">NARAYANGANJ</option>
                                                        <option value="14">NARSINGDI</option>
                                                        <option value="15">NETRAKONA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Postcode / ZIP -->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                            <div class="form-group">
                                                <label class="control-label" for="postcode">Postcode / ZIP</label>
                                                <input type="text" id="postcode" class="form-control">
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="row">
                                        <!-- CREAT AN ACCOUNT? -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                                            <div class="form-group">
                                                <span class="checkbox"><input type="checkbox" name="remember"/>CREAT AN ACCOUNT?</span>  
                                            </div>
                                        </div>                                      
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="ship-to-another-area">
                                <h2 class="cart-area-title">SHIP TO A DIFFERENT ADDRESS?<span><input type="checkbox" name="remember"/></span></h2>
                                <label class="control-label">Order Notes</label>
                                <textarea class="form-control" style="min-width: 100%">Notes about your order, e.g. special notes for delivery.</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                            <div class="order-sheet">
                                <h2>Your Order</h2>
                                <ul>
                                    <li>01. Product Title<span>$59.00</span></li>
                                    <li>02. Product Title<span>$59.00</span></li>
                                </ul>
                                <h3>Subtotal<span>$ 118.00</span></h3>
                                <h3>Total<span>$ 118.00</span></h3>
                            </div>
                        </div>                                      
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                            <div class="payment-option">
                                <div class="form-group">
                                    <span><input type="checkbox" name="remember"/>DIRECT BANK TRANSFER</span>
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>    
                                </div>
                                <div class="form-group">
                                    <span><input type="checkbox" name="remember"/>CHECK PAYMENTS</span>
                                </div>
                                <div class="form-group">
                                    <span><input type="checkbox" name="remember"/>CASH ON DELIVERY</span>
                                </div>
                            </div>
                        </div>                                      
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                            <div class="pLace-order">
                                <button class="btn-send-message disabled" type="submit" value="Login">PLace Order</button>
                            </div>
                        </div>                                      
                    </div>
                </div>
            </div>
            <!-- Checkout Page Area End Here -->
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

        <!-- Select2 Js -->
        <script src="js/select2.min.js" type="text/javascript"></script>

        <!-- Nouislider Js -->
        <script src="vendor/noUiSlider/nouislider.min.js" type="text/javascript"></script>

        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js" type="text/javascript"></script>
        
        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>

    </body>

<!-- check-out.html   07:33:34 GMT -->
</html>
