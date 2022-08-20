<?php

if (!isset($conn)) {
    include "../config/connection.php";
}

$vendor_id_to_be_used = isset($_SESSION['vendor_id']) ? $_SESSION['vendor_id'] : (isset($_SESSION['user_id']) ? $_SESSION['user_id'] : -1);

if (isset($_COOKIE['guestCart'])  &&  (isset($_SESSION['vendor_id'])  ||  isset($_SESSION['user_id']))) {
    $all_data = unserialize($_COOKIE['guestCart']);
    $all_quantities = unserialize($_COOKIE['guestCartQuantity']);

    foreach ($all_data as $marketplace_id => $prods) {
        if ($marketplace_id == 5) {
            foreach ($all_data[$marketplace_id] as $item_id => $items) {

                foreach (explode(",", $items) as $vars) {
                    $item = array('marketplace_id' => $marketplace_id, 'item_id' => $item_id, 'variant_id' => $vars, 'quantity' => $all_quantities[$marketplace_id][$item_id][$vars]);

                    $qry = "SELECT * FROM cart_n_wishlist WHERE marketplace_id = $marketplace_id AND item_id = $item_id AND save_type = 'CART' AND variant_id = $vars AND vendor_id = $vendor_id_to_be_used ";
                    $res = mysqli_query($conn, $qry);
                    if (!$res) {
                        errlog(mysqli_error($conn), $qry);
                    }

                    $data = mysqli_fetch_assoc($res);

                    $marketplace_id = realEscape($marketplace_id);
                    $item_id = realEscape($item_id);
                    $vars = realEscape($vars);
                    $quantity = realEscape($all_quantities[$marketplace_id][$item_id][$vars]);
                    $qry = "";
                    if (isset($data['id'])) {
                        $qry = "UPDATE cart_n_wishlist set save_status = 1, quantity = $quantity WHERE item_id = $item_id AND variant_id = $vars AND vendor_id = $vendor_id_to_be_used AND save_type = 'CART' AND marketplace_id = $marketplace_id ";
                    } else {
                        $qry = "INSERT INTO `cart_n_wishlist`(`site_id`, `vendor_id`, `save_type`, `marketplace_id`, `item_id`, `variant_id`, `quantity`, `bundle`, `save_status`, `created_date`) VALUES ('$this_site_id', $vendor_id_to_be_used, 'CART', $marketplace_id, $item_id, $vars, $quantity, 0, 1, '$curr_date')";
                    }

                    if (!mysqli_query($conn, $qry)) {
                        errlog(mysqli_error($conn), $qry);
                    }
                }
            }
        }
    }


    if (isset($_SESSION['guestCart']))
        unset($_SESSION['guestCart']);
}


if (isset($_COOKIE['guestWishlist'])  &&  (isset($_SESSION['vendor_id'])  ||  isset($_SESSION['user_id']))) {
    $all_data = unserialize($_COOKIE['guestWishlist']);

    foreach ($all_data as $marketplace_id => $prods) {
        if ($marketplace_id == 5) {
            foreach ($all_data[$marketplace_id] as $item_id => $items) {

                foreach (explode(",", $items) as $vars) {
                    if ($vars == '')   continue;

                    $item = array('marketplace_id' => $marketplace_id, 'item_id' => $item_id, 'variant_id' => $vars);

                    $qry = "SELECT * FROM cart_n_wishlist WHERE marketplace_id = $marketplace_id AND item_id = $item_id AND save_type = 'WISHLIST' AND variant_id = $vars AND vendor_id = $vendor_id_to_be_used ";
                    $res = mysqli_query($conn, $qry);
                    if (!$res) {
                        errlog(mysqli_error($conn), $qry);
                    }

                    $data = mysqli_fetch_assoc($res);

                    $marketplace_id = realEscape($marketplace_id);
                    $item_id = realEscape($item_id);
                    $vars = realEscape($vars);
                    // $quantity = realEscape($all_quantities[$marketplace_id][$item_id][$vars]);
                    $qry = "";
                    if (isset($data['id'])) {
                        $qry = "UPDATE cart_n_wishlist set save_status = 1, quantity = $quantity WHERE item_id = $item_id AND variant_id = $vars AND vendor_id = $vendor_id_to_be_used AND save_type = 'WISHLIST' AND marketplace_id = $marketplace_id ";
                    } else {
                        $qry = "INSERT INTO `cart_n_wishlist`(`site_id`, `vendor_id`, `save_type`, `marketplace_id`, `item_id`, `variant_id`, `quantity`, `bundle`, `save_status`, `created_date`) VALUES ('$this_site_id', $vendor_id_to_be_used, 'WISHLIST', $marketplace_id, $item_id, $vars, 1, 0, 1, '$curr_date')";
                    }
                    if (!mysqli_query($conn, $qry)) {
                        errlog(mysqli_error($conn), $qry);
                    }
                }
            }
        }
    }


    if (isset($_SESSION['guestWishlist']))
        unset($_SESSION['guestWishlist']);
}

$disabled = 'disabled style="background-color: rgb(222, 219, 219);"';

if (isset($product_detail)) {
    $product_shop = true;
} else if (isset($job_detail)) {
    $job_shop = true;
} else if (isset($charity_detail)) {
    $charity_shop = true;
} else {
    $disabled = '';
}

if (!isset($product_shop)  &&  !isset($service_shop)  &&  !isset($cart)  &&  !isset($checkout) &&  !isset($job_shop) &&  !isset($business_shop) &&  !isset($destination_shop) &&  !isset($charity_shop) &&  !isset($events_shop) &&  !isset($gigs_shop) &&  !isset($invest_shop) &&  !isset($property_shop) &&  !isset($profession_shop) &&  !isset($talent_shop)) {
    die("Bad Request");
}

if (!isset($given_category)) {
    $given_category = '';
}

?>




