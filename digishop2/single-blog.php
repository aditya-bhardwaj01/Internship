<?php

include "common_section/head.php";
include "common_section/header.php";
include "common_section/footer.php";

?>

<!doctype html>
<html class="no-js" lang="">

<!-- single-blog.html   07:33:25 GMT -->

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
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Single Blog Page Start Here -->
        <div class="single-blog-page-area bg-secondary section-space-bottom">
            <div class="container">
                <div class="row">

                    <?php

                    $id = urlencode(base64_decode($_GET['id']));
                    $sql = "SELECT * FROM post WHERE id = $id AND site_id = $this_site_id AND status = 'published'";
                    $res = mysqli_query($conn, $sql);

                    foreach ($res as $row) {
                    ?>

                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                            <h2 class="title-section">Single Blog Details</h2>
                            <div class="inner-page-details inner-page-padding">
                                <div class="single-blog-wrapper">
                                    <div class="single-blog-img-holder">
                                        <a href="#">
                                            <img src="<?php echo $row['featured_image']; ?>" alt="blog" class="img-responsive">
                                        </a>
                                        <ul class="news-date1">
                                            <?php
                                            $dt = new DateTime($row['created_date']);
                                            $mon = date("F", mktime(0, 0, 0, $dt->format('m'), 10));
                                            $month = substr($mon, 0, 3);
                                            $day = $dt->format('d');
                                            $year = $dt->format('Y');
                                            ?>
                                            <li><?php echo $day . ' ' . $month; ?></li>
                                            <li><?php echo $year; ?></li>
                                        </ul>
                                    </div>
                                    <ul class="news-comments">
                                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>By</span> Admin</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Business</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i><span>(03)</span> Comments</a></li>
                                    </ul>
                                    <div class="single-blog-content-holder">
                                        <h2><a href="#"><?php echo $row['post_title']; ?></a></h2>
                                        <p><?php echo htmlspecialchars($row['post_description'], ENT_QUOTES); ?></p>
                                        <span>when an unknown printer took a galley of type and scrambled it to make specimen book. It has survived not only five centuries ypesetting remaining essentially.</span>
                                    </div>
                                    <div class="about-author">
                                        <p><?php echo htmlspecialchars($row['post_description'], ENT_QUOTES); ?></p>
                                    </div>
                                    <ul class="tag-share">
                                        <li>
                                            <ul class="inner-tag">
                                                <li><a href="#">Tags:</a></li>
                                                <?php
                                                $tags = explode(',', $row['tags']);

                                                foreach ($tags as $tag) {
                                                ?>
                                                    <li><a href="#"><?php echo $tag; ?>,</a></li>
                                                <?php } ?>
                                                <!-- <li><a href="#">Smart Quotes,</a></li>
                                                <li><a href="#">Unique,</a></li>
                                                <li><a href="#">Design</a></li> -->
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="inner-share">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="blog-comments">
                                        <h2>02 Comments</h2>
                                        <ul>
                                            <li>
                                                <div class="comments-img">
                                                    <img src="img/blog/11.jpg" class="img-responsive" alt="comments">
                                                </div>
                                                <div class="comments-content">
                                                    <h3><a href="#">Nathan Ford, September 09, 2016 </a></h3>
                                                    <p>Borem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    <span><a href="#">Reply</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comments-img">
                                                    <img src="img/blog/12.jpg" class="img-responsive" alt="comments">
                                                </div>
                                                <div class="comments-content">
                                                    <h3><a href="#">Nathan Ford, September 09, 2016 </a></h3>
                                                    <p>Borem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    <span><a href="#">Reply</a></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="leave-comments">
                                        <h2>Leave A Comments</h2>
                                        <div class="row">
                                            <div class="contact-form">
                                                <form>
                                                    <fieldset>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <input placeholder="Name*" class="form-control" type="text">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <input placeholder="Email*" class="form-control" type="email">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <input placeholder="Website*" class="form-control" type="text">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <textarea placeholder="Message*" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="update-btn">Send Message</button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="fox-sidebar">
                            <div class="sidebar-item">
                                <div class="sidebar-item-inner">
                                    <h3 class="sidebar-item-title">Categories</h3>
                                    <ul class="sidebar-categories-list">
                                        <li><a href="#">WordPress<span>(150)</span></a></li>
                                        <li><a href="#">Joomla <span>(100)</span></a></li>
                                        <li><a href="#">PSD<span>(50)</span></a></li>
                                        <li><a href="#">Plugins<span>(60)</span></a></li>
                                        <li><a href="#">Components<span>(40)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="sidebar-item-inner">
                                    <h3 class="sidebar-item-title">Latest posts</h3>
                                    <ul class="sidebar-latest-post">
                                        <?php
                                        $sql = "SELECT * FROM post WHERE site_id = $this_site_id AND status = 'published' 
												ORDER BY created_date DESC LIMIT 4";

                                        $res = mysqli_query($conn, $sql);

                                        foreach ($res as $row) {
                                        ?>
                                            <li>
                                                <div class="latest-post-img">
                                                    <a href="single-blog.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>">
                                                        <img src="<?php echo $row['featured_image']; ?>" class="img-responsive" alt="blog">
                                                    </a>
                                                </div>
                                                <div class="latest-post-content">
                                                    <?php
                                                    $dt = new DateTime($row['created_date']);
                                                    $mon = date("F", mktime(0, 0, 0, $dt->format('m'), 10));
                                                    $month = substr($mon, 0, 3);
                                                    $day = $dt->format('d');
                                                    $year = $dt->format('Y');
                                                    ?>
                                                    <h4><?php echo $day.' '.$month.', '.$year; ?></h4>
                                                    <p><?php 
                                                    $description = htmlspecialchars($row['post_description'], ENT_QUOTES);
                                                    $len = strlen($description);
                                                    if($len>27){
                                                        $description = substr($description, 0, 27) . '...'; 
                                                    }
        
                                                    echo $description; 
                                                    ?></p>
                                                </div>
                                            </li>
                                            <!-- <li>
                                                <div class="latest-post-img">
                                                    <a href="#"><img src="img/blog/14.jpg" class="img-responsive" alt="blog"></a>
                                                </div>
                                                <div class="latest-post-content">
                                                    <h4>10 Aug, 2016</h4>
                                                    <p>when an unknown printer took.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="latest-post-img">
                                                    <a href="#"><img src="img/blog/15.jpg" class="img-responsive" alt="blog"></a>
                                                </div>
                                                <div class="latest-post-content">
                                                    <h4>05 Jul, 2016</h4>
                                                    <p>when an unknown printer took.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="latest-post-img">
                                                    <a href="#"><img src="img/blog/16.jpg" class="img-responsive" alt="blog"></a>
                                                </div>
                                                <div class="latest-post-content">
                                                    <h4>30 Feb, 2016</h4>
                                                    <p>when an unknown printer took.</p>
                                                </div>
                                            </li> -->
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="sidebar-item-inner">
                                    <h3 class="sidebar-item-title">Archives</h3>
                                    <ul class="sidebar-categories-list">
                                        <li><a href="#">2016<span>(50)</span></a></li>
                                        <li><a href="#">2015 <span>(40)</span></a></li>
                                        <li><a href="#">2013<span>(50)</span></a></li>
                                        <li><a href="#">2012<span>(60)</span></a></li>
                                        <li><a href="#">2010<span>(40)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Blog Page End Here -->
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

    <!-- Custom Js -->
    <script src="js/main.js" type="text/javascript"></script>

</body>

<!-- single-blog.html   07:33:33 GMT -->

</html>