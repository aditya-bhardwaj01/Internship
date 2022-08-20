<?php

include "common_section/head.php";
include "common_section/header.php";
include "common_section/footer.php";

?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- upload-products.html   07:33:08 GMT -->
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
        <?php echo $header; ?>
            <!-- Main Banner 1 Area End Here --> 
            <!-- Inner Page Banner Area Start Here -->
            <div class="pagination-area bg-secondary">
                <div class="container">
                    <div class="pagination-wrapper">
                        <ul>
                            <li><a href="index.html">Home</a><span> -</span></li>
                            <li>Upload Product</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->          
            <!-- Product Upload Page Start Here -->
            <div class="product-upload-page-area bg-secondary section-space-bottom">
                <div class="container">
                    <h3 class="title-section">Upload Your item</h3>
                    <form id="personal-info-form">
                        <div class="product-upload-wrapper inner-page-padding">
                            <div class="form-group upload-info-item"> 
                                <div class="upload-info-title"> 
                                    <h4>Select Categories<span>*</span></h4>
                                </div>
                                <div class="upload-info-field"> 
                                    <div class="custom-select">
                                        <select id="categories" class='select2'>
                                            <option value="0">Select</option>
                                            <option value="1">Categorie 01</option>
                                            <option value="2">Categorie 02</option>
                                            <option value="3">Categorie 03</option>
                                            <option value="4">Categorie 04</option>
                                            <option value="5">Categorie 05</option>
                                            <option value="6">Categorie 06</option>
                                            <option value="7">Categorie 07</option>
                                            <option value="8">Categorie 08</option>
                                            <option value="9">Categorie 09</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group upload-info-item"> 
                                <div class="upload-info-title"> 
                                    <h4>Product Name<span>*</span></h4>
                                </div>
                                <div class="upload-info-field"> 
                                    <input class="profile-heading" placeholder="Enter your product name here ..." value="" name="product-title" type="text">
                                </div>
                            </div>
                            <div class="form-group upload-info-item"> 
                                <div class="upload-info-title"> 
                                    <h4>Product Description<span>*</span></h4>
                                </div>
                                <div class="upload-info-field"> 
                                    <textarea class="profile-heading" name="profile-details" rows="5" placeholder="&lt;h1&gt; Type your text  here &lt;/h1/&gt;"></textarea>
                                </div>
                            </div>
                            <div class="form-group upload-info-item"> 
                                <div class="upload-info-title"> 
                                    <h4>Upload Main File<span>*</span></h4>
                                </div>
                                <div class="upload-info-field"> 
                                    <div class="file-upload-area"><a href="#">Choose File</a>No File Choosen</div>
                                </div>
                            </div> 
                            <div class="form-group upload-info-item"> 
                                <div class="upload-info-title"> 
                                    <h4>Upload Screenshots<span>*</span></h4>
                                </div>
                                <div class="upload-info-field"> 
                                    <div class="file-upload-area"><a href="#">Choose File</a>No File Choosen</div>
                                </div>
                            </div> 
                            <div class="form-group upload-info-item"> 
                                <div class="upload-info-title"> 
                                    <h4>File Included<span>*</span></h4>
                                </div>
                                <div class="upload-info-field"> 
                                    <div class="custom-select">
                                        <select id="file-lncluded" class='select2'>
                                            <option value="0">Select File Type</option>
                                            <option value="1">File Type 01</option>
                                            <option value="2">File Type 02</option>
                                            <option value="3">File Type 03</option>
                                            <option value="4">File Type 04</option>
                                            <option value="5">File Type 05</option>
                                            <option value="6">File Type 06</option>
                                            <option value="7">File Type 07</option>
                                            <option value="8">File Type 08</option>
                                            <option value="9">File Type 09</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group upload-info-item"> 
                                <div class="upload-info-title"> 
                                    <h4>File Dimensions<span>*</span></h4>
                                </div>
                                <div class="upload-info-field"> 
                                    <input class="profile-heading" placeholder="Enter the item  dimentionss here ..." value="" name="dimentionss" type="text">
                                </div>
                            </div> 
                            <div class="form-group upload-info-item"> 
                                <div class="upload-info-title"> 
                                    <h4>Item Tags<span>*</span></h4>
                                </div>
                                <div class="upload-info-field"> 
                                    <input class="profile-heading" placeholder="Enter Tag Here" value="" name="tag" type="text">
                                </div>
                            </div>
                            <div class="price-set">Set Your Price (US$)</div>
                        </div>
                        <div class="product-upload-wrapper inner-page-padding">
                            <div class="form-group upload-info-item"> 
                                <div class="upload-info-title"> 
                                    <h4>Regular License<span>*</span></h4>
                                </div>
                                <div class="upload-info-field"> 
                                    <input class="profile-heading" placeholder="$00.00" value="" name="regular" type="text">
                                </div>
                            </div>
                            <div class="form-group upload-info-item"> 
                                <div class="upload-info-title"> 
                                    <h4>Extended License<span>*</span></h4>
                                </div>
                                <div class="upload-info-field"> 
                                    <input class="profile-heading" placeholder="$00.00" value="" name="extended " type="text">
                                    <a href="#" class="update-btn" id="login-button">Submit</a>
                                </div>
                            </div> 
                        </div>  
                    </form> 
                </div> 
            </div>
            <!-- Product Upload Page End Here -->
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

<!-- upload-products.html   07:33:08 GMT -->
</html>
