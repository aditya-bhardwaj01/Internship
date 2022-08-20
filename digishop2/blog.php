<?php

include "common_section/head.php";
include "common_section/header.php";
include "common_section/footer.php";

?>

<!doctype html>
<html class="no-js" lang="">

<!-- blog.html   07:33:17 GMT -->

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
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Profile Page Start Here -->
        <div class="blog-page-area bg-secondary section-space-bottom">
            <div class="container">
                <h2 class="title-secondary">Our Latest Blog</h2>
            </div>
            <div class="container">
                <div class="blog-page-wrapper">
                    <div class="row">
                        <?php
                        $sql = "SELECT * FROM post where site_id = $this_site_id AND status = 'published'";
                        $res = mysqli_query($conn, $sql);

                        foreach ($res as $row) {
                        ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="height: 400px;">
                                <div class="single-item">
                                    <div class="item-img-holder">
                                        <a href="single-blog.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>"><img src="<?php echo $row['featured_image']; ?>" class="img-responsive" alt="research"></a>
                                        <?php 
                                        $dt = new DateTime($row['created_date']);
                                        $mon = date("F", mktime(0, 0, 0, $dt->format('m'), 10));
                                        $month = substr($mon, 0, 3);
                                        $day = $dt->format('d');
                                        $year = $dt->format('Y');
                                        ?>
                                        <span><?php echo $day.' '.$month.', '.$year; ?></span>
                                    </div>
                                    <div class="item-content-holder">
                                        <h3><a href="single-blog.php?id=<?php echo $row['id']; ?>"><?php echo $row['post_title']; ?></a></h3>
                                        <p>
                                            <?php 
                                            $description = htmlspecialchars($row['post_description'], ENT_QUOTES);
                                            $len = strlen($description);
                                            if($len>300){
                                                $description = substr($description, 0, 300) . '...'; 
                                            }

                                            echo $description; 
                                            
                                            ?>
                                        </p>
                                        <ul class="item-comments">
                                            <li><i class="fa fa-tags" aria-hidden="true"></i>Design</li>
                                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>02</li>
                                            <li><i class="fa fa-eye" aria-hidden="true"></i>10</li>
                                            <li><a class="read-more" href="#">Read More ...</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="item-img-holder">
                                        <a href="#"><img src="img/blog/2.jpg" class="img-responsive" alt="research"></a>
                                       <span>16 Dec, 2016</span>
                                    </div>
                                    <div class="item-content-holder">
                                        <h3><a href="#">How To Start PSD Template?</a></h3>
                                         <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever when an unknown printer.</p>
                                        <ul class="item-comments">
                                            <li><i class="fa fa-tags" aria-hidden="true"></i>Design</li>
                                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>02</li>
                                            <li><i class="fa fa-eye" aria-hidden="true"></i>10</li>
                                            <li><a class="read-more" href="#">Read More ... </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="item-img-holder">
                                        <a href="#"><img src="img/blog/3.jpg" class="img-responsive" alt="research"></a>
                                       <span>16 Dec, 2016</span>
                                    </div>
                                    <div class="item-content-holder">
                                        <h3><a href="#">How To Start PSD Template?</a></h3>
                                         <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever when an unknown printer.</p>
                                        <ul class="item-comments">
                                            <li><i class="fa fa-tags" aria-hidden="true"></i>Design</li>
                                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>02</li>
                                            <li><i class="fa fa-eye" aria-hidden="true"></i>10</li>
                                            <li><a class="read-more" href="#">Read More ... </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="item-img-holder">
                                        <a href="#"><img src="img/blog/4.jpg" class="img-responsive" alt="research"></a>
                                       <span>16 Dec, 2016</span>
                                    </div>
                                    <div class="item-content-holder">
                                        <h3><a href="#">How To Start PSD Template?</a></h3>
                                         <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever when an unknown printer.</p>
                                        <ul class="item-comments">
                                            <li><i class="fa fa-tags" aria-hidden="true"></i>Design</li>
                                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>02</li>
                                            <li><i class="fa fa-eye" aria-hidden="true"></i>10</li>
                                            <li><a class="read-more" href="#">Read More ... </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="item-img-holder">
                                        <a href="#"><img src="img/blog/5.jpg" class="img-responsive" alt="research"></a>
                                       <span>16 Dec, 2016</span>
                                    </div>
                                    <div class="item-content-holder">
                                        <h3><a href="#">How To Start PSD Template?</a></h3>
                                         <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever when an unknown printer.</p>
                                        <ul class="item-comments">
                                            <li><i class="fa fa-tags" aria-hidden="true"></i>Design</li>
                                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>02</li>
                                            <li><i class="fa fa-eye" aria-hidden="true"></i>10</li>
                                            <li><a class="read-more" href="#">Read More ... </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="item-img-holder">
                                        <a href="#"><img src="img/blog/6.jpg" class="img-responsive" alt="research"></a>
                                       <span>16 Dec, 2016</span>
                                    </div>
                                    <div class="item-content-holder">
                                        <h3><a href="#">How To Start PSD Template?</a></h3>
                                         <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever when an unknown printer.</p>
                                        <ul class="item-comments">
                                            <li><i class="fa fa-tags" aria-hidden="true"></i>Design</li>
                                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>02</li>
                                            <li><i class="fa fa-eye" aria-hidden="true"></i>10</li>
                                            <li><a class="read-more" href="#">Read More ... </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="item-img-holder">
                                        <a href="#"><img src="img/blog/7.jpg" class="img-responsive" alt="research"></a>
                                       <span>16 Dec, 2016</span>
                                    </div>
                                    <div class="item-content-holder">
                                        <h3><a href="#">How To Start PSD Template?</a></h3>
                                         <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever when an unknown printer.</p>
                                        <ul class="item-comments">
                                            <li><i class="fa fa-tags" aria-hidden="true"></i>Design</li>
                                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>02</li>
                                            <li><i class="fa fa-eye" aria-hidden="true"></i>10</li>
                                            <li><a class="read-more" href="#">Read More ... </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="item-img-holder">
                                        <a href="#"><img src="img/blog/8.jpg" class="img-responsive" alt="research"></a>
                                       <span>16 Dec, 2016</span>
                                    </div>
                                    <div class="item-content-holder">
                                        <h3><a href="#">How To Start PSD Template?</a></h3>
                                         <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever when an unknown printer.</p>
                                        <ul class="item-comments">
                                            <li><i class="fa fa-tags" aria-hidden="true"></i>Design</li>
                                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>02</li>
                                            <li><i class="fa fa-eye" aria-hidden="true"></i>10</li>
                                            <li><a class="read-more" href="#">Read More ... </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="item-img-holder">
                                        <a href="#"><img src="img/blog/9.jpg" class="img-responsive" alt="research"></a>
                                       <span>16 Dec, 2016</span>
                                    </div>
                                    <div class="item-content-holder">
                                        <h3><a href="#">How To Start PSD Template?</a></h3>
                                         <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever when an unknown printer.</p>
                                        <ul class="item-comments">
                                            <li><i class="fa fa-tags" aria-hidden="true"></i>Design</li>
                                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>02</li>
                                            <li><i class="fa fa-eye" aria-hidden="true"></i>10</li>
                                            <li><a class="read-more" href="#">Read More ... </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="pagination-align-left">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile Page End Here -->
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

<!-- blog.html   07:33:25 GMT -->

</html>