<?php

include "common_section/head.php";
include "common_section/header.php";
include "common_section/footer.php";

?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- sales-statement.html   07:33:08 GMT -->
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
                            <li>Sales Statement</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->          
            <!-- Sales Statement Page Start Here -->
            <div class="sales-statement-page-area bg-secondary section-space-bottom">
                <div class="container">
                    <h2 class="title-section">Your Sales Statement</h2>
                    <div class="sales-statement-wrapper inner-page-padding">
                        <div class="sales-statement-filter">
                            <div class="sales-statement-filter-item">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input type="text" class="form-control rt-date" placeholder="Date" name="date" id="form-date-from" data-error="Subject field is required" required/>
                            </div>
                             <div class="sales-statement-filter-item">
                                <span>To</span>
                            </div>
                             <div class="sales-statement-filter-item">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input type="text" class="form-control rt-date" placeholder="Date" name="date" id="form-date-to" data-error="Subject field is required" required/>
                            </div>
                             <div class="sales-statement-filter-item">
                                <a href="#" class="find-btn" id="login-button">Find</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Avatar</th>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Purchase</th>
                                    <th>Price</th>
                                    <th>Downloads</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1.</th>
                                        <td><img src="img/profile/avatar1.png" alt="avatar" class="img-responsive"></td>
                                        <td>#2050</td>
                                        <td>Jessy Sket</td>
                                        <td>15</td>
                                        <td>$200</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2.</th>
                                        <td><img src="img/profile/avatar2.png" alt="avatar" class="img-responsive"></td>
                                        <td>#2051</td>
                                        <td>Robert Smith</td>
                                        <td>10</td>
                                        <td>$200</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3.</th>
                                        <td><img src="img/profile/avatar3.png" alt="avatar" class="img-responsive"></td>
                                        <td>#2052</td>
                                        <td>Ziniza</td>
                                        <td>20</td>
                                        <td>$200</td>
                                        <td>26</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4.</th>
                                        <td><img src="img/profile/avatar4.png" alt="avatar" class="img-responsive"></td>
                                        <td>#2053</td>
                                        <td>David Rock</td>
                                        <td>15</td>
                                        <td>$200</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5.</th>
                                        <td><img src="img/profile/avatar5.png" alt="avatar" class="img-responsive"></td>
                                        <td>#2054</td>
                                        <td>Jessy Sket</td>
                                        <td>12</td>
                                        <td>$200</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6.</th>
                                        <td><img src="img/profile/avatar6.png" alt="avatar" class="img-responsive"></td>
                                        <td>#2055</td>
                                        <td>Neo Buler</td>
                                        <td>25</td>
                                        <td>$200</td>
                                        <td>42</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7.</th>
                                        <td><img src="img/profile/avatar7.png" alt="avatar" class="img-responsive"></td>
                                        <td>#2056</td>
                                        <td>Jessy Sket</td>
                                        <td>08</td>
                                        <td>$200</td>
                                        <td>20</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="total-sale">Total Sales:<span> $ 5,030</span></div> 
                    </div> 
                </div> 
            </div> 
            <!-- Sales Statement Page End Here -->
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

        <!-- Date Time Picker Js -->
        <script src="js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>
        
        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>

    </body>

<!-- sales-statement.html   07:33:16 GMT -->
</html>
