<?php include 'config/connection.php';
$service_shop = true;
?>
<!DOCTYPE html>
<html lang="en">
<style>
    .layer-overlay::before {
        background: rgba(17, 17, 17, 0.5) none repeat scroll 0 0;
        content: " ";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 0;
    }

    .layer-overlay1::before {
        background: rgb(30 24 24 / 31%) none repeat scroll 0 0;
        content: " ";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 0;
    }
</style>
<?php include 'site_head.php'; ?>

<body class="home">
    <div class="page-wrapper">
        <?php include 'shop_header.php'; ?>
        <!-- End of Header -->
        <!-- Start of Main -->
        <main class="main">
            <section class="intro-section">
                <div class="row">
                    <div class="swiper-container swiper-theme animation-slider" data-swiper-options="{
                        'slidesPerView' : 1,
                        'loop':true,
                        'effect':'fade',
                        'autoplay': {
                            'delay': 8000,
                            'disableOnInteraction': false
                        }
                    }">
                        <div class="swiper-wrapper">
                            <!-- End of .intro-slide1 -->
                            <div class="swiper-slide banner banner-fixed intro-slide1">
                                <figure class="banner-media layer-overlay1">
                                    <img src="https://images.unsplash.com/photo-1622126807280-9b5b32b28e77?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXxVRFRBOUJSWmZYUXx8ZW58MHx8fHw%3D&w=1000&q=80" alt="Slide" width="1903" height="400" style="background-color: #DBDBDD; height:500px;">
                                </figure>
                                <div class="banner-content x-35 y-50 text-center text-justify">
                                    <p class="banner-title  ls-25 lh-1 slide-animate text-white" data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s',
                                    'delay': '.4s'
                                }">
                                        BUILDING BUSINESSES; STRENGTHENING COMMUNITIES; <br> <span class="text-white"> SIMPLIFYING LIVES</span>
                                    </p>
                                    <h3 class="banner-date slide-animate text-white " data-animation-options="{
                                    'name': 'fadeInDownShorter',
                                    'duration': '1s',
                                    'delay': '.2s'
                                    }">
                                        Regulatory; Environmental; Social; Political; Economic; Culture; Technological Development- Geographicalcally & Demographically.
                                    </h3>
                                    <a href="demo15-shop.html" class="btn btn-dark btn-rounded slide-animate ml-3" data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s',
                                    'delay': '.8s'
                                    }">Know More
                                    </a>

                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <div class="swiper-slide banner banner-fixed intro-slide1">
                                <figure class="banner-media layer-overlay1">
                                    <img src="https://www.teahub.io/photos/full/37-375434_building-hd-wallpaper-building-images-hd-quality.jpg" alt="Slide" width="1903" height="400" style="background-color: #DBDBDD; height:500px;">
                                </figure>
                                <div class="banner-content x-25 y-50">
                                    <h3 class="banner-title  ls-25 lh-1 slide-animate text-white" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.4s'
                                }" style="">
                                        HELPING GOVERNMENTS, BUSINESSES, ASSOCIATIONS & INDIVIDUALS <br>IN ENRICHING THEIR CONTRIBUTION IN <br> <span class="text-white">RESPECT-GD</span>
                                    </h3>
                                    <h3 class="banner-date slide-animate text-white text-weight-bolder" data-animation-options="{
                                    'name': 'fadeInDownShorter',
                                    'duration': '1s',
                                    'delay': '.2s'
                                    }">
                                        Regulatory; Environmental; Social; Political; Economic; Culture; Technological Development- Geographicalcally & Demographically.
                                    </h3>
                                    <a href="demo15-shop.html" class="btn btn-dark btn-rounded slide-animate ml-3" data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s',
                                    'delay': '.8s'
                                    }">Know More
                                    </a>

                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .intro-slide1 -->

                            <!-- End of .banner-content -->
                        </div>
                    </div>
                </div>
    </div>

    <div class="swiper-container swiper-theme icon-box-wrapper br-sm bg-primary" data-swiper-options="{
                    'loop': true,
                    'spaceBetween': 10,
                    'autoplay': false,
                    'autoplayTimeout': 4000,
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 2
                        },
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                    }">
        <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
            <div class="swiper-slide icon-box icon-box-side text-dark">
                <span class="icon-box-icon icon-shipping">
                    <i class="w-icon-truck text-white"></i>
                </span>
                <div class="icon-box-content">
                    <h2 class="animate-number m-0 appeared text-white" data-value="106" data-animation-duration="2000">60</h2>
                    <h4 class="icon-box-title font-weight-bolder text-white">Industry Challanges</h4>
                    <p class="text-white">Identified & Resolved</p>
                </div>
            </div>
            <div class="swiper-slide icon-box icon-box-side text-dark">
                <span class="icon-box-icon icon-payment">
                    <i class="w-icon-bag text-white"></i>
                </span>
                <div class="icon-box-content">
                    <h2 class="animate-number m-0 appeared text-white" data-value="106" data-animation-duration="2000">20</h2>
                    <h4 class="icon-box-title font-weight-bolder text-white">Business Functions </h4>
                    <p class="text-white">Fully Automated**</p>
                </div>
            </div>
            <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                <span class="icon-box-icon icon-money">
                    <i class="w-icon-money text-white"></i>
                </span>
                <div class="icon-box-content">
                    <h2 class="animate-number m-0 appeared text-white" data-value="106" data-animation-duration="2000">13</h2>
                    <h4 class="icon-box-title font-weight-bolder text-white">New Enterpreneurs </h4>
                    <p class="text-white">Sustaining Success</p>
                </div>
            </div>
            <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                <span class="icon-box-icon icon-chat">
                    <i class="w-icon-chat text-white"></i>
                </span>
                <div class="icon-box-content">
                    <h2 class="animate-number m-0 appeared text-white" data-value="106" data-animation-duration="2000">33</h2>
                    <h4 class="icon-box-title font-weight-bolder text-white">Consultants </h4>
                    <p class="text-white">Currently Engaged</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Icon Box Wrapper -->
    <section class="clients bg-theme-colored2" style="background-color:#fff;">
        <div class="container pt-5 pb-5">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="font-weight-300 m-0">We <span class="text-primary font-weight-400">LOVE solving
                                PROBLEMS </span> Discover how CCBUL can help</h5>
                        <h2 class="mt-0 font-secondary text-uppercase font-28">Focus<span class="text-primary font-weight-400"> Areas &amp;
                                Interests</span> <span class="font-30 text-theme-colored"></span></h2>
                    </div>
                    <div class="col-md-6">
                        <p class="subheading">Our multi-dimensional network of stakeholders, solutions &amp; possibilities; maximizes Business &amp;
                            Functional opportunities. </p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-4">

                        <ul class="list-type-check list-style-none font-12">
                            <li>Digitization and Digitalisation </li>
                            <li>Employment and Self-employment </li>
                            <li>Entrepreneurship and Enterprises </li>
                            <li>Education, Employability and Skilling</li>
                            <li>Trade, Commerce and Franchising </li>
                            <li>Rural, RURBAN and City Development </li>
                            <li>Travel, Tourism &amp; Hospitality</li>
                            <li>eCommerce, ePoS &amp; Aggregators</li>
                        </ul>
                    </div>
                    <div class="col-md-4">

                        <ul class="list-type-check list-style-none font-12">

                            <li>Healthcare, Hygiene and Wellness</li>
                            <li>Social Welfare &amp; Responsibility and Impact</li>
                            <li>Women-Youth-Child-Community Development</li>
                            <li>Environmental &amp; Ecological Development </li>
                            <li>Political Inclusion, Participation &amp; Accountability</li>
                            <li>Media,Journalism &amp; Mass Amateurization</li>
                            <li>Agriculture &amp; Farmer's Welfare</li>
                            <li>Fashion, Trends &amp; Traditional wears</li>

                        </ul>
                    </div>
                    <div class="col-md-4">

                        <ul class="list-type-check list-style-none  font-12">
                            <li>Spiritual, Life Learning and Religious Practices</li>
                            <li>Logistics, Warehousing &amp; Packaging</li>
                            <li>Road Safety,Assistance &amp; Life saving agents</li>
                            <li>Sports, Games and other Activities</li>
                            <li>Industrial, Business &amp; Operational Excellence</li>
                            <li>Real-estate/Land Development &amp; Management</li>
                            <li>Investment &amp; Portfolio Management</li>
                            <li>Cultural, Ethnicity &amp; Acculturation</li>

                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- End of .intro-section -->
    <div class="notification-wrapper bg-primary br-sm mb-5 appear-animate d-flex align-items-center justify-content-center" style="animation-duration: 1.2s;">
        <p class="font-secondary text-white"> <span style="font-family:sofachrome;">CCBUL</span> is HOME for business thought leaders, enthusiasts and practitioners.</p>
    </div>

    <!-- End of Notificateion Wrapper -->
    <section class="clients bg-theme-colored2" style="background-color:#fff;">
        <div class="container pt-5 pb-5">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="font-weight-300 m-0">Acquire new <span class="text-primary font-weight-400"> heights
                            </span>through our earned insights and professional networks.</h5>
                        <h2 class="mt-0 text-uppercase font-28">Our <span class="text-primary font-weight-400">Start Up &amp;
                                SME Network</span> <span class="font-30 text-theme-colored"></span></h2>
                    </div>
                    <div class="col-md-6">
                        <p class="subheading">Business grows with the network and then network will do business for you. Therefore, your goal
                            should be to expand your network by meeting new people. </p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
                    <div class="categories h-100" style="1px solid #eeeeee;">
                        <h4 class="mt-0 font-21" style="text-align:justify;">Willing to <span class="text-primary font-weight-400 font-20">Join </span> our Entrepreneurship, StartUp
                            SME Network?</h4>
                        <p style="text-align:justify; margin-top:25px;">Our membership is open for eligible and promising startups &amp;
                            small-medium Enterprises. If you have an interesting and impactful idea and/or looking for support
                            and collaboration, we will love to contribute in your grand journey of fulfilment and success. </p>
                        <a class="btn btn-dark btn-theme-colored btn-sm" href="membership_form.php" style="margin-top:35px;">Join Now!!</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="swiper-container swiper-theme shadow-swiper show-code-action swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-swiper-options="{
									'spaceBetween': 20,
									'slidesPerView': 1,
									'breakpoints': {
										'576': {
											'slidesPerView': 2
										},
										'768': {
											'slidesPerView': 3
										},
										'992': {
											'slidesPerView': 4
										}
									}
								}">
                        <div class="swiper-wrapper " id="swiper-wrapper-b93aa492a108398b" aria-live="polite">
                            <div class="swiper-slide icon-box-wrap swiper-slide-active" role="group" aria-label="1 / 4" style="width: 295px; margin-right: 20px;">
                                <div class="icon-box icon-colored-circle icon-border-box text-center">
                                    <span class="icon-box-icon text-white">
                                        <i class="w-icon-hotline"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="">Entrepreneur Network</h4>
                                        <p class="" style="text-align:justify;">In order to establish, grow & sustain; Businesses of
                                            today need to either create communities or be a part of ecosystem. Evolving ecosystem
                                            of CCBUL provides mechanism to (a)leverage technologies & strategic assests (b)
                                            achieve excellence in business through collective intelligence & collaborations
                                            (d) compete against other larger companies </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide icon-box-wrap swiper-slide-next" role="group" aria-label="2 / 4" style="width: 295px; margin-right: 20px;">
                                <div class="icon-box icon-colored-circle icon-border-box text-center">
                                    <span class="icon-box-icon text-white">
                                        <i class="w-icon-bag"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="">Knowledge</h4>
                                        <p class="" style="text-align:justify;">For any Business to achieve desired results, ccbul ecosystem
                                            leverages its knowledge network and allied potential to maximize capacities and
                                            capabilities of Business Partner. These knowledge networks helps in fostering
                                            innovation, capture more value and improve performances.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide icon-box-wrap" role="group" aria-label="4 / 4" style="width: 295px; margin-right: 20px;">
                                <div class="icon-box icon-colored-circle icon-border-box text-center">
                                    <span class="icon-box-icon text-white">
                                        <i class=" w-icon-net-world"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="">Innovation</h4>
                                        <p class="text-justify" style="text-align:justify;">Innovation through value creation is the new must-have key factor
                                            for business assurance and its success. Innovative approaches are the magic tactics to
                                            enhance the value of business' output, find new smart ways to reach new customers and
                                            may also substantially lower the cost of operational expenses.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide icon-box-wrap" role="group" aria-label="4 / 4" style="width: 295px; margin-right: 20px;">
                                <div class="icon-box icon-colored-circle icon-border-box text-center">
                                    <span class="icon-box-icon text-white">
                                        <i class="w-icon-bow"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="">Collaboration</h4>
                                        <p class="text-justify" style="text-align:justify;">The significant benefit of collaboration is the magnitude of
                                            achievement, which is way beyond the capabilities of individual, business entity or a
                                            group. It's win-win all the time through co-evolving, co-creating and co-operating.
                                            Our goal is to provide agile and effective collaboration that enables constant
                                            learning process.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="banner banner-fixed purchase-banner appear-animate mb-10">
        <figure class="banner-img layer-overlay1">
            <img src="https://assets.glginsights.com/wp-content/uploads/2021/10/D1_ConsultingFirms_HeaderImages.jpg" alt="Banner" width="680" height="180" style="background-color: #342E30; height:180px;" />
        </figure>
        <div class="banner-content text-center x-50 y-50 slide-animate" data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '15s', 'delay': '3s'}">
            <h4 class="banner-subtitle text-primary text-uppercase font-secondary font-weight-bold">Do you have an IDEA which can bring</h4>
            <h3 class="banner-title text-white text-uppercase font-secondary font-weight-bold mb-2">change or has potential to transform into a large enterprise?</h3>
            <a href="shop-banner-sidebar.html" class="btn btn-lg btn-outline btn-white btn-rounded btn-icon-right slide-animate">
                Submit
                <i class="w-icon-long-arrow-right"></i>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="section-title">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="font-weight-300 m-0">Our range of services are <span class="text-primary font-weight-400"> designed to meet
                        </span> your business objectives.</h5>
                    <h2 class="mt-0 text-uppercase font-28">Product <span class="font-30 text-primary">Network</span></h2>
                </div>
                <div class="col-md-6">
                    <p>Our consumer derives great value from our bouquet of products especially from something that has given them value for money-they become our evangelist.</p>
                </div>
            </div>
        </div>
        <div class="swiper-container swiper-theme category-banner-3cols pt-2 pb-2 mb-2 appear-animate" data-swiper-options="{
                    'spaceBetween': 20,
					'slidesPerView': 1,
                    'autoplay': {
                        'delay': 4000,
                        'disableOnInteraction': false
                    },
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '992': {
                            'slidesPerView': 4
                        }
                    }
                }">
            <div class="swiper-wrapper row cols-lg-2">
                <?php
                // $sql = "SELECT cat_id, count(cat_id) as count FROM marketplace_services GROUP BY cat_id";
                $sql = "SELECT a.cat_id, count(a.cat_id) as count, b.image_url FROM marketplace_services a 
                        INNER JOIN categories b WHERE a.site_id = $this_site_id AND
                        a.status = 1 AND a.verified = 1 AND a.cat_id = b.category_title
                        AND b.category_type = 'main' AND b.marketplace_id = 16 GROUP BY a.cat_id";
                
                $res = mysqli_query($conn, $sql);

                foreach ($res as $row) {
                ?>
                    <div class="swiper-slide ">
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <?php
                                $category = str_replace("&", "_", $row['cat_id']);
                                ?>
                                <a href="marketplace-services.php?category=<?php echo $category; ?>">
                                    <img src="<?php echo $row['image_url']; ?>" alt="Product" width="295" height="335" / style="height:185px; width:283px;">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="marketplace-services.php?category=<?php echo $category; ?>">
                                        <?php echo $row['cat_id'] . '(' . $row['count'] . ')'; ?>
                                    </a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- <div class="swiper-slide ">
								<div class="swiper-slide product product-image-gap product-simple">
									<figure class="product-media">
										<a href="marketplace-services">
											<img src="https://jstinvestments.com/wp-content/uploads/2021/05/km1-taxation-in-germany.jpg" alt="Product" width="295"
												height="335" /  style="height:185px; width:283px;">
										</a>
										<div class="product-action-vertical">
											<a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
										</div>
									</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
									<h4 class="product-name">
										<a href="marketplace-services">Audit and Taxation(20)</a>
									</h4>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width: 80%;"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="product-default.html" class="rating-reviews">(1 reviews)</a>
									</div>
								</div>
							</div>
                        </div>
						<div class="swiper-slide ">
								<div class="swiper-slide product product-image-gap product-simple">
									<figure class="product-media">
										<a href="marketplace-services">
											<img src="https://reciprocity.com/wp-content/uploads/2021/05/resource_why-do-compliance-programs-fail_featured-img_730x270.jpg" alt="Product" width="295"
												height="335" / style="height:185px; width:283px;">
										</a>
										<div class="product-action-vertical">
											<a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
										</div>
									</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
									<h4 class="product-name">
										<a href="marketplace-services">Statutory Compliance(20)</a>
									</h4>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width: 80%;"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="product-default.html" class="rating-reviews">(1 reviews)</a>
									</div>
								</div>
							</div>
                        </div>
                        <div class="swiper-slide ">
								<div class="swiper-slide product product-image-gap product-simple">
									<figure class="product-media">
										<a href="marketplace-services">
											<img src="https://www.completecontroller.com/wp-content/uploads/business-licensing-Complete-Controller.jpg" alt="Product" width="295"
												height="335" /  style="height:185px; width:283px;">
										</a>
										<div class="product-action-vertical">
											<a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
										</div>
									</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
									<h4 class="product-name">
										<a href="marketplace-services">Business Licenses(20) </a>
									</h4>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width: 80%;"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="product-default.html" class="rating-reviews">(1 reviews)</a>
									</div>
								</div>
							</div>
                        </div>
						 <div class="swiper-slide ">
								<div class="swiper-slide product product-image-gap product-simple">
									<figure class="product-media">
										<a href="marketplace-services">
											<img src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/108549879/original/28798b88872149efd22936b293fa9a11f8579bca/accounting-auditing-and-tax.jpg" alt="Product" width="295"
												height="335" /  style="height:185px; width:283px;">
										</a>
										<div class="product-action-vertical">
											<a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
										</div>
									</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
									<h4 class="product-name">
										<a href="marketplace-services">Accounting & Bookeeping(20)</a>
									</h4>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width: 80%;"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="product-default.html" class="rating-reviews">(1 reviews)</a>
									</div>
								</div>
							</div>
                        </div>
						 <div class="swiper-slide ">
								<div class="swiper-slide product product-image-gap product-simple">
									<figure class="product-media">
										<a href="marketplace-services">
											<img src="https://jungleworks.com/wp-content/uploads/2021/05/shutterstock_583251799-1.png" alt="Product" width="295"
												height="335" /  style="height:185px; width:283px;">
										</a>
										<div class="product-action-vertical">
											<a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
										</div>
									</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
									<h4 class="product-name">
										<a href="marketplace-services">Legal Consulting(20)</a>
									</h4>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width: 80%;"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="product-default.html" class="rating-reviews">(1 reviews)</a>
									</div>
								</div>
							</div>
                        </div> -->
                <!-- <div class="swiper-slide ">
								<div class="swiper-slide product product-image-gap product-simple">
									<figure class="product-media">
										<a href="marketplace-services">
											<img src="https://attorneyatlawmagazine.com/wp-content/uploads/2019/07/Why-You-Should-Run-Your-Practice-From-a-Coworking-Space-1140x570.jpg" alt="Product" width="295"
												height="335" /  style="height:185px; width:283px;">
										</a>
										<div class="product-action-vertical">
											<a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
										</div>
									</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
									<h4 class="product-name">
										<a href="marketplace-services">Coworking Space(20)</a>
									</h4>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width: 80%;"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="product-default.html" class="rating-reviews">(1 reviews)</a>
									</div>
								</div>
							</div>
                        </div> -->
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="mt-0 text-uppercase font-28">Our <span class="font-30 text-primary">Clients</span></h2>
        <div class="swiper-container swiper-theme category-banner-3cols pt-2 pb-2 mb-2 appear-animate" data-swiper-options="{
                    'spaceBetween': 20,
					'slidesPerView': 1,
                    'autoplay': {
                        'delay': 4000,
                        'disableOnInteraction': false
                    },
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '992': {
                            'slidesPerView': 9
                        }
                    }
                }">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <figure>
                        <img src="https://res.cloudinary.com/karbi/image/upload/v1651873058/images_2.jpg" alt="Brand" style="height:110px; width:110px;" />
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="https://res.cloudinary.com/karbi/image/upload/v1651873058/ee3afa31ec9658cf2b7fb82cc7eb6786.jpg" alt="Brand" style="height:110px; width:110px;" />
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="https://res.cloudinary.com/karbi/image/upload/v1651874224/samsung.png" alt="Brand" style="height:110px; width:110px;" />
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="https://res.cloudinary.com/karbi/image/upload/v1651873971/download_2.jpg" alt="Brand" style="height:110px; width:110px;" />
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="https://res.cloudinary.com/karbi/image/upload/v1651874001/utypaslbyxwfuwhfdzxd.webp" alt="Brand" style="height:110px; width:110px;" />
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="https://res.cloudinary.com/karbi/image/upload/v1651873523/satol-chemicals-logo-120x120.jpg" alt="Brand" style="height:110px; width:110px;" />
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="https://res.cloudinary.com/karbi/image/upload/v1651873461/sbi.png" alt="Brand" style="height:110px; width:110px;" />
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="https://res.cloudinary.com/karbi/image/upload/v1651873399/aitel.jpg" alt="Brand" style="height:110px; width:110px;" />
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="https://res.cloudinary.com/karbi/image/upload/v1651873594/br.png" alt="Brand" style="height:110px; width:110px;" />
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="https://res.cloudinary.com/karbi/image/upload/v1651874155/godrej.png" alt="Brand" style="height:110px; width:110px;" />
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Brands Wrapper -->
    <div class="container mt-10">
        <div class="section-title">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="font-weight-300 m-0">News and Updates <span class="text-primary font-weight-400"> designed to meet
                        </span> your business objectives.</h5>
                    <h2 class="mt-0 text-uppercase font-28">Articels & <span class="font-30 text-primary">Blogs</span></h2>
                </div>
                <div class="col-md-6">
                    <p>Our consumer derives great value from our bouquet of products especially from something that has given them value for money-they become our evangelist.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $sql = "select * from post WHERE site_id=$this_site_id ORDER BY created_date DESC LIMIT 4; ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="col-sm-4" style="padding: 1em;">
                        <figure class="post-media br-sm">
                            <a href="post-single.php?id=<?= $row['id'] ?>">
                                <img src="<?php echo $row["featured_image"] ?>" width="600" height="420" alt="blog">
                            </a>
                        </figure>

                        <div class="post-details">
                            <div class="post-cats text-primary">
                                <a href="post-single.php?id=<?= $row['id'] ?>"><?php echo $row["category"] ?></a>
                            </div>
                            <h4 class="post-title">
                                <a href="post-single.php?id=<?= $row['id'] ?>"><?php echo $row["post_title"] ?></a>
                            </h4>
                            <div class="post-content">
                                <p><?php echo htmlspecialchars($row['post_description'], ENT_QUOTES); ?></p> <a href="single-post.php?get_id=<?= $row2['id'] ?>" class="btn btn-link btn-primary">(read more)</a>
                            </div>
                            <div class="post-meta">
                                by <a href="#" class="post-author">Admin</a>
                                - <a href="#" class="post-date">03.01.2021</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row grid cols-xl-4 cols-lg-3 cols-md-2 mb-2" data-grid-options="{
								'layoutMode': 'fitRows'
							}" style="position: relative; height: 465px;">
				
                        <article class="post post-grid-type grid-item overlay-zoom fashion" style="position: absolute; left: 0%; top: 0px;">
                            <figure class="post-media br-sm">
                                <a href="post-single.php?id=<?= $row['id'] ?>">
                                    <img src="<?php echo $row["featured_image"] ?>" width="600" height="420" alt="blog">
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-cats text-primary">
                                    <a href="post-single.php?id=<?= $row['id'] ?>"><?php echo $row["category"] ?></a>
                                </div>
                                <h4 class="post-title">
                                    <a href="post-single.php?id=<?= $row['id'] ?>"><?php echo $row["post_title"] ?></a>
                                </h4>
                                <div class="post-content">
                                    <p><?php echo htmlspecialchars($row['post_description'], ENT_QUOTES); ?></p> <a href="single-post.php?get_id=<?= $row2['id'] ?>" class="btn btn-link btn-primary">(read more)</a>
                                </div>
                                <div class="post-meta">
                                    by <a href="#" class="post-author">Admin</a>
                                    - <a href="#" class="post-date">03.01.2021</a>
                                </div>
                            </div>
                        </article>

                    </div> -->
            <?php
                }
            }
            ?>
        </div>
    </div>
    </div>
    </main>
    <!-- End of Main -->

    <!-- Start of Footer -->
    <footer class="footer appear-animate" data-animation-options="{
            'name': 'fadeIn'
        }">
        <div class="footer-newsletter bg-primary">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="icon-box icon-box-side text-white">
                            <div class="icon-box-icon d-inline-flex">
                                <i class="w-icon-envelop3"></i>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title text-white text-uppercase font-weight-bold">Subscribe To
                                    Our Newsletter</h4>
                                <p class="text-white">Get all the latest information on Events, Sales and Offers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                        <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                            <input type="email" class="form-control mr-2 bg-white" name="email" id="email" placeholder="fYour E-mail Address" />
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
                        <div class="widget widget-about mt-0 mb-4">
                            <a href="demo12.html" class="logo-footer">
                                <img src="https://res.cloudinary.com/karbi/image/upload/v1651601493/ccbul.png" alt="logo-footer" width="145" height="45" />
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
            <div class="footer-bottom">
                <div class="footer-left">
                    <p class="copyright">Copyright © 2022 <a href="https://ccbul.com">CCBUL Consulting LLP</a>. All Rights Reserved.</p>
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
    <!-- End of Page-wrapper -->

    <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo12.html" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="demo12-shop.html" class="sticky-link">
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
                            <a href="product-default.html">
                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84" width="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product-default.html">Blue utility pina<br>fore
                                    denim dress</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$32.99</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84" height="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close">
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
                <button class="btn btn-search bg-white" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- End of Sticky Footer -->

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
                        <li><a href="demo12.html">Home</a></li>
                        <li>
                            <a href="demo12-shop.html">Shop</a>
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
                                    <a href="blog-grid.html">Grid</a>
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
                            <a href="demo12-shop.html" class="font-weight-bold text-primary text-uppercase ls-25">
                                View All Categories<i class="w-icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Mobile Menu -->

    <!-- Plugin JS File -->
    <!-- Plugin JS File -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/sticky/sticky.js"></script>
    <script src="../assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/nouislider/nouislider.min.js"></script>
    <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/vendor/zoom/jquery.zoom.js"></script>
    <script src="../assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.min.js"></script>
    <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>

</body>

</html>