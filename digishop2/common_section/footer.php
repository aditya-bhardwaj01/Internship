<?php

require_once "config/connection.php";

$sql = "SELECT * FROM site_settings";

$res = mysqli_query($conn, $sql);

$footer = '';

foreach($res as $row){
    $address = $row['address'].', '.$row['city'].', '.$row['state'];
    $footer .= '<footer>
    <div class="footer-area-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-left title-bar-footer">Our Address</h3>
                        <ul class="corporate-address">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="Phone(01)800433633.html">'.$address.'</a></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>+61 3 8376 6284</li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i>+61 3 8376 6284</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="https://www.radiustheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="85ecebe3eac5e3eafdf1e4f7abe6eae8">[email&#160;protected]</a></li>
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
                                <input type="text" placeholder="Enter your e-mail here" class="form-control">
                                <span class="input-group-addon">
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
</footer>';
}


?>