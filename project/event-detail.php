<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart eCommmerce Marketplace HTML Template</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/default-skin/default-skin.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
</head>

<body>
    <div class="page-wrapper">
        <!-- Start of Header -->
        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main mb-10 pb-1">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav container">
                <ul class="breadcrumb bb-no">
                    <li><a href="demo1.html">Home</a></li>
                    <li><a href="product-default.html">Products</a></li>
                    <li>Vertical Thumbs</li>
                </ul>
                <ul class="product-nav list-style-none">
                    <li class="product-nav-prev">
                        <a href="#">
                            <i class="w-icon-angle-left"></i>
                        </a>
                        <span class="product-nav-popup">
                            <img src="assets/images/products/product-nav-prev.jpg" alt="Product" width="110" height="110" />
                            <span class="product-name">Soft Sound Maker</span>
                        </span>
                    </li>
                    <li class="product-nav-next">
                        <a href="#">
                            <i class="w-icon-angle-right"></i>
                        </a>
                        <span class="product-nav-popup">
                            <img src="assets/images/products/product-nav-next.jpg" alt="Product" width="110" height="110" />
                            <span class="product-name">Fabulous Sound Speaker</span>
                        </span>
                    </li>
                </ul>
            </nav>
            <!-- End of Breadcrumb -->

            <?php
            include "config/connection.php";
            $id = $_GET['id'];
            $sql = "SELECT * FROM marketplace_events WHERE id = $id";
            $res = mysqli_query($conn, $sql);

            $rows = [];

            while($row = mysqli_fetch_assoc($res)) {
                $rows[] = $row;
            }
            ?>
            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <div class="product product-single row">
                        <div class="col-md-3 mb-3">
                            <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                <figure class="product-image">
                                    <img src="<?php echo $rows[0]['image'] ?>" data-zoom-image="assets/images/products/without/1-800x900.jpg" alt="Bright Green IPhone" width="800" height="900">
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-8 mb-4 mb-md-6">
                            <div class="product-details">
                                <h1 class="product-title"><?php echo $rows[0]['event_title']; ?></h1>
                                <div class="product-bm-wrapper">
                                    <figure class="brand">
                                        <img src="<?php echo $rows[0]['organiser_logo']; ?>" alt="Brand" width="105" height="48" />
                                    </figure>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top">4.00</span>
                                        </div>
                                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                                    </div>
                                    <div class="product-meta">
                                        <div class="product-categories">
                                            Category: <span class="product-category"><a href="#"><?php echo $rows[0]['event_category'] ?></a></span>
                                        </div>
                                        <div class="product-sku">
                                            Address: <span><?php echo $rows[0]['address']; ?></span>
                                        </div>
                                        <div class="widget-body tags">
                                            <!-- <a href="#" class="tag">Fashion</a>
                                            <a href="#" class="tag">Style</a>
                                            <a href="#" class="tag">Travel</a>
                                            <a href="#" class="tag">Women</a>
                                            <a href="#" class="tag">Men</a>
                                            <a href="#" class="tag">Hobbies</a>
                                            <a href="#" class="tag">Shopping</a>
                                            <a href="#" class="tag">Photography</a> -->

                                            <?php 
                                            $tags = explode(',', $rows[0]['tags']);
                                            foreach($tags as $value){
                                            ?>
                                            <a href="#" class="tag"><?php echo $value; ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <hr class="product-divider">
                                <div class="product-countdown-container flex-wrap">
                                    <label class="mr-2 text-default">Event Starts in:</label>
                                    <div style="color: #336699; font-weight: bold;" id="main-event-countdown" data-until="2022, 12, 31" data-compact="true">
                                        <?php echo $rows[0]['start_date']; ?>
                                        </div>
                                </div>
                                <hr class="product-divider">

                                <div class="fix-bottom product-sticky-content sticky-content">
                                    <div class="btn-group">
                                        <div class="btn-wrap show-code-action">
                                            <a href="#" class="btn btn-sm btn-primary show-code-action" data-toggle="modal" data-target="#myModal">Sponsor</a>
                                        </div>
                                        <div class="btn-wrap show-code-action">
                                            <a href="#" class="btn btn-sm btn-primary btn-outline btn-rounded">Buy Ticket</a>
                                        </div>
                                        <div class="btn-wrap show-code-action">
                                            <a href="#" class="btn btn-sm btn-primary btn-outline btn-rounded">Book a Stall</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="social-links-wrapper">
                                    <div class="social-links">
                                        <div class="social-icons social-no-color border-thin">
                                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                            <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                            <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                            <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                                        </div>
                                    </div>
                                    <span class="divider d-xs-show"></span>
                                    <div class="product-link-wrapper d-flex">
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab tab-nav-boxed tab-nav-underline product-tabs mt-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#product-tab-description" class="nav-link active">Event Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="#product-tab-reviews" class="nav-link">Customer Reviews (3)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-tab-description">
                                <div class="row mb-4">
                                    <div class="col-md-6 mb-5">
                                        <h4 class="title tab-pane-title font-weight-bold mb-2">Detail</h4>
                                        <?php echo $rows[0]['event_description']; ?>
                                        <h4 class="title tab-pane-title font-weight-bold mb-2">Highlights</h4>
                                        <?php echo $rows[0]['highlights']; ?>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <h4 class="title tab-pane-title font-weight-bold mb-2">Past Event Gallery</h4>
                                        <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                            <div class="swiper-container product-single-swiper swiper-theme nav-inner" data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">
                                                <div class="swiper-wrapper row cols-1 gutter-no">
                                                    <div class="swiper-slide">
                                                        <figure class="product-image">
                                                            <img src="https://images.pexels.com/photos/2747449/pexels-photo-2747449.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" data-zoom-image="https://images.pexels.com/photos/2747449/pexels-photo-2747449.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500s" alt="Electronics Black Wrist Watch" width="800" height="900">
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <figure class="product-image">
                                                            <img src="https://images.pexels.com/photos/2747449/pexels-photo-2747449.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" data-zoom-image="https://images.pexels.com/photos/2747449/pexels-photo-2747449.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500s" alt="Electronics Black Wrist Watch" width="800" height="900">
                                                        </figure>
                                                    </div>
                                                </div>
                                                <button class="swiper-button-next"></button>
                                                <button class="swiper-button-prev"></button>
                                                <a href="#" class="product-gallery-btn product-image-full"><i class="w-icon-zoom"></i></a>
                                            </div>
                                            <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            },
                                            'breakpoints': {
                                                '992': {
                                                    'direction': 'vertical',
                                                    'slidesPerView': 'auto'
                                                }
                                            }
                                        }">
                                                <div class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                    <div class="product-thumb swiper-slide">
                                                        <img src="https://images.pexels.com/photos/2747449/pexels-photo-2747449.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Product Thumb" width="800" height="900">
                                                    </div>
                                                    <div class="product-thumb swiper-slide">
                                                        <img src="https://images.pexels.com/photos/2747449/pexels-photo-2747449.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Product Thumb" width="800" height="900">
                                                    </div>
                                                    <div class="product-thumb swiper-slide">
                                                        <img src="https://images.pexels.com/photos/2747449/pexels-photo-2747449.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Product Thumb" width="800" height="900">
                                                    </div>
                                                    <div class="product-thumb swiper-slide">
                                                        <img src="https://images.pexels.com/photos/2747449/pexels-photo-2747449.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Product Thumb" width="800" height="900">
                                                    </div>
                                                </div>
                                                <button class="swiper-button-prev"></button>
                                                <button class="swiper-button-next"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="product-tab-reviews">
                                <div class="row mb-4">
                                    <div class="col-xl-4 col-lg-5 mb-4">
                                        <div class="ratings-wrapper">
                                            <div class="avg-rating-container">
                                                <h4 class="avg-mark font-weight-bolder ls-50">3.3</h4>
                                                <div class="avg-rating">
                                                    <p class="text-dark mb-1">Average Rating</p>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ratings-value d-flex align-items-center text-dark ls-25">
                                                <span class="text-dark font-weight-bold">66.7%</span>Recommended<span class="count">(2 of 3)</span>
                                            </div>
                                            <div class="ratings-list">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>70%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>30%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>40%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 40%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>0%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 20%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>0%</mark>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 mb-4">
                                        <div class="review-form-wrapper">
                                            <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your Review
                                            </h3>
                                            <p class="mb-3">Your email address will not be published. Required fields
                                                are marked *</p>
                                            <form action="#" method="POST" class="review-form">
                                                <div class="rating-form">
                                                    <label for="rating">Your Rating Of This Product :</label>
                                                    <span class="rating-stars">
                                                        <a class="star-1" href="#">1</a>
                                                        <a class="star-2" href="#">2</a>
                                                        <a class="star-3" href="#">3</a>
                                                        <a class="star-4" href="#">4</a>
                                                        <a class="star-5" href="#">5</a>
                                                    </span>
                                                    <select name="rating" id="rating" required="" style="display: none;">
                                                        <option value="">Rate…</option>
                                                        <option value="5">Perfect</option>
                                                        <option value="4">Good</option>
                                                        <option value="3">Average</option>
                                                        <option value="2">Not that bad</option>
                                                        <option value="1">Very poor</option>
                                                    </select>
                                                </div>
                                                <textarea cols="30" rows="6" placeholder="Write Your Review Here..." class="form-control" id="review"></textarea>
                                                <div class="row gutter-md">
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Your Name" id="author">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Your Email" id="email_1">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" class="custom-checkbox" id="save-checkbox">
                                                    <label for="save-checkbox">Save my name, email, and website in this
                                                        browser for the next time I comment.</label>
                                                </div>
                                                <button type="submit" class="btn btn-dark">Submit Review</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab tab-nav-boxed tab-nav-outline tab-nav-center">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a href="#show-all" class="nav-link active">Show All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#helpful-positive" class="nav-link">Most Helpful Positive</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#helpful-negative" class="nav-link">Most Helpful Negative</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#highest-rating" class="nav-link">Highest Rating</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#lowest-rating" class="nav-link">Lowest Rating</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="show-all">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/1-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:54
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>pellentesque habitant morbi tristique senectus et. In
                                                                dictum non consectetur a erat.
                                                                Nunc ultrices eros in cursus turpis massa tincidunt ante
                                                                in nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-1.jpg" width="60" height="60" alt="Attachment image of John Doe's review on Electronics Black Wrist Watch" data-zoom-image="assets/images/products/default/review-img-1-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/2-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:52
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 80%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>Nullam a magna porttitor, dictum risus nec, faucibus
                                                                sapien.
                                                                Ultrices eros in cursus turpis massa tincidunt ante in
                                                                nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-2.jpg" width="60" height="60" alt="Attachment image of John Doe's review on Electronics Black Wrist Watch" data-zoom-image="assets/images/products/default/review-img-2.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-3.jpg" width="60" height="60" alt="Attachment image of John Doe's review on Electronics Black Wrist Watch" data-zoom-image="assets/images/products/default/review-img-3.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/3-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:21
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>In fermentum et sollicitudin ac orci phasellus. A
                                                                condimentum vitae
                                                                sapien pellentesque habitant morbi tristique senectus
                                                                et. In dictum
                                                                non consectetur a erat. Nunc scelerisque viverra mauris
                                                                in aliquam sem fringilla.</p>
                                                            <div class="comment-action">
                                                                <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (0)
                                                                </a>
                                                                <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (1)
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="helpful-positive">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/1-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:54
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>pellentesque habitant morbi tristique senectus et. In
                                                                dictum non consectetur a erat.
                                                                Nunc ultrices eros in cursus turpis massa tincidunt ante
                                                                in nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-1.jpg" width="60" height="60" alt="Attachment image of John Doe's review on Electronics Black Wrist Watch" data-zoom-image="assets/images/products/default/review-img-1.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/2-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:52
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 80%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>Nullam a magna porttitor, dictum risus nec, faucibus
                                                                sapien.
                                                                Ultrices eros in cursus turpis massa tincidunt ante in
                                                                nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-2.jpg" width="60" height="60" alt="Attachment image of John Doe's review on Electronics Black Wrist Watch" data-zoom-image="assets/images/products/default/review-img-2-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-3.jpg" width="60" height="60" alt="Attachment image of John Doe's review on Electronics Black Wrist Watch" data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="helpful-negative">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/3-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:21
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>In fermentum et sollicitudin ac orci phasellus. A
                                                                condimentum vitae
                                                                sapien pellentesque habitant morbi tristique senectus
                                                                et. In dictum
                                                                non consectetur a erat. Nunc scelerisque viverra mauris
                                                                in aliquam sem fringilla.</p>
                                                            <div class="comment-action">
                                                                <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (0)
                                                                </a>
                                                                <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (1)
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="highest-rating">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/2-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:52
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 80%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>Nullam a magna porttitor, dictum risus nec, faucibus
                                                                sapien.
                                                                Ultrices eros in cursus turpis massa tincidunt ante in
                                                                nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-2.jpg" width="60" height="60" alt="Attachment image of John Doe's review on Electronics Black Wrist Watch" data-zoom-image="assets/images/products/default/review-img-2-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-3.jpg" width="60" height="60" alt="Attachment image of John Doe's review on Electronics Black Wrist Watch" data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="lowest-rating">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/1-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:54
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>pellentesque habitant morbi tristique senectus et. In
                                                                dictum non consectetur a erat.
                                                                Nunc ultrices eros in cursus turpis massa tincidunt ante
                                                                in nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-3.jpg" width="60" height="60" alt="Attachment image of John Doe's review on Electronics Black Wrist Watch" data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="vendor-product-section">
                        <div class="title-link-wrapper mb-4">
                            <h4 class="title text-left">More Event From This Organizer</h4>
                            <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                Events<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <div class="swiper-container swiper-theme" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 4
                                },
                                '992': {
                                    'slidesPerView': 5
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                                <?php 
                                $sql2 = "SELECT * FROM marketplace_events WHERE 
                                                vendor_id = (SELECT vendor_id FROM marketplace_events WHERE id = $id)";
                                $res2 = mysqli_query($conn, $sql2);

                                $rows2 = [];
                    
                                while($row = mysqli_fetch_assoc($res2)) {
                                    $rows2[] = $row;
                                }
                                
                                $same_vendor_event = 1;
                                foreach($rows2 as $value){
                                ?>
                                
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="<?php echo $value['image']; ?>" alt="Product" width="295" height="235" />
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">Sponsored</label>
                                        </div>
                                        <div class="verified-group">
                                            <figure class="vendor-brand">
                                                <img src="<?php echo $value['organiser_logo']; ?>" alt="Brand" width="50" height="50">
                                            </figure>
                                        </div>
                                        <div class="product-countdown-container">
                                            <div class="product-countdown countdown-compact" id="same-vendor<?php echo $same_vendor_event; $same_vendor_event++; ?>" data-until="2021, 9, 9" data-format="DHMS" data-compact="false" data-labels-short="Days, Hours, Mins, Secs">
                                            <?php echo $value['start_date']; ?></div>
                                        </div>
                                        <div class="product-action-horizontal">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Buy Ticket"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-banner-sidebar.html"><?php echo $value['event_category']; ?></a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product-default.html"><?php echo $value['event_description']; ?></a>
                                        </h3>
                                        <h3 class="product-name">
                                            <a href="product-default.html"><span><?php echo $value['organiser_name']; ?></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 17.542 17.774">
                                                    <g data-name="Group 2129" transform="translate(-1298.5 -235.5)">
                                                        <circle cx="8.271" cy="8.271" r="8.271" fill="none" stroke="#0f9347" data-name="Ellipse 81" transform="translate(1299 237)"></circle>
                                                        <path d="M0 0h16.542v2.789H0z" fill="#0f9347" data-name="Rectangle 624" transform="translate(1299 251.485)"></path>
                                                        <path d="M4380.563 5908.823l-1.076 1.076-4.009 4.011-2.033-2.032-.276-.278-.545.547-.544.545 3.4 3.4 6.176-6.177zm0 0" fill="#0f9347" data-name="Path 939" transform="translate(-3069.595 -5666.796)"></path>
                                                    </g>
                                                </svg></a>
                                        </h3>
                                        <div class="ratings-container">
                                            <a href="product-default.html" class="rating-reviews">(10 Views)</a>
                                            <a href="product-default.html" class="rating-reviews">(10 People Participating)</a>
                                            <a href="product-default.html" class="rating-reviews">(10 Sponsors)</a>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                $same_vendor_event++;
                                } ?>
                            </div>
                        </div>
                    </section>
                    <section class="related-product-section">
                        <div class="title-link-wrapper mb-4">
                            <h4 class="title">Related Events</h4>
                            <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                Events<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <div class="swiper-container swiper-theme" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 4
                                },
                                '992': {
                                    'slidesPerView': 5
                                }
                            }
                        }">
                        
                            <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                            <?php 
                                $sql3 = "SELECT * FROM marketplace_events WHERE 
                                                event_category = (SELECT event_category FROM marketplace_events WHERE id = $id)";
                                $res3 = mysqli_query($conn, $sql3);

                                $rows3 = [];
                    
                                while($row = mysqli_fetch_assoc($res3)) {
                                    $rows3[] = $row;
                                }
                                
                                $related = 1;
                                foreach($rows3 as $value){
                                ?>
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="<?php echo $value['image']; ?>" alt="Product" width="295" height="235" />
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">Sponsored</label>
                                        </div>
                                        <div class="verified-group">
                                            <figure class="vendor-brand">
                                                <img src="<?php echo $value['organiser_logo']; ?>" alt="Brand" width="50" height="50">
                                            </figure>
                                        </div>
                                        <div class="product-countdown-container">
                                            <div class="product-countdown countdown-compact" id="related<?php echo $related; ?>" data-until="2021, 9, 9" data-format="DHMS" data-compact="false" data-labels-short="Days, Hours, Mins, Secs">
                                             <?php echo $value['start_date']; ?>
                                            </div>
                                        </div>
                                        <div class="product-action-horizontal">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Buy Ticket"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-banner-sidebar.html"><?php echo $value['event_category']; ?></a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product-default.html"><?php echo $value['event_description']; ?></a>
                                        </h3>
                                        <h3 class="product-name">
                                            <a href="product-default.html"><span><?php echo $value['organiser_name']; ?></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 17.542 17.774">
                                                    <g data-name="Group 2129" transform="translate(-1298.5 -235.5)">
                                                        <circle cx="8.271" cy="8.271" r="8.271" fill="none" stroke="#0f9347" data-name="Ellipse 81" transform="translate(1299 237)"></circle>
                                                        <path d="M0 0h16.542v2.789H0z" fill="#0f9347" data-name="Rectangle 624" transform="translate(1299 251.485)"></path>
                                                        <path d="M4380.563 5908.823l-1.076 1.076-4.009 4.011-2.033-2.032-.276-.278-.545.547-.544.545 3.4 3.4 6.176-6.177zm0 0" fill="#0f9347" data-name="Path 939" transform="translate(-3069.595 -5666.796)"></path>
                                                    </g>
                                                </svg></a>
                                        </h3>
                                        <div class="ratings-container">
                                            <a href="product-default.html" class="rating-reviews">(10 Views)</a>
                                            <a href="product-default.html" class="rating-reviews">(10 People Participating)</a>
                                            <a href="product-default.html" class="rating-reviews">(10 Sponsors)</a>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                $related = $related+1;
                                } ?>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <footer class="footer appear-animate" data-animation-options="{
            'name': 'fadeIn'
        }">
            <div class="footer-newsletter bg-primary pt-6 pb-6">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="icon-box icon-box-side text-white">
                                <div class="icon-box-icon d-inline-flex">
                                    <i class="w-icon-envelop3"></i>
                                </div>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title text-white text-uppercase mb-0">Subscribe To Our
                                        Newsletter</h4>
                                    <p class="text-white">Get all the latest information on Events, Sales and Offers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                                <input type="email" class="form-control mr-2 bg-white" name="email" id="email" placeholder="Your E-mail Address" />
                                <button class="btn btn-dark btn-rounded" type="submit">Subscribe<i class="w-icon-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-about">
                                <a href="demo1.html" class="logo-footer">
                                    <img src="assets/images/logo_footer.png" alt="logo-footer" width="144" height="45" />
                                </a>
                                <div class="widget-body">
                                    <p class="widget-about-title">Got Question? Call us 24/7</p>
                                    <a href="tel:18005707777" class="widget-about-call">1-800-570-7777</a>
                                    <p class="widget-about-desc">Register now to get updates on pronot get up icons
                                        & coupons ster now toon.
                                    </p>

                                    <div class="social-icons social-icons-colored">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                        <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                        <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h3 class="widget-title">Company</h3>
                                <ul class="widget-body">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">Team Member</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="#">Affilate</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="widget-body">
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="cart.html">View Cart</a></li>
                                    <li><a href="login.html">Sign In</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="wishlist.html">My Wishlist</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4>
                                <ul class="widget-body">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Product Returns</a></li>
                                    <li><a href="#">Support Center</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Term and Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle">
                    <div class="widget widget-category">
                        <div class="category-box">
                            <h6 class="category-name">Consumer Electric:</h6>
                            <a href="#">TV Television</a>
                            <a href="#">Air Condition</a>
                            <a href="#">Refrigerator</a>
                            <a href="#">Washing Machine</a>
                            <a href="#">Audio Speaker</a>
                            <a href="#">Security Camera</a>
                            <a href="#">View All</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Clothing & Apparel:</h6>
                            <a href="#">Men's T-shirt</a>
                            <a href="#">Dresses</a>
                            <a href="#">Men's Sneacker</a>
                            <a href="#">Leather Backpack</a>
                            <a href="#">Watches</a>
                            <a href="#">Jeans</a>
                            <a href="#">Sunglasses</a>
                            <a href="#">Boots</a>
                            <a href="#">Rayban</a>
                            <a href="#">Acccessories</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Home, Garden & Kitchen:</h6>
                            <a href="#">Sofa</a>
                            <a href="#">Chair</a>
                            <a href="#">Bed Room</a>
                            <a href="#">Living Room</a>
                            <a href="#">Cookware</a>
                            <a href="#">Utensil</a>
                            <a href="#">Blender</a>
                            <a href="#">Garden Equipments</a>
                            <a href="#">Decor</a>
                            <a href="#">Library</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Health & Beauty:</h6>
                            <a href="#">Skin Care</a>
                            <a href="#">Body Shower</a>
                            <a href="#">Makeup</a>
                            <a href="#">Hair Care</a>
                            <a href="#">Lipstick</a>
                            <a href="#">Perfume</a>
                            <a href="#">View all</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Jewelry & Watches:</h6>
                            <a href="#">Necklace</a>
                            <a href="#">Pendant</a>
                            <a href="#">Diamond Ring</a>
                            <a href="#">Silver Earing</a>
                            <a href="#">Leather Watcher</a>
                            <a href="#">Rolex</a>
                            <a href="#">Gucci</a>
                            <a href="#">Australian Opal</a>
                            <a href="#">Ammolite</a>
                            <a href="#">Sun Pyrite</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Computer & Technologies:</h6>
                            <a href="#">Laptop</a>
                            <a href="#">iMac</a>
                            <a href="#">Smartphone</a>
                            <a href="#">Tablet</a>
                            <a href="#">Apple</a>
                            <a href="#">Asus</a>
                            <a href="#">Drone</a>
                            <a href="#">Wireless Speaker</a>
                            <a href="#">Game Controller</a>
                            <a href="#">View all</a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-left">
                        <p class="copyright">Copyright © 2021 Wolmart Store. All Rights Reserved.</p>
                    </div>
                    <div class="footer-right">
                        <span class="payment-label mr-lg-8">We're using safe payment for</span>
                        <figure class="payment">
                            <img src="assets/images/payment.png" alt="payment" width="159" height="25" />
                        </figure>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo1.html" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="shop-banner-sidebar.html" class="sticky-link">
            <i class="w-icon-category"></i>
            <p>Shop</p>
        </a>
        <a href="my-account.html" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a href="cart.html" class="sticky-link">
                <i class="w-icon-cart"></i>
                <p>Cart</p>
            </a>
            <div class="dropdown-box">
                <div class="products">
                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product-default.html">Beige knitted elas<br>tic
                                    runner shoes</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$25.68</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84" width="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="https://www.portotheme.com/html/wolmart/product.html">Blue utility pina<br>fore
                                    denim dress</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$32.99</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84" height="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="cart-total">
                    <label>Subtotal:</label>
                    <span class="price">$58.67</span>
                </div>

                <div class="cart-action">
                    <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                    <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                </div>
            </div>
            <!-- End of Dropdown Box -->
        </div>

        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Search</p>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search" required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>
        <!-- End of .mobile-menu-overlay -->

        <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
        <!-- End of .mobile-menu-close -->

        <div class="mobile-menu-container scrollable">
            <form action="#" method="get" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search" required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#main-menu" class="nav-link active">Main Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Categories</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                    <ul class="mobile-menu">
                        <li><a href="demo1.html">Home</a></li>
                        <li>
                            <a href="shop-banner-sidebar.html">Shop</a>
                            <ul>
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul>
                                        <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                        <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Full Width Banner</a></li>
                                        <li><a href="shop-horizontal-filter.html">Horizontal Filter<span class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span class="tip tip-new">New</span></a></li>
                                        <li><a href="shop-infinite-scroll.html">Infinite Ajax Scroll</a></li>
                                        <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="shop-both-sidebar.html">Both Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop Layouts</a>
                                    <ul>
                                        <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                        <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                        <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                        <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                        <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                        <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                        <li><a href="shop-list.html">List Mode</a></li>
                                        <li><a href="shop-list-sidebar.html">List Mode With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Pages</a>
                                    <ul>
                                        <li><a href="product-variable.html">Variable Product</a></li>
                                        <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                        <li><a href="product-accordion.html">Data In Accordion</a></li>
                                        <li><a href="product-section.html">Data In Sections</a></li>
                                        <li><a href="product-swatch.html">Image Swatch</a></li>
                                        <li><a href="product-extended.html">Extended Info</a>
                                        </li>
                                        <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                        <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span class="tip tip-new">New</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Layouts</a>
                                    <ul>
                                        <li><a href="product-default.html">Default<span class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                        <li><a href="product-grid.html">Grid Images</a></li>
                                        <li><a href="product-masonry.html">Masonry</a></li>
                                        <li><a href="product-gallery.html">Gallery</a></li>
                                        <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                        <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                        <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="vendor-dokan-store.html">Vendor</a>
                            <ul>
                                <li>
                                    <a href="#">Store Listing</a>
                                    <ul>
                                        <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                        <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                        <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                        <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Vendor Store</a>
                                    <ul>
                                        <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                        <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a></li>
                                        <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a></li>
                                        <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog.html">Classic</a></li>
                                <li><a href="blog-listing.html">Listing</a></li>
                                <li>
                                    <a href="https://www.portotheme.com/html/wolmart/blog-grid.html">Grid</a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Masonry</a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Mask</a>
                                    <ul>
                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="post-single.html">Single Post</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about-us.html">Pages</a>
                            <ul>

                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="error-404.html">Error 404</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="elements.html">Elements</a>
                            <ul>
                                <li><a href="element-products.html">Products</a></li>
                                <li><a href="element-titles.html">Titles</a></li>
                                <li><a href="element-typography.html">Typography</a></li>
                                <li><a href="element-categories.html">Product Category</a></li>
                                <li><a href="element-buttons.html">Buttons</a></li>
                                <li><a href="element-accordions.html">Accordions</a></li>
                                <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                <li><a href="element-tabs.html">Tabs</a></li>
                                <li><a href="element-testimonials.html">Testimonials</a></li>
                                <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                <li><a href="element-instagrams.html">Instagrams</a></li>
                                <li><a href="element-cta.html">Call to Action</a></li>
                                <li><a href="element-vendors.html">Vendors</a></li>
                                <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                <li><a href="element-icons.html">Icons</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="categories">
                    <ul class="mobile-menu">
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-tshirt2"></i>Fashion
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Women</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                Watches</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Sale</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Men</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                Watches</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-home"></i>Home & Garden
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Bedroom</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Beds, Frames &
                                                Bases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Dressers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Nightstands</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Kid's Beds &
                                                Headboards</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Armoires</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Living Room</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Coffee Tables</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Chairs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Tables</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Futons & Sofa
                                                Beds</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Cabinets &
                                                Chests</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Office</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Office Chairs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Desks</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bookcases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">File Cabinets</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Breakroom
                                                Tables</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Kitchen & Dining</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Dining Sets</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Kitchen Storage
                                                Cabinets</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bashers Racks</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dining Chairs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dining Room
                                                Tables</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bar Stools</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-electronics"></i>Electronics
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Laptops &amp; Computers</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Desktop
                                                Computers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Monitors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Laptops</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Hard Drives &amp;
                                                Storage</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Computer
                                                Accessories</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">TV &amp; Video</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">TVs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Home Audio
                                                Speakers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Projectors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Media Streaming
                                                Devices</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Digital Cameras</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Digital SLR
                                                Cameras</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Sports & Action
                                                Cameras</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Camera Lenses</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Photo Printer</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Digital Memory
                                                Cards</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cell Phones</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Carrier Phones</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Unlocked Phones</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Phone & Cellphone
                                                Cases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Cellphone
                                                Chargers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-furniture"></i>Furniture
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Furniture</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Sofas & Couches</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Armchairs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bed Frames</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Beside Tables</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dressing Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Lighting</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Light Bulbs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Lamps</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Celling Lights</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Wall Lights</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Bathroom
                                                Lighting</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Home Accessories</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Decorative
                                                Accessories</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Candals &
                                                Holders</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Home Fragrance</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Mirrors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clocks</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Garden & Outdoors</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Garden
                                                Furniture</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Lawn Mowers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Pressure
                                                Washers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">All Garden
                                                Tools</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Outdoor Dining</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-heartbeat"></i>Healthy & Beauty
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-gift"></i>Gift Ideas
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-gamepad"></i>Toy & Games
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ice-cream"></i>Cooking
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ios"></i>Smart Phones
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-camera"></i>Cameras & Photo
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ruby"></i>Accessories
                            </a>
                        </li>
                        <li>
                            <a href="shop-banner-sidebar.html" class="font-weight-bold text-primary text-uppercase ls-25">
                                View All Categories<i class="w-icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Mobile Menu -->

    <!-- Root element of PhotoSwipe. Must have class pswp -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides.
			PhotoSwipe keeps only 3 of them in the DOM to save memory.
			Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>

                    <div class="pswp__preloader">
                        <div class="loading-spin"></div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
                <button class="pswp__button--arrow--right" aria-label="Next (arrow right)"></button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of PhotoSwipe -->

    <!-- Start of Quick View -->
    <div class="product product-single product-popup">
        <div class="row gutter-lg">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="product-gallery product-gallery-sticky">
                    <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                        <div class="swiper-wrapper row cols-1 gutter-no">
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/1-440x494.jpg" data-zoom-image="assets/images/products/popup/1-800x900.jpg" alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/2-440x494.jpg" data-zoom-image="assets/images/products/popup/2-800x900.jpg" alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/3-440x494.jpg" data-zoom-image="assets/images/products/popup/3-800x900.jpg" alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/4-440x494.jpg" data-zoom-image="assets/images/products/popup/4-800x900.jpg" alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                        </div>
                        <button class="swiper-button-next"></button>
                        <button class="swiper-button-prev"></button>
                    </div>
                    <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                        'navigation': {
                            'nextEl': '.swiper-button-next',
                            'prevEl': '.swiper-button-prev'
                        }
                    }">
                        <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/1-103x116.jpg" alt="Product Thumb" width="103" height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/2-103x116.jpg" alt="Product Thumb" width="103" height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/3-103x116.jpg" alt="Product Thumb" width="103" height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/4-103x116.jpg" alt="Product Thumb" width="103" height="116">
                            </div>
                        </div>
                        <button class="swiper-button-next"></button>
                        <button class="swiper-button-prev"></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 overflow-hidden p-relative">
                <div class="product-details scrollable pl-0">
                    <h2 class="product-title">Electronics Black Wrist Watch</h2>
                    <div class="product-bm-wrapper">
                        <figure class="brand">
                            <img src="assets/images/products/brand/brand-1.jpg" alt="Brand" width="102" height="48" />
                        </figure>
                        <div class="product-meta">
                            <div class="product-categories">
                                Category:
                                <span class="product-category"><a href="#">Electronics</a></span>
                            </div>
                            <div class="product-sku">
                                SKU: <span>MS46891340</span>
                            </div>
                        </div>
                    </div>

                    <hr class="product-divider">

                    <div class="product-price">$40.00</div>

                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 80%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                    </div>

                    <div class="product-short-desc">
                        <ul class="list-type-check list-style-none">
                            <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                            <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                            <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                        </ul>
                    </div>

                    <hr class="product-divider">

                    <div class="product-form product-variation-form product-color-swatch">
                        <label>Color:</label>
                        <div class="d-flex align-items-center product-variations">
                            <a href="#" class="color" style="background-color: #ffcc01"></a>
                            <a href="#" class="color" style="background-color: #ca6d00;"></a>
                            <a href="#" class="color" style="background-color: #1c93cb;"></a>
                            <a href="#" class="color" style="background-color: #ccc;"></a>
                            <a href="#" class="color" style="background-color: #333;"></a>
                        </div>
                    </div>
                    <div class="product-form product-variation-form product-size-swatch">
                        <label class="mb-1">Size:</label>
                        <div class="flex-wrap d-flex align-items-center product-variations">
                            <a href="#" class="size">Small</a>
                            <a href="#" class="size">Medium</a>
                            <a href="#" class="size">Large</a>
                            <a href="#" class="size">Extra Large</a>
                        </div>
                        <a href="#" class="product-variation-clean">Clean All</a>
                    </div>

                    <div class="product-variation-price">
                        <span></span>
                    </div>

                    <div class="product-form">
                        <div class="product-qty-form">
                            <div class="input-group">
                                <input class="quantity form-control" type="number" min="1" max="10000000">
                                <button class="quantity-plus w-icon-plus"></button>
                                <button class="quantity-minus w-icon-minus"></button>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-cart">
                            <i class="w-icon-cart"></i>
                            <span>Add to Cart</span>
                        </button>
                    </div>

                    <div class="social-links-wrapper">
                        <div class="social-links">
                            <div class="social-icons social-no-color border-thin">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                            </div>
                        </div>
                        <span class="divider d-xs-show"></span>
                        <div class="product-link-wrapper d-flex">
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                            <a href="#" class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Quick view -->

    <!-- Plugin JS File -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/sticky/sticky.min.js"></script>
    <script src="assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/zoom/jquery.zoom.js"></script>
    <script src="assets/vendor/photoswipe/photoswipe.min.js"></script>
    <script src="assets/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>


    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
    <script>
        // <div class="product-countdown-container flex-wrap">
        // <label class="mr-2 text-default">Event Starts in:</label>
        // <div class="product-countdown countdown-compact" data-until="2022, 12, 31" data-compact="true">
        // 629 days, 11: 59: 52</div>
        // </div>

        var start_time = document.getElementById("main-event-countdown").innerHTML;
        console.log(start_time);
        var dest = new Date(start_time).getTime();

        var x = setInterval(function(){
        var now = new Date().getTime();

        var diff = dest - now;
        var days = Math.floor(diff/ (1000*60*60*24));
        var hours = Math.floor(diff%(1000*60*60*24)/ (1000*60*60));
        var minutes = Math.floor(diff%(1000*60*60)/ (1000*60));
        var seconds = Math.floor(diff%(1000*60)/ (1000));

        document.getElementById("main-event-countdown").innerHTML = days + " days, " + hours + ": " + minutes + ": " + seconds;
        }, 1000);
    </script>
</body>


<!-- product-without-sidebar 11:47:54 GMT -->

</html>