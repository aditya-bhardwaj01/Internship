<?php

include "common_section/head.php";
include "common_section/header.php";
include "common_section/footer.php";

?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- withdrawals.html   07:33:16 GMT -->
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
                            <li>Withdrawals</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->          
            <!-- Withdrawal Page Start Here -->
            <div class="withdrawal-page-area bg-secondary section-space-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h3 class="title-section">Withdrawals Earnings</h3>
                            <div class="withdrawal-wrapper inner-page-padding">
                                <form id="personal-info-form">
                                    <div class="form-group withdrawal-info-item"> 
                                        <div class="withdrawal-info-title"> 
                                            <h4>Amount to Withdraw ($2000.00 Maximum)<span> *</span></h4>
                                        </div>
                                        <div class="withdrawal-info-field"> 
                                           <input class="profile-heading" placeholder="Enter the amount you want to withdraw..." value="" name="amount" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group withdrawal-info-item"> 
                                        <div class="withdrawal-info-title"> 
                                            <h4>Choose your Withdraw Method<span> *</span></h4>
                                        </div>
                                        <div class="withdrawal-info-field"> 
                                            <div class="custom-select">
                                                <select id="categories" class='select2'>
                                                    <option value="0">Select Method</option>
                                                    <option value="1">Paypal</option>
                                                    <option value="2">Master Card</option>
                                                    <option value="3">Visa Card</option>
                                                    <option value="4">Scrill</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group withdrawal-info-item"> 
                                        <div class="withdrawal-info-title"> 
                                            <h4>Your Account Name<span> *</span></h4>
                                        </div>
                                        <div class="withdrawal-info-field"> 
                                            <div class="custom-select">
                                                <select id="account-name" class='select2'>
                                                    <option value="0">Select Name</option>
                                                    <option value="1">Name 01</option>
                                                    <option value="2">Name 02</option>
                                                    <option value="3">Name 03</option>
                                                    <option value="4">Name 04</option>
                                                    <option value="5">Name 05</option>
                                                    <option value="6">Name 06</option>
                                                    <option value="7">Name 07</option>
                                                    <option value="8">Name 08</option>
                                                    <option value="9">Name 09</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group withdrawal-info-item"> 
                                        <div class="withdrawal-info-title"> 
                                            <h4>Confirm Your Password Confirm Your Password<span> *</span></h4>
                                        </div>
                                        <div class="withdrawal-info-field"> 
                                            <input class="profile-heading" placeholder="Password" value="" name="password" type="password">
                                        </div>
                                    </div>
                                    <a href="#" class="update-btn" id="login-button">Request Withdrawal</a>
                                </form>
                            </div>  
                        </div> 
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h2 class="title-section">Withdrawal History</h2>
                            <div class="withdrawal-wrapper inner-page-padding">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td>Dec 26th, 2016</td>
                                                <td><a href="https://www.radiustheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="abfbd8cfc9c4d8d8ebdbcad2dbcac785c8c4c6">[email&#160;protected]</a></td>
                                                <td>$200</td>
                                                <td>Pending</td>
                                            </tr>
                                            <tr>
                                                <td>Dec 26th, 2016</td>
                                                <td><a href="https://www.radiustheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="32624156505d41417242534b42535e1c515d5f">[email&#160;protected]</a></td>
                                                <td>$100</td>
                                                <td><span>Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>Dec 26th, 2016</td>
                                                <td><a href="https://www.radiustheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7e2e0d1a1c110d0d3e0e1f070e1f12501d1113">[email&#160;protected]</a></td>
                                                <td>$200</td>
                                                <td><span>Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>Dec 26th, 2016</td>
                                                <td><a href="https://www.radiustheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c797b4a3a5a8b4b487b7a6beb7a6abe9a4a8aa">[email&#160;protected]</a></td>
                                                <td>$150</td>
                                                <td><span>Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>Dec 26th, 2016</td>
                                                <td><a href="https://www.radiustheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="acfcdfc8cec3dfdfecdccdd5dccdc082cfc3c1">[email&#160;protected]</a></td>
                                                <td>$220</td>
                                                <td><span>Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>Dec 26th, 2016</td>
                                                <td><a href="https://www.radiustheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c898bbacaaa7bbbb88b8a9b1b8a9a4e6aba7a5">[email&#160;protected]</a></td>
                                                <td>$100</td>
                                                <td><span>Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>Dec 26th, 2016</td>
                                                <td><a href="https://www.radiustheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aefeddcaccc1ddddeedecfd7decfc280cdc1c3">[email&#160;protected]</a></td>
                                                <td>$300</td>
                                                <td><span>Paid</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                        </div> 
                    </div>  
                </div>  
            </div>  
            <!-- Withdrawal Page End Here -->
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

        <!-- Select2 Js -->
        <script src="js/select2.min.js" type="text/javascript"></script>
        
        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>

    </body>

<!-- withdrawals.html   07:33:16 GMT -->
</html>