<h1 class="d-none">CCBUL</h1>
<!-- Start of Header -->
<header class="header header-border">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <p class="welcome-msg">
                    <?php
                    if (isset($_SESSION['admin_id'])) {
                        $qry = "SELECT * from admin where id = '" . $_SESSION['admin_id'] . "' ";
                        $res = mysqli_query($conn, $qry);
                        if (!$res) {
                            errlog(mysqli_error($conn), $qry);
                        }
                        $data = mysqli_fetch_assoc($res);
                        echo "Welcome " . $data['name'] . " (ADMIN)";
                    } else if (isset($_SESSION['vendor_id'])  ||  isset($_SESSION['user_id'])) {
                        $vid = -1;
                        if (isset($_SESSION['user_id'])) {
                            $vid = $_SESSION['user_id'];
                        }
                        if (isset($_SESSION['vendor_id'])) {
                            $vid = $_SESSION['vendor_id'];
                        }
                        $qry = "SELECT * from vendor where id = $vid ";
                        $res = mysqli_query($conn, $qry);
                        if (!$res) {
                            errlog(mysqli_error($conn), $qry);
                        }
                        $data = mysqli_fetch_assoc($res);
                        echo "Welcome " . $data['name'];
                    } else {
                        echo "Welcome Guest";
                    }
                    ?>
                </p>
            </div>
            <div class="header-right">
                <div class="dropdown">
                    <a href="#currency">USD</a>
                    <div class="dropdown-box">
                        <a href="#USD">USD</a>
                        <a href="#EUR">EUR</a>
                    </div>
                </div>
                <!-- End of DropDown Menu -->

                <div class="dropdown">
                    <a href="#language"><img src="../assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8" class="dropdown-image" /> ENG</a>
                    <div class="dropdown-box">
                        <a href="#ENG">
                            <img src="../assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8" class="dropdown-image" />
                            ENG
                        </a>
                        <a href="#FRA">
                            <img src="../assets/images/flags/fra.png" alt="FRA Flag" width="14" height="8" class="dropdown-image" />
                            FRA
                        </a>
                    </div>
                </div>
                <!-- End of Dropdown Menu -->
                <span class="divider d-lg-show"></span>
                <a href="blog" class="d-lg-show">Blog</a>
                <a href="contact-us" class="d-lg-show">Contact Us</a>
                <?php
                if (isset($_SESSION['vendor_id'])  ||  isset($_SESSION['user_id'])) {
                ?>
                    <a href="my-account" class="d-lg-show">My Account</a>
                <?php
                }


                if (!isset($_SESSION['vendor_id'])  &&  !isset($_SESSION['user_id'])) {
                ?>
                    <a href="../assets/ajax/login" class="d-lg-show login sign-in" id="signInUserBtn"><i class="w-icon-account"></i>Sign In</a>
                    <span class="delimiter d-lg-show">/</span>
                    <a href="../assets/ajax/login" class="ml-0 d-lg-show login register">Register</a>
                <?php } else {
                ?>

                    <a href="../logout" class="d-lg-show"><i class="w-icon-account"></i>Logout</a>
                <?php
                } ?>
            </div>
        </div>
    </div>
    <!-- End of Header Top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                </a>
                <a href="demo1" class="logo ml-lg-0">
                    <img src="../assets/images/logo.png" alt="logo" width="144" height="45" />
                </a>
                <div class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                    <div class="select-box">
                        <select id="category" name="category" class="head" onchange="location = this.value;" <?php echo $disabled; ?>>
                            <option value="all">All Categories</option>
                            <?php

                            $qry = "";
                            $cat = "";
                            if (isset($product_shop)) {
                                $qry = "SELECT DISTINCT cat_id from marketplace_products where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by cat_id";
                                $cat = 'cat_id';
                            } else if (isset($cart)) {
                                $qry = "SELECT DISTINCT cat_id from marketplace_products where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by cat_id";
                                $cat = 'cat_id';
                            } else if (isset($checkout)) {
                                $qry = "SELECT DISTINCT cat_id from marketplace_products where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by cat_id";
                                $cat = 'cat_id';
                            } else if (isset($service_shop)) {
                                $qry = "SELECT DISTINCT cat_id from marketplace_services where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by cat_id";
                                $cat = 'cat_id';
                            } else if (isset($job_shop)) {
                                $qry = "SELECT DISTINCT job_category from marketplace_jobs where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by job_category";
                                $cat = 'job_category';
                            } else if (isset($business_shop)) {
                                $qry = "SELECT DISTINCT Category from marketplace_business where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by Category";
                                $cat = 'Category';
                            } else if (isset($destination_shop)) {
                                $qry = "SELECT DISTINCT category from marketplace_destination where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by category";
                                $cat = 'category';
                            } else if (isset($charity_shop)) {
                                $qry = "SELECT DISTINCT category from marketplace_charity where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by category";
                                $cat = 'category';
                            } else if (isset($events_shop)) {
                                $qry = "SELECT DISTINCT event_category from marketplace_events where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by event_category";
                                $cat = 'event_category';
                            } else if (isset($gigs_shop)) {
                                $qry = "SELECT DISTINCT category from marketplace_gigs where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by category";
                                $cat = 'category';
                            } else if (isset($invest_shop)) {
                                $qry = "SELECT DISTINCT category from marketplace_investment where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by category";
                                $cat = 'category';
                            } else if (isset($property_shop)) {
                                $qry = "SELECT DISTINCT cat_id from marketplace_properties where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by cat_id";
                                $cat = 'cat_id';
                            } else if (isset($talent_shop)) {
                                $qry = "SELECT DISTINCT type from marketplace_seeker where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by type";
                                $cat = 'type';
                            } else if (isset($profession_shop)) {
                                $qry = "SELECT DISTINCT category from marketplace_professionals where site_id = '$this_site_id' AND status = 1 AND verified = 1 order by category";
                                $cat = 'category';
                            }
                            // echo $qry;

                            $res = mysqli_query($conn, $qry);
                            if (!$res) {
                                errlog(mysqli_error($conn), $qry);
                            }
                            $cats = mysqli_fetch_all($res, MYSQLI_ASSOC);

                            foreach ($cats as $catr) {
                                if (trim($catr[$cat]) == '') {
                                    continue;
                                }
                                $selection = '';
                                if (trim($catr[$cat]) == $given_category) {
                                    $selection = 'selected';
                                }
                            ?>

                                <option onclick="redirectOn(this)" data-link="" value="<?php echo explode(".", $_SERVER['PHP_SELF'])[0] . "?cat_id=" . urlencode(base64_encode(htmlspecialchars($catr[$cat]))); ?>" <?php echo $selection ?>><?php echo htmlspecialchars($catr[$cat]) ?></option>

                            <?php
                            }
                            ?>



                        </select>
                    </div>
                    <input type="text" class="form-control head" name="search" id="search" <?php echo $disabled; ?> placeholder="Search in..." required />
                    <button class="btn btn-search" type="submit" <?php echo $disabled; ?>><i class="w-icon-search"></i>
                    </button>
                </div>
            </div>
            <div class="header-right ml-4">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
                    <a href="tel:#" class="w-icon-call"></a>
                    <div class="call-info d-lg-show">
                        <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                            <a href="mailto:#" class="text-capitalize">Live Chat</a> or :
                        </h4>
                        <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                    </div>
                </div>
                <a class="wishlist label-down link d-xs-show" href="wishlist">
                    <i class="w-icon-heart">
                        <?php
                        // $item_count = 0;
                        // if (isset($_SESSION['vendor_id'])) {
                        //     $vid = $_SESSION['vendor_id'];
                        //     $qry = "SELECT count(*) FROM cart_n_wishlist where cart_n_wishlist.vendor_id = '$vid' AND cart_n_wishlist.site_id = '$this_site_id' AND item_type = 'PRODUCT' AND save_type = 'cart' and quantity > 0 and save_status = '1' ";
                        //     $res = mysqli_query($conn, $qry);
                        //     if ($res) {
                        //         $res = mysqli_fetch_assoc($res);
                        //         if ($res) {
                        //             $item_count = $res['count(*)'];
                        //         }
                        //     } else {
                        //         errlog(mysqli_error($conn), $qry);
                        //     }
                        // } else if (isset($_COOKIE['guestCart'])) {
                        //     $data = unserialize($_COOKIE['guestCart']);
                        //     foreach ($data as $key => $val) {
                        //         $str = $data[$key];
                        //         $str = explode(',', $str);
                        //         foreach ($str as $item) {
                        //             if ($item == '')   continue;
                        //             $item_count++;
                        //         }
                        //     }
                        // }
                        ?>
                        <!-- <span class="cart-count" id="itemCount" data-value="0">0</span> -->
                    </i>
                    <span class="wishlist-label d-lg-show">Wishlist</span>
                </a>
                <a class="compare label-down link d-xs-show" href="compare">
                    <i class="w-icon-compare"></i>
                    <span class="compare-label d-lg-show">Compare</span>
                </a>
                <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                    <div class="cart-overlay"></div>
                    <a href="#" class="cart-toggle label-down link">
                        <i class="w-icon-cart">
                            <?php
                            $item_count = 0;
                            if (isset($_SESSION['vendor_id'])  ||  isset($_SESSION['user_id'])) {
                                $vid = -1;
                                if (isset($_SESSION['vendor_id']))
                                    $vid = $_SESSION['vendor_id'];
                                else if (isset($_SESSION['user_id']))
                                    $vid = $_SESSION['user_id'];


                                $qry = "SELECT count(*) FROM cart_n_wishlist where cart_n_wishlist.vendor_id = '$vid' AND cart_n_wishlist.site_id = '$this_site_id' AND save_type = 'cart' and quantity > 0 and save_status = '1' ";
                                $res = mysqli_query($conn, $qry);
                                if ($res) {
                                    $res = mysqli_fetch_assoc($res);
                                    if ($res) {
                                        $item_count = $res['count(*)'];
                                    }
                                } else {
                                    errlog(mysqli_error($conn), $qry);
                                }
                            } else if (isset($_COOKIE['guestCart'])) {
                                $data = unserialize($_COOKIE['guestCart']);
                                foreach ($data as $key => $val) {
                                    $str = $data[$key];
                                    if ($key == 5  ||  $key == 6) {
                                        foreach ($str as $prod => $vars) {
                                            $var_array = explode(',', $vars);
                                            foreach ($var_array as $item) {
                                                if ($item == '')   continue;
                                                $item_count++;
                                            }
                                        }
                                    } else {
                                        $str = explode(',', $str);
                                        foreach ($str as $item) {
                                            if ($item == '')   continue;
                                            $item_count++;
                                        }
                                    }
                                }
                            }
                            ?>
                            <span class="cart-count" id="itemCount" data-value="<?php echo $item_count; ?>"><?php echo $item_count; ?></span>
                        </i>
                        <span class="cart-label">Cart</span>
                    </a>


                    <!-- ------------------------------------------------------------------------------------------- -->



                    <div class="dropdown-box">
                        <div class="cart-header">
                            <span>Shopping Cart</span>
                            <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                        </div>

                        <div class="products" id="cartBlock" style="max-height: 70%; overflow-y: auto;">

                            <?php
                            $subtotal = 0;
                            $netWorth = 0;

                            if (isset($_SESSION['vendor_id'])  ||  isset($_SESSION['user_id'])) {

                                $vid = -1;
                                if (isset($_SESSION['vendor_id']))
                                    $vid = $_SESSION['vendor_id'];
                                else if (isset($_SESSION['user_id'])) {
                                    $vid = $_SESSION['user_id'];
                                }

                                $qry = "SELECT cart_n_wishlist.id as save_id, quantity, marketplace_products.*, product_variants.price as price, product_variants.id as var_id, marketplace_products.id as prod_id FROM cart_n_wishlist, product_variants, marketplace_products WHERE cart_n_wishlist.vendor_id = '$vid' AND cart_n_wishlist.site_id = '$this_site_id' AND marketplace_products.id = cart_n_wishlist.item_id AND cart_n_wishlist.variant_id = product_variants.id AND cart_n_wishlist.marketplace_id = '5' AND cart_n_wishlist.save_type = 'cart' and quantity > 0 and save_status = '1' ";
                                $res = mysqli_query($conn, $qry);
                                if (!$res) {
                                    errlog(mysqli_error($conn), $qry);
                                }
                                if ($res) {
                                    $prods = mysqli_fetch_all($res, MYSQLI_ASSOC);
                                    foreach ($prods as $prod_det) {
                                        $main_image = 'x';
                                        $qry = "SELECT * from product_images where product_id = '" . $prod_det['id'] . "' and main = '1' and type = 'IMAGE' and marketplace_id = '5' ";
                                        $res = mysqli_query($conn, $qry);
                                        if ($res) {
                                            $main_image = mysqli_fetch_assoc($res);
                                            if ($main_image) {
                                                $main_image = $main_image['image_url'];
                                            }
                                        }

                                        $dp = '';

                                        $qry = "SELECT * from product_images where product_id = '" . $prod_det['prod_id'] . "' and main = '0' AND variant_id = '" . $prod_det['var_id'] . "' and type = 'IMAGE' and marketplace_id = '5' ";
                                        $res = mysqli_query($conn, $qry);
                                        if (!$res) {
                                            errlog(mysqli_error($conn), $qry);
                                        }
                                        if ($res) {
                                            $res = mysqli_fetch_assoc($res);
                                            // print_r($res) ;
                                            if (isset($res['id'])) {
                                                $dp = $res['image_url'];
                                            }
                                        }

                                        if ($dp != '') {
                                            $main_image = $dp;
                                        }

                            ?>

                                        <div class="product product-cart">
                                            <div class="product-detail">
                                                <a href="product_detail?pid=<?php echo urlencode(base64_encode($prod_det['prod_id'])) . "&var=" . urlencode(base64_encode($prod_det['var_id'])) ?>" class="product-name">
                                                    <?php echo substr($prod_det['product_title'], 0, 10) . "<br>" . substr($prod_det['product_title'], 10, 10) . "<br>" . substr($prod_det['product_title'], 20, 10); ?>
                                                    <div class="price-box">
                                                        <span class="product-quantity" id="quantityFor<?php echo $prod_det['id'] ?>" data-value="<?php echo $prod_det['quantity'] ?>">
                                                            <?php echo $prod_det['quantity'] ?>
                                                        </span>
                                                        <span class="product-price">
                                                            <?php

                                                            $qry = "SELECT * from discounts where site_id = '$this_site_id' AND variant_id = '" . $prod_det['var_id'] . "' AND product_id = '" . $prod_det['prod_id'] . "' and discount_for = 'GENERAL' and marketplace_id = '5' ";
                                                            $res = mysqli_query($conn, $qry);
                                                            $discount = 0;
                                                            if ($res) {
                                                                $dis = mysqli_fetch_all($res, MYSQLI_ASSOC);
                                                                foreach ($dis as $d) {
                                                                    $discount += $d['discount_percent'];
                                                                }
                                                            }

                                                            $discount = ($prod_det['price'] * $discount) / 100;

                                                            echo "₹" . ($prod_det['quantity'] * $prod_det['price']);
                                                            $subtotal += ($prod_det['quantity'] * $prod_det['price']) - ($prod_det['quantity'] * $discount);
                                                            ?>
                                                        </span>
                                                    </div>
                                            </div>
                                            <figure class="product-media">
                                                <a href="product_detail?pid=<?php echo urlencode(base64_encode($prod_det['prod_id'])) . "&var=" . urlencode(base64_encode($prod_det['var_id'])) ?>">
                                                    <img src="<?php echo $main_image; ?>" alt="product" height="84" width="94" />
                                                </a>
                                            </figure>
                                            <button class="btn btn-link btn-close" aria-label="button" data-market="5" onclick="removeItemFromCart(this)" data-var="<?php echo $prod_det['var_id'] ?>" data-prod="<?php echo $prod_det['prod_id'] ?>" data-price="<?php echo ($prod_det['quantity'] * $prod_det['price']) - ($prod_det['quantity'] * $discount); ?>" data-discount="<?php echo $discount; ?>">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>

                                    <?php
                                    }
                                }








                                $qry = "SELECT cart_n_wishlist.id as save_id, quantity, marketplace_services.* FROM cart_n_wishlist LEFT JOIN marketplace_services ON cart_n_wishlist.item_id = marketplace_services.id WHERE cart_n_wishlist.vendor_id = '$vid' AND cart_n_wishlist.site_id = '$this_site_id' AND cart_n_wishlist.marketplace_id = '15' AND cart_n_wishlist.save_type = 'cart' and quantity > 0 and save_status = '1' ";
                                $res = mysqli_query($conn, $qry);
                                if (!$res) {
                                    errlog(mysqli_error($conn), $qry);
                                }
                                if ($res) {
                                    $prods = mysqli_fetch_all($res, MYSQLI_ASSOC);
                                    foreach ($prods as $prod_det) {
                                        $main_image = 'x';

                                        $qry = "SELECT * from product_images where product_id = '" . $prod_det['id'] . "' and main = '1' and type = 'IMAGE' and marketplace_id = '15' ";
                                        $res = mysqli_query($conn, $qry);
                                        if ($res) {
                                            $main_image = mysqli_fetch_assoc($res);
                                            if ($main_image) {
                                                $main_image = $main_image['image_url'];
                                            }
                                        }

                                    ?>

                                        <div class="product product-cart">
                                            <div class="product-detail">
                                                <a href="servicedetail?id=<?php echo urlencode(base64_encode($prod_det['id'])) ?>" class="product-name">
                                                    <?php echo substr($prod_det['service_name'], 0, 10) . "<br>" . substr($prod_det['service_name'], 10, 10) . "<br>" . substr($prod_det['service_name'], 20, 10); ?>
                                                    <div class="price-box">
                                                        <span class="product-quantity" id="quantityFor<?php echo $prod_det['id'] ?>" data-value="<?php echo $prod_det['quantity'] ?>">
                                                            <?php echo $prod_det['quantity'] ?>
                                                        </span>
                                                        <span class="product-price">
                                                            <?php

                                                            $qry = "SELECT * from discounts where product_id = '" . $prod_det['id'] . "' and discount_for = 'GENERAL' and marketplace_id = '15' ";
                                                            $res = mysqli_query($conn, $qry);
                                                            $discount = 0;
                                                            if ($res) {
                                                                $dis = mysqli_fetch_all($res, MYSQLI_ASSOC);
                                                                foreach ($dis as $d) {
                                                                    $discount += $d['discount_percent'];
                                                                }
                                                            }

                                                            $discount = ($prod_det['price'] * $discount) / 100;

                                                            echo "₹" . ($prod_det['quantity'] * $prod_det['price']);
                                                            $subtotal += ($prod_det['quantity'] * $prod_det['price']) - ($prod_det['quantity'] * $discount);
                                                            ?>
                                                        </span>
                                                    </div>
                                            </div>
                                            <figure class="product-media">
                                                <a href="servicedetail?id=<?php echo urlencode(base64_encode($prod_det['id'])) ?>">
                                                    <img src="<?php echo $main_image; ?>" alt="product" height="84" width="94" />
                                                </a>
                                            </figure>
                                            <button class="btn btn-link btn-close" aria-label="button" data-market="15" onclick="removeItemFromCart(this)" data-var="" data-prod="<?php echo $prod_det['id'] ?>" data-price="<?php echo ($prod_det['quantity'] * $prod_det['price']) - ($prod_det['quantity'] * $discount); ?>" data-discount="<?php echo $discount; ?>">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>

                                        <?php
                                    }
                                }
                            } else if (isset($_COOKIE['guestCart'])) {
                                $data = unserialize($_COOKIE['guestCart']);

                                foreach ($data as $key => $val) {
                                    $str = $data[$key];

                                    if ($key == 5  || $key == 6) {

                                        $quantity_dets = unserialize($_COOKIE['guestCartQuantity']);
                                        $prod_ids = $data[$key];
                                        $quantity_dets = $quantity_dets[$key];

                                        foreach ($prod_ids as $prod_keys => $ids) {
                                            if ($ids == '') {
                                                continue;
                                            }


                                            foreach (explode(',', $ids) as $var_ids) {

                                                if ($var_ids == '') {
                                                    continue;
                                                }

                                                $qry = "SELECT marketplace_products.*, product_variants.price as price, product_variants.id as var_id, marketplace_products.id as prod_id FROM product_variants, marketplace_products WHERE marketplace_products.id = $prod_keys AND product_variants.id = $var_ids ";
                                                $res = mysqli_query($conn, $qry);
                                                if (!$res) {
                                                    errlog(mysqli_error($conn), $qry);
                                                }

                                                if ($res) {
                                                    $prods = mysqli_fetch_all($res, MYSQLI_ASSOC);
                                                    foreach ($prods as $prod_det) {

                                                        $prod_det['quantity'] = $quantity_dets[$prod_keys][$var_ids];
                                                        $main_image = 'x';
                                                        $qry = "SELECT * from product_images where product_id = '" . $prod_det['id'] . "' and main = '1' and type = 'IMAGE' and marketplace_id = '5' ";
                                                        $res = mysqli_query($conn, $qry);
                                                        if ($res) {
                                                            $main_image = mysqli_fetch_assoc($res);
                                                            if ($main_image) {
                                                                $main_image = $main_image['image_url'];
                                                            }
                                                        }

                                                        $dp = '';

                                                        $qry = "SELECT * from product_images where product_id = '" . $prod_det['prod_id'] . "' and main = '0' AND variant_id = '" . $prod_det['var_id'] . "' and type = 'IMAGE' and marketplace_id = '5' ";
                                                        $res = mysqli_query($conn, $qry);
                                                        if (!$res) {
                                                            errlog(mysqli_error($conn), $qry);
                                                        }
                                                        if ($res) {
                                                            $res = mysqli_fetch_assoc($res);
                                                            // print_r($res) ;
                                                            if (isset($res['id'])) {
                                                                $dp = $res['image_url'];
                                                            }
                                                        }

                                                        if ($dp != '') {
                                                            $main_image = $dp;
                                                        }

                                        ?>

                                                        <div class="product product-cart">
                                                            <div class="product-detail">
                                                                <a href="product_detail?pid=<?php echo urlencode(base64_encode($prod_det['prod_id'])) . "&var=" . urlencode(base64_encode($prod_det['var_id'])) ?>" class="product-name">
                                                                    <?php echo substr($prod_det['product_title'], 0, 10) . "<br>" . substr($prod_det['product_title'], 10, 10) . "<br>" . substr($prod_det['product_title'], 20, 10); ?>
                                                                    <div class="price-box">
                                                                        <span class="product-quantity" id="quantityFor<?php echo $prod_det['id'] ?>" data-value="<?php echo $prod_det['quantity'] ?>">
                                                                            <?php echo $prod_det['quantity'] ?>
                                                                        </span>
                                                                        <span class="product-price">
                                                                            <?php

                                                                            $qry = "SELECT * from discounts where site_id = '$this_site_id' AND variant_id = '" . $prod_det['var_id'] . "' AND product_id = '" . $prod_det['prod_id'] . "' and discount_for = 'GENERAL' and marketplace_id = '5' ";
                                                                            $res = mysqli_query($conn, $qry);
                                                                            $discount = 0;
                                                                            if ($res) {
                                                                                $dis = mysqli_fetch_all($res, MYSQLI_ASSOC);
                                                                                foreach ($dis as $d) {
                                                                                    $discount += $d['discount_percent'];
                                                                                }
                                                                            }

                                                                            $discount = ($prod_det['price'] * $discount) / 100;

                                                                            echo "₹" . ($prod_det['quantity'] * $prod_det['price']);
                                                                            $subtotal += ($prod_det['quantity'] * $prod_det['price']) - ($prod_det['quantity'] * $discount);
                                                                            ?>
                                                                        </span>
                                                                    </div>
                                                            </div>
                                                            <figure class="product-media">
                                                                <a href="product_detail?pid=<?php echo urlencode(base64_encode($prod_det['prod_id'])) . "&var=" . urlencode(base64_encode($prod_det['var_id'])) ?>">
                                                                    <img src="<?php echo $main_image; ?>" alt="product" height="84" width="94" />
                                                                </a>
                                                            </figure>
                                                            <button class="btn btn-link btn-close" aria-label="button" data-market="5" onclick="removeItemFromCart(this)" data-var="<?php echo $prod_det['var_id'] ?>" data-prod="<?php echo $prod_det['prod_id'] ?>" data-price="<?php echo ($prod_det['quantity'] * $prod_det['price']) - ($prod_det['quantity'] * $discount); ?>" data-discount="<?php echo $discount; ?>">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>

                            <?php
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            ?>

                        </div>

                        <div class="cart-total">
                            <label>Subtotal:</label>
                            <span class="price">
                                <?php
                                if ($netWorth > $subtotal) {
                                    echo "<strike style='color: grey;' id='netWorth' data-val='" . $netWorth . "'>₹" . $netWorth . "</strike>  " . "&nbsp<span id='subTotal' data-val='" . $subtotal . "'>" . $subtotal . "</span>";
                                } else {
                                    echo "₹<span id='subTotal' data-val='" . $subtotal . "'>" . $subtotal . "</span>";
                                }
                                ?>
                            </span>
                        </div>

                        <div class="cart-action">
                            <a href="cart" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                            <a href="checkout" class="btn btn-primary  btn-rounded">Checkout</a>
                        </div>
                    </div>



                    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->


                    <!-- End of Dropdown Box -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of Header Middle -->

    <div class="header-bottom sticky-content fix-top sticky-header">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left">
                    <div class="dropdown category-dropdown has-border" data-visible="true">
                        <a href="#" class="category-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static" title="Browse Categories">
                            <i class="w-icon-category"></i>
                            <span>Browse Categories</span>
                        </a>

                        <div class="dropdown-box">
                            <ul class="menu vertical-menu category-menu">
                                <li>
                                    <a href="shop-fullwidth-banner.php">
                                        <i class="w-icon-tshirt2"></i>Fashion
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">Women</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.php">New Arrivals</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Best Sellers</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Trending</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Clothing</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Shoes</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Bags</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Accessories</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Jewlery &
                                                        Watches</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Sale</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Men</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.php">New Arrivals</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Best Sellers</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Trending</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Clothing</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Shoes</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Bags</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Accessories</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Jewlery &
                                                        Watches</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="banner-fixed menu-banner menu-banner2">
                                                <figure>
                                                    <img src="../assets/images/menu/banner-2.jpg" alt="Menu Banner" width="235" height="347" />
                                                </figure>
                                                <div class="banner-content">
                                                    <div class="banner-price-info mb-1 ls-normal">Get up to
                                                        <strong class="text-primary text-uppercase">20%Off</strong>
                                                    </div>
                                                    <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                    <a href="shop-banner-sidebar.php" class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                        Shop Now<i class="w-icon-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.php">
                                        <i class="w-icon-home"></i>Home & Garden
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">Bedroom</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.php">Beds, Frames &
                                                        Bases</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Dressers</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Nightstands</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Kid's Beds &
                                                        Headboards</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Armoires</a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">Living Room</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.php">Coffee Tables</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Chairs</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Tables</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Futons & Sofa
                                                        Beds</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Cabinets &
                                                        Chests</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Office</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.php">Office Chairs</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Desks</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Bookcases</a></li>
                                                <li><a href="shop-fullwidth-banner.php">File Cabinets</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Breakroom
                                                        Tables</a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">Kitchen & Dining</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.php">Dining Sets</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Kitchen Storage
                                                        Cabinets</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Bashers Racks</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Dining Chairs</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Dining Room
                                                        Tables</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Bar Stools</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="menu-banner banner-fixed menu-banner3">
                                                <figure>
                                                    <img src="../assets/images/menu/banner-3.jpg" alt="Menu Banner" width="235" height="461" />
                                                </figure>
                                                <div class="banner-content">
                                                    <h4 class="banner-subtitle font-weight-normal text-white mb-1">
                                                        Restroom</h4>
                                                    <h3 class="banner-title font-weight-bolder text-white ls-normal">
                                                        Furniture Sale</h3>
                                                    <div class="banner-price-info text-white font-weight-normal ls-25">
                                                        Up to <span class="text-secondary text-uppercase font-weight-bold">25%
                                                            Off</span></div>
                                                    <a href="shop-banner-sidebar.php" class="btn btn-white btn-link btn-sm btn-slide-right btn-icon-right">
                                                        Shop Now<i class="w-icon-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.php">
                                        <i class="w-icon-electronics"></i>Electronics
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">Laptops &amp; Computers</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.php">Desktop
                                                        Computers</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Monitors</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Laptops</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Hard Drives &amp;
                                                        Storage</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Computer
                                                        Accessories</a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">TV &amp; Video</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.php">TVs</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Home Audio
                                                        Speakers</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Projectors</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Media Streaming
                                                        Devices</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Digital Cameras</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.php">Digital SLR
                                                        Cameras</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Sports & Action
                                                        Cameras</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Camera Lenses</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Photo Printer</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Digital Memory
                                                        Cards</a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">Cell Phones</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.php">Carrier Phones</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Unlocked Phones</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.php">Phone & Cellphone
                                                        Cases</a></li>
                                                <li><a href="shop-fullwidth-banner.php">Cellphone
                                                        Chargers</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="menu-banner banner-fixed menu-banner4">
                                                <figure>
                                                    <img src="../assets/images/menu/banner-4.jpg" alt="Menu Banner" width="235" height="433" />
                                                </figure>
                                                <div class="banner-content">
                                                    <h4 class="banner-subtitle font-weight-normal">Deals Of The
                                                        Week</h4>
                                                    <h3 class="banner-title text-white">Save On Smart EarPhone
                                                    </h3>
                                                    <div class="banner-price-info text-secondary font-weight-bolder text-uppercase text-secondary">
                                                        20% Off</div>
                                                    <a href="shop-banner-sidebar.php" class="btn btn-white btn-outline btn-sm btn-rounded">Shop
                                                        Now</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.php">
                                        <i class="w-icon-furniture"></i>Furniture
                                    </a>
                                    <ul class="megamenu type2">
                                        <li class="row">
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">Furniture</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.php">Sofas & Couches</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.php">Armchairs</a></li>
                                                    <li><a href="shop-fullwidth-banner.php">Bed Frames</a></li>
                                                    <li><a href="shop-fullwidth-banner.php">Beside Tables</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.php">Dressing Tables</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">Lighting</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.php">Light Bulbs</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.php">Lamps</a></li>
                                                    <li><a href="shop-fullwidth-banner.php">Celling Lights</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.php">Wall Lights</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.php">Bathroom
                                                            Lighting</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">Home Accessories</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.php">Decorative
                                                            Accessories</a></li>
                                                    <li><a href="shop-fullwidth-banner.php">Candals &
                                                            Holders</a></li>
                                                    <li><a href="shop-fullwidth-banner.php">Home Fragrance</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.php">Mirrors</a></li>
                                                    <li><a href="shop-fullwidth-banner.php">Clocks</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">Garden & Outdoors</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.php">Garden
                                                            Furniture</a></li>
                                                    <li><a href="shop-fullwidth-banner.php">Lawn Mowers</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.php">Pressure
                                                            Washers</a></li>
                                                    <li><a href="shop-fullwidth-banner.php">All Garden
                                                            Tools</a></li>
                                                    <li><a href="shop-fullwidth-banner.php">Outdoor Dining</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-6">
                                                <div class="banner banner-fixed menu-banner5 br-xs">
                                                    <figure>
                                                        <img src="../assets/images/menu/banner-5.jpg" alt="Banner" width="410" height="123" style="background-color: #D2D2D2;" />
                                                    </figure>
                                                    <div class="banner-content text-right y-50">
                                                        <h4 class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                            New Arrivals</h4>
                                                        <h3 class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                            Amazing Sofa</h3>
                                                        <div class="banner-price-info font-weight-normal ls-normal">
                                                            Starting at <strong>$125.00</strong></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="banner banner-fixed menu-banner5 br-xs">
                                                    <figure>
                                                        <img src="../assets/images/menu/banner-6.jpg" alt="Banner" width="410" height="123" style="background-color: #9F9888;" />
                                                    </figure>
                                                    <div class="banner-content y-50">
                                                        <h4 class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                            Best Seller</h4>
                                                        <h3 class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                            Chair &amp; Lamp</h3>
                                                        <div class="banner-price-info font-weight-normal ls-normal text-white">
                                                            From <strong>$165.00</strong></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.php">
                                        <i class="w-icon-heartbeat"></i>Healthy & Beauty
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.php">
                                        <i class="w-icon-gift"></i>Gift Ideas
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.php">
                                        <i class="w-icon-gamepad"></i>Toy & Games
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.php">
                                        <i class="w-icon-ice-cream"></i>Cooking
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.php">
                                        <i class="w-icon-ios"></i>Smart Phones
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.php">
                                        <i class="w-icon-camera"></i>Cameras & Photo
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.php">
                                        <i class="w-icon-ruby"></i>Accessories
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-banner-sidebar.php" class="font-weight-bold text-primary text-uppercase ls-25">
                                        View All Categories<i class="w-icon-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <nav class="main-nav">
                        <ul class="menu active-underline">
                            <li>
                                <a href="demo1.php">Home</a>
                            </li>
                            <li class="active">
                                <a href="shop-banner-sidebar.php">Shop</a>

                                <!-- Start of Megamenu -->
                                <ul class="megamenu">
                                    <li>
                                        <h4 class="menu-title">Shop Pages</h4>
                                        <ul>
                                            <li><a href="shop-banner-sidebar.php">Banner With Sidebar</a></li>
                                            <li><a href="shop-boxed-banner.php">Boxed Banner</a></li>
                                            <li><a href="shop-fullwidth-banner.php">Full Width Banner</a></li>
                                            <li><a href="shop-horizontal-filter.php">Horizontal Filter<span class="tip tip-hot">Hot</span></a></li>
                                            <li><a href="shop-off-canvas.php">Off Canvas Sidebar<span class="tip tip-new">New</span></a></li>
                                            <li><a href="shop-infinite-scroll.php">Infinite Ajax Scroll</a>
                                            </li>
                                            <li><a href="shop-right-sidebar.php">Right Sidebar</a></li>
                                            <li><a href="shop-both-sidebar.php">Both Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4 class="menu-title">Shop Layouts</h4>
                                        <ul>
                                            <li><a href="shop-grid-3cols.php">3 Columns Mode</a></li>
                                            <li><a href="shop-grid-4cols.php">4 Columns Mode</a></li>
                                            <li><a href="shop-grid-5cols.php">5 Columns Mode</a></li>
                                            <li><a href="shop-grid-6cols.php">6 Columns Mode</a></li>
                                            <li><a href="shop-grid-7cols.php">7 Columns Mode</a></li>
                                            <li><a href="shop-grid-8cols.php">8 Columns Mode</a></li>
                                            <li><a href="shop-list.php">List Mode</a></li>
                                            <li><a href="shop-list-sidebar.php">List Mode With Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4 class="menu-title">Product Pages</h4>
                                        <ul>
                                            <li><a href="product-variable.php">Variable Product</a></li>
                                            <li><a href="product-featured.php">Featured &amp; Sale</a></li>
                                            <li><a href="product-accordion.php">Data In Accordion</a></li>
                                            <li><a href="product-section.php">Data In Sections</a></li>
                                            <li><a href="product-swatch.php">Image Swatch</a></li>
                                            <li><a href="product-extended.php">Extended Info</a>
                                            </li>
                                            <li><a href="product-without-sidebar.php">Without Sidebar</a></li>
                                            <li><a href="product-video.php">360<sup>o</sup> &amp; Video<span class="tip tip-new">New</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4 class="menu-title">Product Layouts</h4>
                                        <ul>
                                            <li><a href="product-default.php">Default<span class="tip tip-hot">Hot</span></a></li>
                                            <li><a href="product-vertical.php">Vertical Thumbs</a></li>
                                            <li><a href="product-grid.php">Grid Images</a></li>
                                            <li><a href="product-masonry.php">Masonry</a></li>
                                            <li><a href="product-gallery.php">Gallery</a></li>
                                            <li><a href="product-sticky-info.php">Sticky Info</a></li>
                                            <li><a href="product-sticky-thumb.php">Sticky Thumbs</a></li>
                                            <li><a href="product-sticky-both.php">Sticky Both</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- End of Megamenu -->
                            </li>
                            <li>
                                <a href="vendor-dokan-store.php">Vendor</a>
                                <ul>
                                    <li>
                                        <a href="vendor-dokan-store-list.php">Store Listing</a>
                                        <ul>
                                            <li><a href="vendor-dokan-store-list.php">Store listing 1</a></li>
                                            <li><a href="vendor-wcfm-store-list.php">Store listing 2</a></li>
                                            <li><a href="vendor-wcmp-store-list.php">Store listing 3</a></li>
                                            <li><a href="vendor-wc-store-list.php">Store listing 4</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="vendor-dokan-store.php">Vendor Store</a>
                                        <ul>
                                            <li><a href="vendor-dokan-store.php">Vendor Store 1</a></li>
                                            <li><a href="vendor-wcfm-store-product-grid.php">Vendor Store 2</a>
                                            </li>
                                            <li><a href="vendor-wcmp-store-product-grid.php">Vendor Store 3</a>
                                            </li>
                                            <li><a href="vendor-wc-store-product-grid.php">Vendor Store 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                                <ul>
                                    <li><a href="blog.php">Classic</a></li>
                                    <li><a href="blog-listing.php">Listing</a></li>
                                    <li>
                                        <a href="blog-grid-3cols.php">Grid</a>
                                        <ul>
                                            <li><a href="blog-grid-2cols.php">Grid 2 columns</a></li>
                                            <li><a href="blog-grid-3cols.php">Grid 3 columns</a></li>
                                            <li><a href="blog-grid-4cols.php">Grid 4 columns</a></li>
                                            <li><a href="blog-grid-sidebar.php">Grid sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog-masonry-3cols.php">Masonry</a>
                                        <ul>
                                            <li><a href="blog-masonry-2cols.php">Masonry 2 columns</a></li>
                                            <li><a href="blog-masonry-3cols.php">Masonry 3 columns</a></li>
                                            <li><a href="blog-masonry-4cols.php">Masonry 4 columns</a></li>
                                            <li><a href="blog-masonry-sidebar.php">Masonry sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog-mask-grid.php">Mask</a>
                                        <ul>
                                            <li><a href="blog-mask-grid.php">Blog mask grid</a></li>
                                            <li><a href="blog-mask-masonry.php">Blog mask masonry</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="post-single.php">Single Post</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about-us.php">Pages</a>
                                <ul>

                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="become-a-vendor.php">Become A Vendor</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                    <li><a href="faq.php">FAQs</a></li>
                                    <li><a href="error-404.php">Error 404</a></li>
                                    <li><a href="coming-soon.php">Coming Soon</a></li>
                                    <li><a href="wishlist.php">Wishlist</a></li>
                                    <li><a href="cart">Cart</a></li>
                                    <li><a href="checkout">Checkout</a></li>
                                    <li><a href="my-account.php">My Account</a></li>
                                    <li><a href="compare">Compare</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements.php">Elements</a>
                                <ul>
                                    <li><a href="element-accordions.php">Accordions</a></li>
                                    <li><a href="element-alerts.php">Alert &amp; Notification</a></li>
                                    <li><a href="element-blog-posts.php">Blog Posts</a></li>
                                    <li><a href="element-buttons.php">Buttons</a></li>
                                    <li><a href="element-cta.php">Call to Action</a></li>
                                    <li><a href="element-icons.php">Icons</a></li>
                                    <li><a href="element-icon-boxes.php">Icon Boxes</a></li>
                                    <li><a href="element-instagrams.php">Instagrams</a></li>
                                    <li><a href="element-categories.php">Product Category</a></li>
                                    <li><a href="element-products.php">Products</a></li>
                                    <li><a href="element-tabs.php">Tabs</a></li>
                                    <li><a href="element-testimonials.php">Testimonials</a></li>
                                    <li><a href="element-titles.php">Titles</a></li>
                                    <li><a href="element-typography.php">Typography</a></li>
                                    <li><a href="element-vendors.php">Vendors</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Track Order</a>
                    <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                </div>
            </div>
        </div>
    </div>
</header>



<script>
    $(document).ready(function() {
        $.ajax({
            url: 'product_shop_helper',
            method: 'POST',
            data: {
                destroyCookies: true,
            }
        })
    })

    function addToWishlist(th) {
        // console.log(id);

        var id = $(th).data("prod");
        var v = '';
        if ($(th).data("var")) {
            v = $(th).data("var");
        }

        $.ajax({
            url: "product_shop_helper",
            method: "POST",
            data: {
                addToWishlist: id,
                variant: v,
            },
            success: function(data) {
                // console.log(data);
                if (data == '1') {
                    Swal.fire("Wishlist Updated", '', 'success');
                } else {

                    Swal.fire("Error", '', 'error');
                }
            },
            error: function() {
                alert("404");
            }
        })

    }


    function addToCart(th) {
        // console.log(id);
        var id = $(th).data("prod");
        var v = '';
        if ($(th).data("var")) {
            v = $(th).data("var");
        }
        var price = parseFloat($(th).data("price"));
        var discount = parseFloat($(th).data("discount"));

        $.ajax({
            url: "product_shop_helper",
            method: "POST",
            data: {
                addToCart: id,
                variant: v,
            },
            success: function(data) {
                console.log(data);
                // console.log(id);
                if (data.trim() == '2') {
                    $("#quantityFor" + id).html(parseInt($("#quantityFor" + id).data("value")) + 1);
                    $("#quantityFor" + id).data("value", parseInt($("#quantityFor" + id).data("value")) + 1);
                    Swal.fire("Quantity Increased", '', 'success');

                } else if (data.trim() != '0') {
                    Swal.fire("Item Added", '', 'success');
                    var itemCount = parseInt($("#itemCount").data("value"));
                    $("#itemCount").html(itemCount + 1);
                    $("#itemCount").data("value", itemCount + 1);
                    var subTotal = parseFloat($("#subTotal").data("val")) + (price - discount);
                    $("#subTotal").data("val", subTotal);
                    $("#subTotal").html(subTotal);
                    var netWorth = parseFloat($("#netWorth").data("val"));
                    if (!netWorth) {
                        netWorth = subTotal;
                    }
                    $("#netWorth").data("val", netWorth);
                    $("#netWorth").html(netWorth);
                    $("#cartBlock").append(data);
                } else {
                    console.log(data);
                    alert("Something went wrong");
                }
            }
        })

    }


    function removeItemFromCart(rem) {
        var id = $(rem).data("prod");
        var price = parseFloat($(rem).data("price"));
        var discount = parseFloat($(rem).data("discount"));
        var subTotal = parseFloat($("#subTotal").data("val"));
        var netWorth = parseFloat($("#netWorth").data("val"));
        var marketplace_id = $(rem).data("market");
        var variant = '';
        if ($(rem).data("var")) {
            variant = $(rem).data("var");
        }

        if (!netWorth) {
            netWorth = subTotal;
        }
        $.ajax({
            url: "product_shop_helper",
            method: "POST",
            data: {
                removeItemFromCart: id,
                marketplace_id: marketplace_id,
                variant: variant,
            },
            success: function(data) {
                if (data.trim() == '1') {
                    $(rem).parent().remove();
                    subTotal -= price;
                    netWorth -= (price + discount);
                    $("#subTotal").html(subTotal);
                    $("#netWorth").html(netWorth);

                    $("#subTotal").data("val", subTotal);
                    $("#netWorth").data("val", netWorth);
                    var itemCount = parseInt($("#itemCount").data("value"));
                    itemCount--;
                    if (itemCount < 0) {
                        itemCount = 0;
                    }
                    $("#itemCount").data("value", itemCount);
                    $("#itemCount").html(itemCount);
                    Swal.fire({
                        title: "Item removed successfully",
                        timer: 5000,
                        icon: 'success',
                        showConfirmButton: true
                    })
                } else if (data.trim() == '0') {
                    Swal.fire({
                        title: "Can't remove item from cart",
                        timer: 5000,
                        icon: 'error',
                        showConfirmButton: true
                    })
                } else {
                    alert("Something went wrong");
                    console.log(data);
                }
            },
            error: function() {
                alert("Path Error");
            }
        })
    }
</script>