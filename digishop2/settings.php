<?php

include "common_section/head.php";
include "common_section/header.php";
include "common_section/footer.php";

?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- settings.html   07:33:01 GMT -->
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
                            <li>Settings</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->          
            <!-- Settings Page Start Here -->
            <div class="settings-page-area bg-secondary section-space-bottom">
                <div class="container">
                    <div class="row settings-wrapper">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <ul class="settings-title">
                                <li class="active"><a href="#Personal" data-toggle="tab" aria-expanded="false">Personal Information</a></li>
                                <li><a href="#Profile" data-toggle="tab" aria-expanded="false">Profile</a></li>
                                <li><a href="#Badges" data-toggle="tab" aria-expanded="false">Badges</a></li>
                                <li><a href="#E-mail" data-toggle="tab" aria-expanded="false">E-mail Settings</a></li>
                                <li><a href="#Social" data-toggle="tab" aria-expanded="false">Social Network</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
                            <form class="form-horizontal" id="personal-info-form">
                                <div class="settings-details tab-content">
                                    <div class="tab-pane fade active in" id="Personal">
                                        <h2 class="title-section">Personal Information</h2>
                                        <div class="personal-info inner-page-padding"> 
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">First Name</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="first-name" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Last Name</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="last-name" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Company Name</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="company-name" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Country</label>
                                                <div class="col-sm-9">
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
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Address Line 1</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="address1" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Address Line 2</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="address2" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">City</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="city" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">State / Province / Region</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="state" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Zip / Postal Code</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="zip" type="text">
                                                    <a href="#" class="update-btn" id="login-update">Update</a>
                                                </div>
                                            </div>                                        
                                        </div> 
                                    </div> 
                                    <div class="tab-pane fade" id="Profile">
                                        <h3 class="title-section">Public Profile</h3>
                                        <div class="public-profile inner-page-padding"> 
                                            <div class="public-profile-item"> 
                                                <div class="public-profile-title"> 
                                                    <h4>Avatar</h4>
                                                </div>
                                                <div class="public-profile-content"> 
                                                    <img class="img-responsive" src="img/profile/avatar.jpg" alt="Avatar">
                                                    <div class="file-title">Upload a new avatar:</div>
                                                    <div class="file-upload-area"><a href="#">Choose File</a>No File Choosen</div>
                                                    <div class="file-size">JPEG 80x80px</div>
                                                </div>
                                            </div> 
                                            <div class="public-profile-item"> 
                                                <div class="public-profile-title"> 
                                                    <h4>Banner Image</h4>
                                                </div>
                                                <div class="public-profile-content"> 
                                                    <img class="img-responsive" src="img/profile/banner.jpg" alt="Avatar">
                                                    <div class="file-title">Upload a new homepage image:</div>
                                                    <div class="file-upload-area"><a href="#">Choose File</a>No File Choosen</div>
                                                    <div class="file-size">JPEG 590x242</div>
                                                </div>
                                            </div> 
                                            <div class="public-profile-item"> 
                                                <div class="public-profile-title"> 
                                                    <h4>Show Your Country Name on Your Profile</h4>
                                                </div>
                                                <div class="public-profile-content"> 
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
                                                        <label for="inlineRadio1"> Yes</label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                                        <label for="inlineRadio2"> No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="public-profile-item"> 
                                                <div class="public-profile-title"> 
                                                    <h4>Profile Heading</h4>
                                                </div>
                                                <div class="public-profile-content"> 
                                                    <input class="profile-heading" type="text" value="">
                                                    <div class="file-size">Appears on your profile page</div>
                                                </div>
                                            </div>
                                            <div class="public-profile-item"> 
                                                <div class="public-profile-title"> 
                                                    <h4>Profile Text</h4>
                                                </div>
                                                <div class="public-profile-content"> 
                                                    <textarea class="profile-heading" rows="5"></textarea>
                                                    <div class="file-size">Here's a refresher on how to add some HTML magic to your comment.</div>
                                                    <ul class="html-format">
                                                        <li>&lt;strong&gt;&lt;/strong&gt; to make things bold</li>
                                                        <li>&lt;em&gt;&lt;/em&gt; to emphasize</li>
                                                        <li>&lt;ul&gt;&lt;li&gt; or &lt;ol&gt;&lt;li&gt; to make lists</li>
                                                        <li>&lt;h3&gt; or &lt;h4&gt; to make headings</li>
                                                        <li>&lt;pre&gt;&lt;/pre&gt; for code blocks</li>
                                                        <li>&lt;code&gt;&lt;/code&gt; for a few words of code</li>
                                                        <li>&lt;a&gt;&lt;/a&gt; for links</li>
                                                        <li>&lt;img&gt; to paste in an image (it'll need to be hosted somewhere else though)</li>
                                                        <li>&lt;blockquote&gt;&lt;/blockquote&gt; to quote somebody</li>
                                                    </ul>
                                                    <a href="#" class="update-btn" id="save">Save</a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="tab-pane fade" id="Badges">
                                        <div class="inner-page-main-body">                               
                                            <div class="author-summery">
                                                <div class="single-item">
                                                    <div class="item-title">Country:</div>
                                                    <div class="item-details">England</div>                                       
                                                </div>
                                                <div class="single-item">
                                                    <div class="item-title">Member Since:</div>
                                                    <div class="item-details">December 26, 2014</div>                                       
                                                </div>
                                                <div class="single-item">
                                                    <div class="item-title">Author Rating:</div>
                                                    <div class="item-details">
                                                        <ul class="default-rating">
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li>(<span> 05</span> )</li>
                                                        </ul>
                                                    </div>                                       
                                                </div>
                                                <div class="single-item">
                                                    <div class="item-title">Total Sales:</div>
                                                    <div class="item-name">$ 5,030</div>                                       
                                                </div>
                                            </div>
                                        </div> 
                                        <h2 class="title-section">Your Badges</h2> 
                                        <div class="profile-badges inner-page-padding">
                                            <p>You Cahnge Your Badge Position</p>
                                            <ul class="badges-item">
                                                <li><img src="img/profile/badges1.png" alt="badges" class="img-responsive"></li>
                                                <li><img src="img/profile/badges2.png" alt="badges" class="img-responsive"></li>
                                                <li><img src="img/profile/badges3.png" alt="badges" class="img-responsive"></li>
                                                <li><img src="img/profile/badges4.png" alt="badges" class="img-responsive"></li>
                                                <li><img src="img/profile/badges5.png" alt="badges" class="img-responsive"></li>
                                            </ul>
                                            <a href="#" class="update-btn" id="badge-save">Save</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="E-mail">
                                        <h2 class="title-section">Email Settings</h2> 
                                        <div class="profile-email inner-page-padding">
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Rating reminders</label>
                                                <p>Send an email reminding me to rate an item a week after purchase</p>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Rating reminders</label>
                                                <p>Send an email reminding me to rate an item a week after purchase</p>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Rating reminders</label>
                                                <p>Send an email reminding me to rate an item a week after purchase</p>
                                            </div>
                                            <a href="#" class="update-btn" id="email-setting-save">Save</a>
                                        </div> 
                                    </div>
                                    <div class="tab-pane fade" id="Social">
                                        <h2 class="title-section">Your Social Networks</h2> 
                                        <div class="profile-social inner-page-padding">
                                             <ul class="social-item">
                                                <li>
                                                    <div class="social-item-img"><img src="img/profile/social1.jpg" alt="badges" class="img-responsive"></div> 
                                                    <input class="profile-heading" placeholder="User Name" value="" type="text">
                                                </li> 
                                                 <li>
                                                    <div class="social-item-img"><img src="img/profile/social2.jpg" alt="badges" class="img-responsive"></div> 
                                                    <input class="profile-heading" placeholder="User Name" value="" type="text">
                                                </li>
                                                 <li>
                                                    <div class="social-item-img"><img src="img/profile/social3.jpg" alt="badges" class="img-responsive"></div> 
                                                    <input class="profile-heading" placeholder="User Name" value="" type="text">
                                                </li>
                                                 <li>
                                                    <div class="social-item-img"><img src="img/profile/social4.jpg" alt="badges" class="img-responsive"></div> 
                                                    <input class="profile-heading" placeholder="User Name" value="" type="text">
                                                </li>
                                                 <li>
                                                    <div class="social-item-img"><img src="img/profile/social5.jpg" alt="badges" class="img-responsive"></div> 
                                                    <input class="profile-heading" placeholder="User Name" value="" type="text">
                                                </li>                                         
                                                 <li>
                                                    <div class="social-item-img"><img src="img/profile/social6.jpg" alt="badges" class="img-responsive"></div> 
                                                    <input class="profile-heading" placeholder="User Name" value="" type="text">
                                                </li>
                                                 <li>
                                                    <div class="social-item-img"><img src="img/profile/social7.jpg" alt="badges" class="img-responsive"></div> 
                                                    <input class="profile-heading" placeholder="User Name" value="" type="text">
                                                </li>                                                                                    
                                            </ul>                                       
                                            <a href="#" class="update-btn" id="social-save">Save</a>
                                        </div> 
                                    </div>                                       
                                </div> 

                            </form> 
                        </div>  
                    </div>  
                </div>  
            </div> 
            <!-- Settings Page End Here -->
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

<!-- settings.html   07:33:08 GMT -->
</html>
