<?php
require '../config/connection.php'; //connecton file
$product_shop = true;
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">


<?php include 'site_head.php'; ?>

<body>
    <div class="page-wrapper">
        <!-- Start of Header -->
        <?php include 'shop_header.php'; ?>
        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Blog Single</h1>
                </div>
            </div>
            <!-- End of Page Header -->


            <!-- Start of Page Content -->
            <div class="page-content mb-8">
                <div class="container mt-10">
                    <div class="row gutter-lg">
                        <div class="main-content post-single-content">
                            <div class="post post-grid post-single">
                                <?php
                                $query = "select * from post where id= '$id' AND site_id = $this_site_id AND status = 'published'";
                                $result = mysqli_query($conn, $query);
                                if (!$result) {
                                    errlog(mysqli_error($conn), $query);
                                } else {
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                        <figure class="post-media br-sm">
                                            <img src="<?php echo $row['featured_image'] ?>" alt="Blog" style="width:100%;
                                                height:405px;" />
                                        </figure>
                                        <div class="post-details">
                                            <div class="post-meta">
                                                by <a href="#" class="post-author"><?php echo $row['vendor_id'] ?></a>
                                                - <a href="#" class="post-date"><?php echo agoTime($row['created_date']); ?></a>
                                                <a href="#" class="post-comment"><i class="w-icon-account"></i><span><?php echo $row['views'] ?></span>Views</a>
                                            </div>
                                            <h2 class="post-title"><a href="#"><?php echo htmlspecialchars($row['post_title']); ?></a></h2>
                                            <div class="post-content">
                                                <p><?php echo htmlspecialchars($row['post_description']); ?>
                                                </p>
                                            </div>
                                        </div>
                            </div>
                    <?php
                                    }
                                } ?>
                    <div class="tags">
                        <label class="text-dark mr-2">Tags:</label>
                        <?php
                        $sql = "Select distinct tags from post where tags!='' and id='$id' ";
                        $result = mysqli_query($conn, $sql);
                        $tags = array();
                        while ($tag = mysqli_fetch_assoc($result)) {
                            $curr = explode(',', $tag['tags']);
                            foreach ($curr as $ele) {
                                array_push($tags, $ele);
                            }
                        }

                        foreach ($tags as $tag) {
                        ?>
                            <a href="#" class="tag"><?php echo $tag; ?></a>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- End Tag -->
                    <div class="social-links mb-10">
                        <div class="social-icons social-no-color border-thin">
                            <a href="http://www.facebook.com/sharer.php?u={$this_site_url/single-post.php?get_id=<?= $row['$id'] ?>" target="_blank" class="social-icon social-facebook w-icon-facebook"></a>
                            <a href="http://twitter.com/share?text=share&url=<?php echo $this_site_url ?>/single-post.php?get_id=<?= $row['$id'] ?>" class="social-icon social-twitter w-icon-twitter"></a>
                            <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                            <a href="http://www.instagram.com/?url=<?php echo $this_site_url ?>/single-post.php?get_id=<?= $row['$id'] ?>" class="social-icon social-instagram w-icon-instagram"></a>
                            <a href="https://api.whatsapp.com/send?text=<?php echo $this_site_url ?>/single-post.php?get_id=<?= $row['$id'] ?>"></a> <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </div>
                    </div>
                    <!-- End Social Links -->
                    <div class="post-author-detail">
                        <?php
                        $sql = "SELECT vendor_id FROM post WHERE id = '$id' AND site_id = $this_site_id";
                        $res = mysqli_query($conn, $sql);
                        if (!$res) {
                            errlog(mysqli_error($conn), $sql);
                        }
                        foreach ($res as $row) {
                            $vendor_id = $row['vendor_id'];
                        }

                        $sql = "SELECT * FROM vendor WHERE id = $vendor_id AND site_id = $this_site_id";
                        $res = mysqli_query($conn, $sql);
                        if (!$res) {
                            errlog(mysqli_error($conn), $sql);
                        }

                        foreach ($res as $row) {
                        ?>
                            <figure class="author-media mr-4">
                                <img src="<?php echo $row['profile_pic']; ?>" alt="Author" width="105" height="105" />
                            </figure>
                            <div class="author-details">
                                <div class="author-name-wrapper flex-wrap mb-2">
                                    <h4 class="author-name font-weight-bold mb-2 pr-4 mr-auto"><?php echo $row['name']; ?>
                                        <span class="font-weight-normal text-default">(AUTHOR)</span>
                                    </h4>
                                    <a href="#" class="btn btn-primary btn-link btn-icon-right pb-0 text-normal font-weight-normal mb-2">More Posts by admin<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <p class="mb-0"><?php echo $row['bio']; ?> </p>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- End Post Author Detail -->
                    <div class="post-navigation">
                        <div class="nav nav-prev">
                            <a href="#" class="align-items-start text-left">
                                <span><i class="w-icon-long-arrow-left"></i>previous post</span>
                                <?php
                                $sql = "SELECT post_title FROM post WHERE site_id = $this_site_id AND id = $id-1";
                                $res = mysqli_query($conn, $sql);
                                if (!$res) {
                                    errlog(mysqli_error($conn), $sql);
                                }
                                foreach ($res as $row) {
                                ?>
                                    <span class="nav-content mb-0 text-normal"><?php echo $row['post_title'] ?></span>
                                <?php } ?>
                            </a>
                        </div>
                        <div class="nav nav-next">
                            <a href="#" class="align-items-end text-right">
                                <span>next post<i class="w-icon-long-arrow-right"></i></span>
                                <?php
                                $sql = "SELECT post_title FROM post WHERE site_id = $this_site_id AND id = $id+1";
                                $res = mysqli_query($conn, $sql);
                                if (!$res) {
                                    errlog(mysqli_error($conn), $sql);
                                }
                                foreach ($res as $row) {
                                ?>
                                    <span class="nav-content mb-0 text-normal"><?php echo $row['post_title'] ?></span>
                                <?php } ?>
                            </a>
                        </div>
                    </div>
                    <!-- End Post Navigation -->
                    <h4 class="title title-lg font-weight-bold mt-10 pt-1 mb-5">Related Posts</h4>
                    <div class="swiper">
                        <div class="post-slider swiper-container swiper-theme nav-top pb-2" data-swiper-options="{
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
                                            'slidesPerView': 2
                                        },
                                        '1200': {
                                            'slidesPerView': 3
                                        }
                                    }
                                }">
                            <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-xs-2 cols-1">
                                <?php
                                $sql = "select * from post WHERE site_id=$this_site_id; ";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                        <div class="swiper-slide post post-grid">
                                            <figure class="post-media br-sm">
                                                <a href="post-single.html">
                                                    <img src="<?php echo $row["featured_image"] ?>" alt="Post" width="296" height="190" style="background-color: #bcbcb4;" />
                                                </a>
                                            </figure>
                                            <div class="post-details text-center">
                                                <div class="post-meta">
                                                    by <a href="#" class="post-author">Admin</a>
                                                    - <a href="#" class="post-date"> <?php echo agoTime($row['created_date']); ?></a>
                                                </div>
                                                <h4 class="post-title mb-3"><a href="post-single.html"><?php echo $row["post_title"] ?>...</a></h4>
                                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                        </div>

                                <?php
                                    }
                                }
                                ?>
                            </div>
                            <button class="swiper-button-next"></button>
                            <button class="swiper-button-prev"></button>
                        </div>
                    </div>
                    <!-- End Related Posts -->

                    <h4 class="title title-lg font-weight-bold pt-1 mt-10">3 Comments</h4>
                    <ul class="comments list-style-none pl-0">
                        <li class="comment">
                            <div class="comment-body">
                                <figure class="comment-avatar">
                                    <img src="assets/images/blog/single/1.png" alt="Avatar" width="90" height="90" />
                                </figure>
                                <div class="comment-content">
                                    <h4 class="comment-author font-weight-bold">
                                        <a href="#">John Doe</a>
                                        <span class="comment-date">Aug 23, 2021 at 10:46 am</span>
                                    </h4>
                                    <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.arcu fer
                                        ment umet, dapibus sed, urna.</p>
                                    <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="comment">
                            <div class="comment-body">
                                <figure class="comment-avatar">
                                    <img src="assets/images/blog/single/2.png" alt="Avatar" width="90" height="90" />
                                </figure>
                                <div class="comment-content">
                                    <h4 class="comment-author font-weight-bold">
                                        <a href="#">Semi Colon</a>
                                        <span class="comment-date">Aug 24, 2021 at 13:25 am</span>
                                    </h4>
                                    <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales.</p>
                                    <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="comment">
                            <div class="comment-body">
                                <figure class="comment-avatar">
                                    <img src="assets/images/blog/single/1.png" alt="Avatar" width="90" height="90" />
                                </figure>
                                <div class="comment-content">
                                    <h4 class="comment-author font-weight-bold">
                                        <a href="#">John Doe</a>
                                        <span class="comment-date">Aug 23, 2021 at 10:46 am</span>
                                    </h4>
                                    <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.arcu fer
                                        ment umet, dapibus sed, urna.</p>
                                    <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- End Comments -->
                    <form class="reply-section pb-4">
                        <h4 class="title title-md font-weight-bold pt-1 mt-10 mb-0">Leave a Reply</h4>
                        <p>Your email address will not be published. Required fields are marked</p>
                        <div class="row">
                            <div class="col-sm-6 mb-4">
                                <input type="text" class="form-control" placeholder="Enter Your Name" id="name">
                            </div>
                            <div class="col-sm-6 mb-4">
                                <input type="text" class="form-control" placeholder="Enter Your Email" id="email_1">
                            </div>
                        </div>
                        <textarea cols="30" rows="6" placeholder="Write a Comment" class="form-control mb-4" id="comment"></textarea>
                        <button class="btn btn-dark btn-rounded btn-icon-right btn-comment">Post Comment<i class="w-icon-long-arrow-right"></i></button>
                    </form>
                        </div>
                        <!-- End of Main Content -->
                        <aside class="sidebar right-sidebar blog-sidebar sidebar-fixed sticky-sidebar-wrapper">
                            <div class="sidebar-overlay">
                                <a href="#" class="sidebar-close">
                                    <i class="close-icon"></i>
                                </a>
                            </div>
                            <a href="#" class="sidebar-toggle">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar">
                                    <div class="widget widget-search-form">
                                        <div class="widget-body">
                                            <form action="#" method="GET" class="input-wrapper input-wrapper-inline">
                                                <input type="text" class="form-control" placeholder="Search in Blog" autocomplete="off" required>
                                                <button class="btn btn-search"><i class="w-icon-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End of Widget search form -->
                                    <div class="widget widget-categories">
                                        <h3 class="widget-title bb-no mb-0">Categories</h3>
                                        <ul class="widget-body filter-items search-ul">
                                            <?php
                                            $sql = "select * from categories WHERE marketplace_id=21 AND site_id=$this_site_id; ";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                            ?>
                                                    <li><a href="blog.html"><?php echo $row["category_title"] ?></a></li>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <!-- End of Widget categories -->
                                    <div class="widget widget-posts">
                                        <h3 class="widget-title bb-no">Popular Posts</h3>
                                        <div class="widget-body">
                                            <div class="swiper">
                                                <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                                    'spaceBetween': 20,
                                                    'slidesPerView': 1
                                                }">
                                                    <div class="swiper-wrapper row cols-1">
                                                        <?php
                                                        $sql = "select * from post WHERE site_id=$this_site_id; ";
                                                        $result = $conn->query($sql);
                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                        ?>
                                                                <div class="swiper-slide widget-col">
                                                                    <div class="post-widget mb-4">
                                                                        <figure class="post-media br-sm">
                                                                            <img src="<?php echo $row["featured_image"] ?>" alt="150" height="150" />
                                                                        </figure>
                                                                        <div class="post-details">
                                                                            <div class="post-meta">
                                                                                <a href="#" class="post-date"><?php echo $row["created_date"] ?></a>
                                                                            </div>
                                                                            <h4 class="post-title">
                                                                                <a href="post-single.html"><?php echo $row["post_title"] ?></a>
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                    <button class="swiper-button-next"></button>
                                                    <button class="swiper-button-prev"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget posts -->
                                    <!-- End of Widget custom block -->
                                    <div class="widget widget-tags">
                                        <h3 class="widget-title bb-no">Browse Tags</h3>
                                        <div class="widget-body tags">
                                            <a href="#" class="tag">Fashion</a>
                                            <a href="#" class="tag">Style</a>
                                            <a href="#" class="tag">Travel</a>
                                            <a href="#" class="tag">Women</a>
                                            <a href="#" class="tag">Men</a>
                                            <a href="#" class="tag">Hobbies</a>
                                            <a href="#" class="tag">Shopping</a>
                                            <a href="#" class="tag">Photography</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>

            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <?php include '../footer.php'; ?>
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
    <!-- Plugin JS File -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/sticky/sticky.js"></script>
    <script src="../assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/main.min.js"></script>
</body>

</html>