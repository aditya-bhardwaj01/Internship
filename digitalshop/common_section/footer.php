<?php

$con = mysqli_connect("localhost", "root", "", "ideal_village");
$sql = "SELECT * FROM site_settings";
$res = mysqli_query($con, $sql);

$footer = '';

foreach($res as $row){
    $footer .= '<footer>
    <div class="footer-widget">
        <div class="container">
            <div class="footer-widget-wpr de-padding">
                <div class="row f-cs g-5">
                    <div class="col-xl-4 col-md-6">
                        <div class="footer-widget-box about-us">
                            <h4 class="footer-widget-title">About Us</h4>
                            <p>
                                '.$row['about_site'].'
                            </p>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="course.php">Our courses</a></li>
                                <li><a href="blog.php">Blogs</a></li>
                                <li><a href="app.php">Mobile Apps</a></li>
                                <li><a href="career.php">Career With Us</a></li>
                                <li><a href="seller.php">Sellers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="course.php">Our courses</a></li>
                                <li><a href="blog.php">Blogs</a></li>
                                <li><a href="app.php">Mobile Apps</a></li>
                                <li><a href="career.php">Career With Us</a></li>
                                <li><a href="seller.php">Sellers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget-box f-contact">
                            <h4 class="footer-widget-title">Quick Contact</h4>
                            <p class="mb-0">
                                '.$row['address'].'
                            </p>
                            <div class="footer-contact mt-20 mb-20">
                                <form>
                                    <input class="form-control input-style-1" type="email" placeholder="Your Mail">
                                    <button type="submit" class="btn-sub">
                                        <i><img src="assets/img/icons/submit.png" alt="MaanSoft"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="pay">
                                <a href="#">
                                    <img src="assets/img/icons/payment.png" alt="thumb">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p class="mb-0">© Copyright '.$row['site_name'].' 2021. All Right Reserved.</p>
        </div>
    </div>
    </footer>';
}

?>