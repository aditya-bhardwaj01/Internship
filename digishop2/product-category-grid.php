<?php

include "common_section/head.php";
include "common_section/header.php";
include "common_section/footer.php";

?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- product-category-grid.html   07:31:23 GMT -->
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
                            <li>Product Category Grid</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->          
            <!-- Product Page Grid Start Here -->
            <div class="category-product-grid bg-secondary section-space-bottom">                
                <div class="container">
                    <div class="inner-page-main-body">
                        <div class="page-controls">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
                                    <div class="page-controls-sorting display-none-in-mobile">
                                        <div class="dropdown">
                                            <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Categories<i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                            <ul class="product-categories-list dropdown-menu">
                                                <li><a href="#">WordPress<span>(150)</span></a></li>
                                                <li><a href="#">Joomla <span>(100)</span></a></li>
                                                <li><a href="#">PSD<span>(50)</span></a></li>
                                                <li><a href="#">Plugins<span>(60)</span></a></li>
                                                <li><a href="#">Components<span>(40)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="page-controls-sorting display-none-in-mobile">
                                        <div class="dropdown">
                                            <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Price Range<i class="fa fa-angle-down" aria-hidden="true"></i> </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Date</a></li>
                                                <li><a href="#">Best Sale</a></li>
                                                <li><a href="#">Rating</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="page-controls-sorting">
                                        <div class="dropdown">
                                            <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown"> Sort by: New Items<i class="fa fa-sort" aria-hidden="true"></i></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Date</a></li>
                                                <li><a href="#">Best Sale</a></li>
                                                <li><a href="#">Rating</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                    <div class="layout-switcher">
                                        <ul>
                                            <li class="active"><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>
                                            <li><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active clear products-container" id="gried-view">
                                <div class="product-grid-view padding-narrow">
                                    <div class="row">                                        
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/43.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/44.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/45.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/46.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/47.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/48.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/49.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/50.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/51.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/52.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/53.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/54.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/55.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/56.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/57.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/58.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">$15</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                        <div class="profile-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <ul class="pagination-align-center">
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                            </ul>
                                        </div>  
                                    </div>
                                </div>                                
                            </div>
                            <div role="tabpanel" class="tab-pane fade clear products-container" id="list-view">
                                <div class="product-list-view-style2">
                                    <div class="single-item-list">
                                        <div class="item-img">
                                            <img src="img/product/59.jpg" alt="product" class="img-responsive">
                                        </div>
                                        <div class="item-content">
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <h3><a href="#">Responsive APP</a></h3>
                                                    <span>APP</span>                          
                                                </div>
                                                <div class="item-description">
                                                    <p>Pimply dummy text of the printing and typesetting industry. </p>
                                                </div>
                                                <div class="item-sale-info">
                                                    <div class="price">$15</div>
                                                    <div class="sale-qty">Sales ( 11 )</div>
                                                </div>
                                            </div>
                                            <div class="item-profile-list">
                                                <div class="profile-title">
                                                    <div class="img-wrapper"><img src="img/profile/2.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                    <span>PsdBosS</span>
                                                </div>
                                                <div class="profile-rating-info">
                                                    <ul>
                                                        <li>
                                                            <ul class="profile-rating">
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </li>
                                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i>( 10 )</li>
                                                        <li><i class="fa fa-heart-o" aria-hidden="true"></i>( 20 )</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-list">
                                        <div class="item-img">
                                            <img src="img/product/60.jpg" alt="product" class="img-responsive">
                                        </div>
                                        <div class="item-content">
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <h3><a href="#">Responsive APP</a></h3>
                                                    <span>APP</span>                          
                                                </div>
                                                <div class="item-description">
                                                    <p>Pimply dummy text of the printing and typesetting industry. </p>
                                                </div>
                                                <div class="item-sale-info">
                                                    <div class="price">$15</div>
                                                    <div class="sale-qty">Sales ( 11 )</div>
                                                </div>
                                            </div>
                                            <div class="item-profile-list">
                                                <div class="profile-title">
                                                    <div class="img-wrapper"><img src="img/profile/2.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                    <span>PsdBosS</span>
                                                </div>
                                                <div class="profile-rating-info">
                                                    <ul>
                                                        <li>
                                                            <ul class="profile-rating">
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </li>
                                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i>( 10 )</li>
                                                        <li><i class="fa fa-heart-o" aria-hidden="true"></i>( 20 )</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-list">
                                        <div class="item-img">
                                            <img src="img/product/61.jpg" alt="product" class="img-responsive">
                                        </div>
                                        <div class="item-content">
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <h3><a href="#">Responsive APP</a></h3>
                                                    <span>APP</span>                          
                                                </div>
                                                <div class="item-description">
                                                    <p>Pimply dummy text of the printing and typesetting industry. </p>
                                                </div>
                                                <div class="item-sale-info">
                                                    <div class="price">$15</div>
                                                    <div class="sale-qty">Sales ( 11 )</div>
                                                </div>
                                            </div>
                                            <div class="item-profile-list">
                                                <div class="profile-title">
                                                    <div class="img-wrapper"><img src="img/profile/2.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                    <span>PsdBosS</span>
                                                </div>
                                                <div class="profile-rating-info">
                                                    <ul>
                                                        <li>
                                                            <ul class="profile-rating">
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </li>
                                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i>( 10 )</li>
                                                        <li><i class="fa fa-heart-o" aria-hidden="true"></i>( 20 )</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-list">
                                        <div class="item-img">
                                            <img src="img/product/62.jpg" alt="product" class="img-responsive">
                                        </div>
                                        <div class="item-content">
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <h3><a href="#">Responsive APP</a></h3>
                                                    <span>APP</span>                          
                                                </div>
                                                <div class="item-description">
                                                    <p>Pimply dummy text of the printing and typesetting industry. </p>
                                                </div>
                                                <div class="item-sale-info">
                                                    <div class="price">$15</div>
                                                    <div class="sale-qty">Sales ( 11 )</div>
                                                </div>
                                            </div>
                                            <div class="item-profile-list">
                                                <div class="profile-title">
                                                    <div class="img-wrapper"><img src="img/profile/2.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                    <span>PsdBosS</span>
                                                </div>
                                                <div class="profile-rating-info">
                                                    <ul>
                                                        <li>
                                                            <ul class="profile-rating">
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </li>
                                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i>( 10 )</li>
                                                        <li><i class="fa fa-heart-o" aria-hidden="true"></i>( 20 )</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-list">
                                        <div class="item-img">
                                            <img src="img/product/63.jpg" alt="product" class="img-responsive">
                                        </div>
                                        <div class="item-content">
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <h3><a href="#">Responsive APP</a></h3>
                                                    <span>APP</span>                          
                                                </div>
                                                <div class="item-description">
                                                    <p>Pimply dummy text of the printing and typesetting industry. </p>
                                                </div>
                                                <div class="item-sale-info">
                                                    <div class="price">$15</div>
                                                    <div class="sale-qty">Sales ( 11 )</div>
                                                </div>
                                            </div>
                                            <div class="item-profile-list">
                                                <div class="profile-title">
                                                    <div class="img-wrapper"><img src="img/profile/2.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                    <span>PsdBosS</span>
                                                </div>
                                                <div class="profile-rating-info">
                                                    <ul>
                                                        <li>
                                                            <ul class="profile-rating">
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </li>
                                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i>( 10 )</li>
                                                        <li><i class="fa fa-heart-o" aria-hidden="true"></i>( 20 )</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-list">
                                        <div class="item-img">
                                            <img src="img/product/64.jpg" alt="product" class="img-responsive">
                                        </div>
                                        <div class="item-content">
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <h3><a href="#">Responsive APP</a></h3>
                                                    <span>APP</span>                          
                                                </div>
                                                <div class="item-description">
                                                    <p>Pimply dummy text of the printing and typesetting industry. </p>
                                                </div>
                                                <div class="item-sale-info">
                                                    <div class="price">$15</div>
                                                    <div class="sale-qty">Sales ( 11 )</div>
                                                </div>
                                            </div>
                                            <div class="item-profile-list">
                                                <div class="profile-title">
                                                    <div class="img-wrapper"><img src="img/profile/2.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                    <span>PsdBosS</span>
                                                </div>
                                                <div class="profile-rating-info">
                                                    <ul>
                                                        <li>
                                                            <ul class="profile-rating">
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </li>
                                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i>( 10 )</li>
                                                        <li><i class="fa fa-heart-o" aria-hidden="true"></i>( 20 )</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-list">
                                        <div class="item-img">
                                            <img src="img/product/65.jpg" alt="product" class="img-responsive">
                                        </div>
                                        <div class="item-content">
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <h3><a href="#">Responsive APP</a></h3>
                                                    <span>APP</span>                          
                                                </div>
                                                <div class="item-description">
                                                    <p>Pimply dummy text of the printing and typesetting industry. </p>
                                                </div>
                                                <div class="item-sale-info">
                                                    <div class="price">$15</div>
                                                    <div class="sale-qty">Sales ( 11 )</div>
                                                </div>
                                            </div>
                                            <div class="item-profile-list">
                                                <div class="profile-title">
                                                    <div class="img-wrapper"><img src="img/profile/2.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                    <span>PsdBosS</span>
                                                </div>
                                                <div class="profile-rating-info">
                                                    <ul>
                                                        <li>
                                                            <ul class="profile-rating">
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </li>
                                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i>( 10 )</li>
                                                        <li><i class="fa fa-heart-o" aria-hidden="true"></i>( 20 )</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-list">
                                        <div class="item-img">
                                            <img src="img/product/66.jpg" alt="product" class="img-responsive">
                                        </div>
                                        <div class="item-content">
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <h3><a href="#">Responsive APP</a></h3>
                                                    <span>APP</span>                          
                                                </div>
                                                <div class="item-description">
                                                    <p>Pimply dummy text of the printing and typesetting industry. </p>
                                                </div>
                                                <div class="item-sale-info">
                                                    <div class="price">$15</div>
                                                    <div class="sale-qty">Sales ( 11 )</div>
                                                </div>
                                            </div>
                                            <div class="item-profile-list">
                                                <div class="profile-title">
                                                    <div class="img-wrapper"><img src="img/profile/2.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                    <span>PsdBosS</span>
                                                </div>
                                                <div class="profile-rating-info">
                                                    <ul>
                                                        <li>
                                                            <ul class="profile-rating">
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li>(<span> 05</span> )</li>
                                                            </ul>
                                                        </li>
                                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i>( 10 )</li>
                                                        <li><i class="fa fa-heart-o" aria-hidden="true"></i>( 20 )</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <ul class="pagination-align-center">
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                            </ul>
                                        </div>  
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Page Grid End Here -->
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
        
        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>

    </body>

<!-- product-category-grid.html   07:31:56 GMT -->
</html>
