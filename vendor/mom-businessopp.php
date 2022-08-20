<?php 
include "../config/connection.php";

$business_shop="business";
?><!DOCTYPE html>
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
<?php include 'site_head.php';?>
<body class="home">
    <div class="page-wrapper">
        <!-- Start of Header -->
<?php include 'shop_header.php';?>
        <!-- End of Header -->
        <!-- Start of Main -->
        <main class="main">
            <div class="container pb-2">
				<div class="swiper-container swiper-theme category-banner-3cols pt-2 pb-2 mb-2 appear-animate"
                    data-swiper-options="{
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
                    <div class="swiper-wrapper row cols-lg-3 cols-sm-2 cols-1">
                        <div class="swiper-slide banner banner-fixed category-banner layer-overlay1">
                            <figure class="br-sm">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVEVDEAAknAazuvIKzzP0B4V5zj5nNKciXJA&usqp=CAU" alt="Category Banner" width="400"
                                    height="200" style="background-color: #4F4B48; height:165px; width:312px;" />
                            </figure>
                            <div class="banner-content y-50" style="padding:10px;">
                               <h4 class="banner-title text-white text-capitalize ls-10">White Labelling</h4>
                                <a href="shop-banner-sidebar.html" class="btn btn-dark btn-link btn-underline btn-icon-right text-white">
                                    Discover Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Category Banner -->
                        <div class="swiper-slide banner banner-fixed category-banner layer-overlay1">
                            <figure class="br-sm">
                                <img src="https://www.india-briefing.com/news/wp-content/uploads/2017/03/India-Brefing-Starting-an-Export-Import-Business-in-India.jpg" alt="Category Banner" width="400"
                                    height="200" style="background-color: #A3A3A3; height:165px; width:312px;" />
                            </figure>
                            <div class="banner-content y-50" style="padding:10px;">
                               <h4 class="banner-title text-white text-capitalize ls-10">Trading</h4>
                                <a href="shop-banner-sidebar.html" class="btn btn-dark btn-link btn-underline btn-icon-right text-white">
                                    Discover Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
						<!-- End of Category Banner -->
                        <div class="swiper-slide banner banner-fixed category-banner layer-overlay1">
                            <figure class="br-sm">
                                <img src="https://smartpreneur.ng/wp-content/uploads/2020/05/JOINT-VENTURE.jpg" alt="Category Banner" width="400"
                                    height="200" style="background-color: #151A1E; height:165px; width:312px;" />
                            </figure>
                            <div class="banner-content y-50" style="padding:10px;">
                               <h4 class="banner-title text-white text-capitalize ls-10">Joint Venture</h4>
                                <a href="shop-banner-sidebar.html" class="btn btn-dark btn-link btn-underline btn-icon-right text-white">
                                    Discover Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Category Banner -->
                        <!-- End of Category Banner -->
                        <div class="swiper-slide banner banner-fixed category-banner layer-overlay1">
                            <figure class="br-sm">
                                <img src="https://www.financialexpress.com/wp-content/uploads/2022/03/1-207.jpg" alt="Category Banner" width="400"
                                    height="200" style="background-color: #151A1E;height:165px; width:312px;" />
                            </figure>
                            <div class="banner-content y-50" style="padding:10px;">
                               <h4 class="banner-title text-white text-capitalize ls-10">Start Up Investments</h4>
                                <a href="shop-banner-sidebar.html" class="btn btn-dark btn-link btn-underline btn-icon-right text-white">
                                    Discover Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Category Banner -->
							<!-- End of Category Banner -->
                        <div class="swiper-slide banner banner-fixed category-banner layer-overlay1">
                            <figure class="br-sm">
                                <img src="https://janprahar.com/static/c1e/client/79375/uploaded/4ae3dabc9f1ad2f72a647e22b09a0bd1.png" alt="Category Banner" width="400"
                                    height="200" style="background-color: #151A1E;height:165px; width:312px;" />
                            </figure>
                            <div class="banner-content y-50" style="padding:10px;">
                               <h4 class="banner-title text-white text-capitalize ls-10">Franchise</h4>
                                <a href="shop-banner-sidebar.html" class="btn btn-dark btn-link btn-underline btn-icon-right text-white">
                                    Discover Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Category Banner -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Category Banner 3Cols -->
			 <div class="container">
				<div class="notification-wrapper bg-primary br-sm mb-10 appear-animate d-flex align-items-center justify-content-center"
                    style="animation-duration: 1.2s;">
                    <i class="w-icon-mobile text-white"></i>
                    <p class="font-secondary text-white">Download our new app today! Dont Miss our mobile-only offers
                        and shop with Android Play.</p>
                    <a href="#"
                        class="btn btn-white btn-sm btn-outline btn-rounded btn-icon-right font-weight-bold text-capitalize">
                        Download
                        <i class="w-icon-long-arrow-down"></i>
                    </a>
                </div>
                <!-- End of Notificateion Wrapper -->
               <!-- End of Swiper -->
                <div class="title-link-wrapper title-deals after-none appear-animate mt-2">
                    <h2 class="title font-secondary mb-1">Trading Opportunities</h2>
                    <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">
                        More
                        <i class="w-icon-long-arrow-right"></i>
                    </a>
                </div>
                <div class="swiper-container swiper-theme mb-4 pg-inner animation-slider" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 1,
                    'breakpoints': {
                        '992': {
                            'slidesPerView': 4
                        }
                    }
                    }">
                    <div class="swiper-wrapper row cols-lg-2">
                    <div class="swiper-slide ">
								<div class="swiper-slide product product-image-gap product-simple">
									<figure class="product-media">
										<a href="product-default.html">
											<img src="https://indieseducation.b-cdn.net/wp-content/uploads/2020/05/DISTRIBUTORSHIP.jpg" alt="Product" width="295"
												height="335" /  style="height:185px; width:283px;">
										</a>
										<div class="product-action-vertical">
											<a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
										</div>
									</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
									<h4 class="product-name">
										<a href="product-default.html">Distributorship</a>
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
										<a href="product-default.html">
											<img src="https://careerspages.com/wp-content/uploads/2021/03/9ea915ea374755879f76710c960a697e_retail_everything.png" alt="Product" width="295"
												height="335" /  style="height:185px; width:283px;">
										</a>
										<div class="product-action-vertical">
											<a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
										</div>
									</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
									<h4 class="product-name">
										<a href="product-default.html">Stocking</a>
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
										<a href="product-default.html">
											<img src="https://strategizer.in/wp-content/uploads/2017/04/Profile-pic-copy.jpg" alt="Product" width="295"
												height="335" / style="height:185px; width:283px;">
										</a>
										<div class="product-action-vertical">
											<a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
										</div>
									</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
									<h4 class="product-name">
										<a href="product-default.html">Franchise</a>
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
										<a href="product-default.html">
											<img src="https://printify.com/wp-content/uploads/2021/02/White-Label-Products.png" alt="Product" width="295"
												height="335" /  style="height:185px; width:283px;">
										</a>
										<div class="product-action-vertical">
											<a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
										</div>
									</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
									<h4 class="product-name">
										<a href="product-default.html">Whitelabelling</a>
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
										<a href="product-default.html">
											<img src="https://www.india-briefing.com/news/wp-content/uploads/2017/03/India-Brefing-Starting-an-Export-Import-Business-in-India.jpg" alt="Product" width="295"
												height="335" /  style="height:185px; width:283px;">
										</a>
										<div class="product-action-vertical">
											<a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
										</div>
									</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
									<h4 class="product-name">
										<a href="product-default.html">Trading</a>
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
                        <!-- End of Product List -->
                    </div>
                </div>
                <!-- End of Swiper -->
                <!-- End of Intro-wrapper -->
                <div class="title-link-wrapper title-select after-none appear-animate">
                    <h2 class="title font-secondary font-weight-bolder">Agro-Agri Opportunities</h2>
                    <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">
                        More
                        <i class="w-icon-long-arrow-right"></i>
                    </a>
                </div>
                <div class="swiper-container swiper-theme select-product-wrapper shadow-swiper appear-animate pb-2 mb-10"
                    data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 4
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                    }">
                    <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://i.ndtvimg.com/i/2015-03/whole-grain_625x350_81427219359.jpg" alt="Product" width="295"
                                        height="235" / style="height:185px; width:283px;">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Grains</a>
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
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://i.ndtvimg.com/i/2016-08/spice_625x350_51471090241.jpg" alt="Product" width="295"
                                        height="235" /  style="height:185px; width:283px;">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Spices</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 0%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP5XlJd7VVJtjzYFejM5l_GCzvBlE6HPbbZg&usqp=CAU" alt="Product" width="295"
                                        height="235" /  style="height:185px; width:283px;">
                               </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Edible Oil</a>
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
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://blog-images.pharmeasy.in/2020/10/26145600/shutterstock_601199999-1.jpg" alt="Product" width="295"
                                        height="235" /  style="height:185px; width:283px;">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Dry Fruits</a>
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
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.yourfreecareertest.com/wp-content/uploads/2019/01/become_an_agricultural_equipment_operator.png" alt="Product" width="295"
                                        height="235" /  style="height:185px; width:283px;">
                                    </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Agriculture Equipment		
				
							  </a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination mt-4"></div>
                </div>
                <!-- End of Selected Products Wrapper -->
              <!-- End of Icon Category Wrapper -->

                <div class="category-banner-wrapper appear-animate row mb-5">
                    <div class="col-md-4 mb-4">
                        <div class="banner banner-fixed br-sm layer-overlay1">
                            <figure>
                                <img src="https://franchisealpha.com/wp-content/uploads/2019/10/BRAINCARVE.jpg" alt="Category Banner"
                                    width="680" height="180" style="background-color: #565960; height:227px; wdth:422px;" />
                            </figure>
                        </div>
                    </div>
					 <div class="col-md-4 mb-4">
                        <div class="banner banner-fixed br-sm layer-overlay1">
                            <figure>
                                <img src="https://franchisealpha.com/wp-content/uploads/2018/09/IMG-20180728-WA0026-1200.jpg" alt="Category Banner"
                                    width="680" height="180" style="background-color: #565960; height:227px; wdth:422px;" />
                            </figure>
                         </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="banner banner-fixed br-sm layer-overlay1 p-10">
                            <figure>
                                <img src="https://franchisealpha.com/wp-content/uploads/2020/01/RTMT-new-1200.jpg" alt="Category Banner"
                                    width="680" height="180" style="background-color: #565960; height:227px; wdth:422px;"/>
                            </figure>
                            </div>
                    </div>
                </div>
                <!-- End of Category Banner Wrapper -->
				<div class="title-link-wrapper title-deals after-none appear-animate">
                    <h2 class="title font-secondary mb-1">Top Brands</h2>
                    <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">
                        More
                        <i class="w-icon-long-arrow-right"></i>
                    </a>
                </div>
               <div class="swiper-container swiper-theme shadow-swiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-swiper-options="{
                            'spaceBetween': 40,
                            'breakpoints': {
                                '0': {
                                    'slidesPerView': 2
                                },
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 4
                                },
                                '992': {
                                    'slidesPerView': 6
                                },
                                '1200': {
                                    'slidesPerView': 8
                                }
                                }
                            }">
                            <div class="swiper-wrapper " id="swiper-wrapper-acc292d74a084e109" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide category category-ellipse swiper-slide-active" role="group" aria-label="1 / 8" style="width: 126.125px; margin-right: 40px;">
                                    <figure class="category-media">
                                        <a href="demo15-shop.html">
                                            <img src="https://www.corporatelogos.in/logos/cheers003.jpg" alt="Categroy" style="background-color: #C1C6CC; width:123px; height:123px;">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide category category-ellipse swiper-slide-next" role="group" aria-label="2 / 8" style="width: 126.125px; margin-right: 40px;">
                                    <figure class="category-media">
                                        <a href="demo15-shop.html">
                                            <img src="https://pbs.twimg.com/profile_images/503612048182218753/J318Pa0b.png" alt="Categroy" style="background-color: #C1C6CC; width:135px; height:123px;">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide category category-ellipse" role="group" aria-label="3 / 8" style="width: 126.125px; margin-right: 40px;">
                                    <figure class="category-media">
                                        <a href="demo15-shop.html">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbSL6w77tALrLRm75IBf6kvaIBnCWN_M0t8g&usqp=CAU" alt="Categroy" style="background-color: #C1C6CC; width:135px; height:123px;">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide category category-ellipse" role="group" aria-label="4 / 8" style="width: 126.125px; margin-right: 40px;">
                                    <figure class="category-media">
                                        <a href="demo15-shop.html">
                                            <img src="https://www.smilefoundationindia.org/images/home/give-india-logo.jpg" alt="Categroy" style="background-color: #C1C6CC; width:135px; height:123px;">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide category category-ellipse" role="group" aria-label="5 / 8" style="width: 126.125px; margin-right: 40px;">
                                    <figure class="category-media">
                                        <a href="demo15-shop.html">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/77/Bhumi.jpg" alt="Categroy" style="background-color: #C1C6CC; width:135px; height:123px;">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide category category-ellipse" role="group" aria-label="6 / 8" style="width: 126.125px; margin-right: 40px;">
                                    <figure class="category-media">
                                        <a href="demo15-shop.html">
                                            <img src="https://csrbox.org/organization/org_logo/1544528148United-Way-Mumbai-RGB.png" alt="Categroy" style="background-color: #C1C6CC; width:135px; height:123px;">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide category category-ellipse" role="group" aria-label="7 / 8" style="width: 126.125px; margin-right: 40px;">
                                    <figure class="category-media">
                                        <a href="demo15-shop.html">
                                            <img src="http://static.businessworld.in/article/article_extra_large_image/1580388966_W2QVla_TFI_Logo.png" alt="Categroy" style="background-color: #C1C6CC; width:135px; height:123px;">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide category category-ellipse" role="group" aria-label="8 / 8" style="width: 126.125px; margin-right: 40px;">
                                    <figure class="category-media">
                                        <a href="demo15-shop.html">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbSL6w77tALrLRm75IBf6kvaIBnCWN_M0t8g&usqp=CAU" alt="Categroy" style="background-color: #C1C6CC; width:135px; height:123px;">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets" style="display: none;">
							<span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span>
							</div>
							<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
					</div>
						
				
                <!-- End of Swiper -->
				   <!-- End of Intro-wrapper -->
                <div class="title-link-wrapper title-select after-none appear-animate">
                    <h2 class="title font-secondary font-weight-bolder">Real Estate Opportunities</h2>
                    <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">
                        More
                        <i class="w-icon-long-arrow-right"></i>
                    </a>
                </div>
                <div class="swiper-container swiper-theme select-product-wrapper shadow-swiper appear-animate pb-2 mb-10"
                    data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 4
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                    }">
                    <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://images.livemint.com/img/2020/06/02/600x338/land_1591113216603_1591113238037.jpg" alt="Product" width="295"
                                        height="235" / style="height:185px; width:283px;">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Agricultural Land</a>
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
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://cpimg.tistatic.com/06286966/b/4/Warehouse-Sale-in-Sonipat.jpg" alt="Product" width="295"
                                        height="235" /  style="height:185px; width:283px;">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Warehouse</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 0%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSe-LmV4X0gMWln7X_SG9lAxJCnq8yhM07xA&usqp=CAU" alt="Product" width="295"
                                        height="235" /  style="height:185px; width:283px;">
                               </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Industrial Land</a>
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
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://buildings.lbl.gov/sites/default/files/styles/slideshow/public/slideshow_images/cbs-slide_5.jpg?itok=OW2pyLZ5" alt="Product" width="295"
                                        height="235" /  style="height:185px; width:283px;">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Commercial Buildings</a>
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
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.yourfreecareertest.com/wp-content/uploads/2019/01/become_an_agricultural_equipment_operator.png" alt="Product" width="295"
                                        height="235" /  style="height:185px; width:283px;">
                                    </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Agriculture Equipment		
				
							  </a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination mt-4"></div>
                </div>
					   <!-- End of Intro-wrapper -->
                <div class="title-link-wrapper title-select after-none appear-animate">
                    <h2 class="title font-secondary font-weight-bolder">High Potential StartUp up for Investments</h2>
                    <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">
                        More
                        <i class="w-icon-long-arrow-right"></i>
                    </a>
                </div>
                <div class="swiper-container swiper-theme select-product-wrapper shadow-swiper appear-animate pb-2 mb-10"
                    data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 4
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                    }">
                    <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://img.etimg.com/thumb/width-1200,height-900,imgsize-238542,resizemode-1,msid-79650347/news/economy/policy/india-and-south-africa-revive-multilateral-talks-on-ecomm.jpg" alt="Product" width="295"
                                        height="235" / style="height:185px; width:283px;">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">e-Commerce</a>
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
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://assets.telegraphindia.com/telegraph/2021/Jan/1609787169_shutterstock_415618867.jpg" alt="Product" width="295"
                                        height="235" /  style="height:185px; width:283px;">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Recruitments</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 0%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://satgurutravel.com/botswana/wp-content/uploads/sites/13/2018/10/Online-Booking-Best-Way-to-Book-Flights.jpg" alt="Product" width="295"
                                        height="235" /  style="height:185px; width:283px;">
                               </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Travel</a>
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
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://cdn.corporatefinanceinstitute.com/assets/marketing.jpeg" alt="Product" width="295"
                                        height="235" /  style="height:185px; width:283px;">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Marketing</a>
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
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.yourfreecareertest.com/wp-content/uploads/2019/01/become_an_agricultural_equipment_operator.png" alt="Product" width="295"
                                        height="235" /  style="height:185px; width:283px;">
                                    </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <h4 class="product-name">
                                    <a href="product-default.html">Agriculture Equipment		
				
							  </a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination mt-4"></div>
                </div>			
				
                <!-- End of Selected Products Wrapper -->
                <!--div class="title-link-wrapper title-deals after-none appear-animate">
                    <h2 class="title font-secondary mb-1">Featured Properties</h2>
                    <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">
                        More Properties
                        <i class="w-icon-long-arrow-right"></i>
                    </a>
                </div>
                <div class="swiper-container swiper-theme mb-4 pg-inner animation-slider" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 1,
                    'breakpoints': {
                        '992': {
                            'slidesPerView': 2
                        }
                    }
                    }">
                    <div class="swiper-wrapper row cols-lg-2">
                        <div class="swiper-slide ">
                            <div class="product product-list br-sm mb-0">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="https://secure.homestaymanager.com/picture?ss=BAh7CEkiCGdpZAY6BkVUSSIxZ2lkOi8vaHN0L1Byb3BlcnR5UGljdHVyZS8xMDA5NDMxP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA%3D%3D--0b46f3124f504fb13abd1a8ea85081ebba494126&style=listing" alt="Product"
                                          style="height:226px; width:300px;">
                                      </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quick View"></a>
                                    </div>
                                    <div class="product-countdown-container mb-0">
                                        <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                            data-format="DHMS" data-compact="false"
                                            data-labels-short="Days, Hours, Mins, Secs">
                                            00:00:00:00</div>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Automatic Watch</a>
                                    </h4>
                                    <div class="ratings-container mb-2">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(1 Reviews)</a>
                                    </div>
                                    <div class="product-price text-primary">$20.72 - $79.20</div>
                                    <p class="text-default">Aliquam id diam maecenas ultricies me. Volutpat ac tincidunt
                                        vitae sempe. Ultrices eros in cursus turpis massa tine.</p>
                                    <div class="product-action">
                                        <a href="product-default.html" class="btn-dark btn-product"
                                            title="Select Options">
                                            <i class="w-icon-cart"></i>
                                            <span>Select Options</span>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="product product-list br-sm mb-0">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="https://s3-ap-south-1.amazonaws.com/itc-dermafique-static/wp-content/uploads/2019/04/15055256/why-a-homestay-is-a-better-way-to-discover-the-north-east-01.jpg" alt="Product"
                                            style="height:226px; width:300px;">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quick View"></a>
                                    </div>
                                    <div class="product-countdown-container mb-0">
                                        <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                            data-format="DHMS" data-compact="false"
                                            data-labels-short="Days, Hours, Mins, Secs">
                                            00:00:00:00</div>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Mini Wireless Earphone</a>
                                    </h4>
                                    <div class="ratings-container mb-2">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(1 Reviews)</a>
                                    </div>
                                    <div class="product-price text-primary">$59.17 - $129.27</div>
                                    <p class="text-default">Aliquam id diam maecenas ultricies me. Volutpat ac tincidunt
                                        vitae sempe. Ultrices eros in cursus turpis massa tine.</p>
                                    <div class="product-action">
                                        <a href="product-default.html" class="btn-dark btn-product"
                                            title="Select Options">
                                            <i class="w-icon-cart"></i>
                                            <span>Select Options</span>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product List -->
                    </div>
                </div-->
                <!-- End of Swiper -->
            </div>
         </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
<?php include 'shop_footer.php';?>
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
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search bg-white" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
            version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
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
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
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
                                        <li><a href="shop-horizontal-filter.html">Horizontal Filter<span
                                                    class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span
                                                    class="tip tip-new">New</span></a></li>
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
                                        <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span
                                                    class="tip tip-new">New</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Layouts</a>
                                    <ul>
                                        <li><a href="product-default.html">Default<span
                                                    class="tip tip-hot">Hot</span></a></li>
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

    <!-- Start of Newsletter popup -->
    <div class="newsletter-popup mfp-hide">
        <div class="newsletter-content">
            <h4 class="text-uppercase font-weight-normal ls-25">Get Up to<span class="text-primary">25% Off</span></h4>
            <h2 class="ls-25">Sign up to Wolmart</h2>
            <p class="text-light ls-10">Subscribe to the Wolmart market newsletter to
                receive updates on special offers.</p>
            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
                <input type="email" class="form-control email font-size-md" name="email" id="email2"
                    placeholder="Your email address" required="">
                <button class="btn btn-dark" type="submit">SUBMIT</button>
            </form>
            <div class="form-checkbox d-flex align-items-center">
                <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                    required="">
                <label for="hide-newsletter-popup" class="font-size-sm text-light">Don't show this popup again.</label>
            </div>
        </div>
    </div>
    <!-- End of Newsletter popup -->

    <!-- Start of Quick View -->
    <div class="product product-single product-popup">
        <div class="row gutter-lg">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="product-gallery product-gallery-sticky">
                    <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                        <div class="swiper-wrapper row cols-1 gutter-no">
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/1-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/1-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/2-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/2-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/3-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/3-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/4-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/4-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
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
                                <img src="assets/images/products/popup/1-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/2-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/3-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/4-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
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
                            <a href="#"
                                class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Quick view -->

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
    <script src="../assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.min.js"></script>
    <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
</body>

</html>