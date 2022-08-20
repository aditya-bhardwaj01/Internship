<?php
session_start();
require_once "../config/connection.php";
$profession_shop = true;
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "site_head.php" ?>
<style>
    .customBtn {
        display: inline-block;
        margin-right: 2vw;
        background: transparent;
        color: white;
        border: 1px dashed white;
    }

    .customBtn:hover {
        border: 1px solid white;
    }

    #formLoader {
        display: flex;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
        background: rgba(0, 0, 0, 0.75) no-repeat center center;
        z-index: 10000;
    }
</style>

<body>

    <div class="page-wrapper">
			<?php
        // require "shop_header.php";
        ?>

        <main class="main">
            <!-- Start of Breadcrumb -->
           <div class="page-content mb-8">
                <div class="container">
                    <div class="row gutter-lg">
                        <aside class="sidebar left-sidebar vendor-sidebar sticky-sidebar-wrapper sidebar-fixed">
                            <!-- Start of Sidebar Overlay -->
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                            <a href="#" class="sidebar-toggle"><i class="w-icon-angle-right"></i></a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar">

                                    <div class="widget widget-collapsible widget-categories">
                                        <h3 class="widget-title"><span>All Categories</span></h3>
                                        <ul class="shipping-methods mb-2">
                                            <?php
                                            $cat_sql = "SELECT distinct(a.sub_cat_id) from marketplace_professionals a INNER JOIN vendor_type b WHERE a.professional_type = b.id AND b.parent_type = 2";
                                            $cat_row = $conn->query($cat_sql);
                                            if (!$cat_row) {
                                                errlog(mysqli_error($conn), $cat_sql);
                                            } else {
                                                while ($cat_res = $cat_row->fetch_assoc()) {
                                                    if (!empty($cat_res["sub_cat_id"])) {
                                            ?>

                                                        <li>
                                                            <div class="custom-radio">
                                                                <input type="checkbox" id="<?php echo ($cat_res["sub_cat_id"]); ?>" value="<?php echo (htmlspecialchars($cat_res["sub_cat_id"])); ?>" class="common sub_cat_id custom-control-input" name="sub_cat_id">
                                                                <label for="<?php echo ($cat_res["sub_cat_id"]); ?>" class="custom-control-label color-dark"><?php echo (htmlspecialchars($cat_res["sub_cat_id"])); ?></label>
                                                            </div>
                                                        </li>
                                            <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>

                                    <div class="widget widget-collapsible widget-categories">
                                        <h3 class="widget-title"><span>Professional Type</span></h3>
                                        <ul class="shipping-methods mb-2">
                                            <?php
                                            $pos_sql = "SELECT b.title from marketplace_professionals a INNER JOIN vendor_type b 
                                            WHERE a.professional_type = b.id AND b.parent_type = 2";
                                            $pos_row = $conn->query($pos_sql);
                                            if (!$pos_row) {
                                                errlog(mysqli_error($conn), $pos_sql);
                                            } else {
                                                while ($pos_res = $pos_row->fetch_assoc()) {
                                                    if (!empty($pos_res["title"])) {
                                            ?>

                                                        <li>
                                                            <div class="custom-radio">
                                                                <input type="checkbox" id="<?php echo ($pos_res["title"]); ?>" value="<?php echo (htmlspecialchars($pos_res["title"])); ?>" class="common type custom-control-input" name="position">
                                                                <label for="<?php echo ($pos_res["title"]); ?>" class="custom-control-label color-dark"><?php echo (htmlspecialchars($pos_res["title"])); ?></label>
                                                            </div>
                                                        </li>
                                            <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><span><i class="w-icon-truck"></i>Location</span>
                                        </h3>
                                        <ul class="shipping-methods mb-2">
                                            <?php
                                            $loc_sql = "SELECT distinct(c.city) from marketplace_professionals a INNER JOIN 
                                                    vendor_type b ON a.professional_type = b.id AND b.parent_type = 2 INNER JOIN vendor c
                                                    ON b.id = c.id";
                                            $loc_row = $conn->query($loc_sql);
                                            if (!$loc_row) {
                                                errlog(mysqli_error($conn), $loc_sql);
                                            } else {
                                                while ($loc_res = $loc_row->fetch_assoc()) {
                                                    if (!empty($loc_res["city"])) {
                                            ?>
                                                        <li>
                                                            <div class="custom-radio">
                                                                <input type="checkbox" id="<?php echo ($loc_res["city"]); ?>" value="<?php echo (htmlspecialchars($loc_res["city"])); ?>" class="common location custom-control-input" name="location">
                                                                <label for="<?php echo ($loc_res["city"]); ?>" class="custom-control-label color-dark"><?php echo (htmlspecialchars($loc_res["city"])); ?></label>
                                                            </div>
                                                        </li>
                                            <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>

                                    



                                    <!-- End of Widget -->

                                    <div class="widget widget-collapsible widget-categories">
                                        <h3 class="widget-title"><span>Skills</span></h3>
                                        <ul class="shipping-methods mb-2">
                                            <?php
                                            $pos_sql = "SELECT distinct(a.prof_skills) from marketplace_professionals a
                                            INNER JOIN vendor_type b WHERE a.professional_type = b.id AND b.parent_type = 2";
                                            $pos_row = $conn->query($pos_sql);
                                            if (!$pos_row) {
                                                errlog(mysqli_error($conn), $pos_sql);
                                            } else {
                                                $ski = array();
                                                $str = '';
                                                while ($pos_res = $pos_row->fetch_assoc()) {
                                                    if (!empty($pos_res["prof_skills"])) {
                                                        $str .= $pos_res["prof_skills"];
                                                        //array_push($ski, explode(",", $pos_res["prof_skills"]));
                                                        //$ski .= explode(",", $pos_res["prof_skills"]);
                                                    }
                                                    $str .= ',';
                                                }

                                                $str_array = explode(",", $str);
                                                foreach ($str_array as $str_ele) {
                                                    array_push($ski, $str_ele);
                                                }
                                                sort($ski);
                                                //array_push($ski, explode(",", $str));
                                                foreach ($ski as $skill) {
                                                    if ($skill == '') continue;
                                            ?>

                                                    <li>
                                                        <div class="custom-radio">
                                                            <input type="checkbox" id="<?php echo ($skill); ?>" value="<?php echo (htmlspecialchars($skill)); ?>" class="common skills custom-control-input" name="position">
                                                            <label for="<?php echo ($skill); ?>" class="custom-control-label color-dark"><?php echo (htmlspecialchars($skill)); ?></label>
                                                        </div>
                                                    </li>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>


                                    <!-- End of Widget -->
                                    <!--
                                    <div class="widget widget-collapsible widget-products">
                                        <h3 class="widget-title"><span>Latest Jobs</span></h3>
                                        <div class="widget-body">
										<?php
                                        $ls_qu = "select * from marketplace_jobs where site_id = '$this_site_id' and status=1 and verify=1 order by id desc limit 3";
                                        $ls_row = $conn->query($ls_qu);
                                        if (!$ls_row) {
                                            errlog(mysqli_error($conn), $ls_qu);
                                        } else {
                                            while ($ls_res = $ls_row->fetch_assoc()) {
                                                $sql_logo = "select * from vendor where id= '" . $ls_res["vendor_id"] . "' ";
                                                $log_row = $conn->query($sql_logo);
                                                if (!$log_row) {
                                                    errlog(mysqli_error($conn), $sql_logo);
                                                } else {
                                                    $logo = $log_row->fetch_assoc();
                                        ?>

                                        
										<?php
                                                }
                                            }
                                        }

                                        ?>
										</div>
                                    </div>
									-->
                                    <!-- End of Widget -->
                                </div>
                            </div>
                        </aside>
                        <!-- End of Sidebar -->

                        <div class="main-content">
                            <div class="tab tab-nav-underline tab-nav-boxed tab-vendor-wcfm">
  
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-1">
                                        <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                            <div class="toolbox-left">
                                                <div class="toolbox-item toolbox-sort select-box text-dark">
                                                    <label>Sort By :</label>
                                                    <select name="orderby" class="form-controln common" id="sort">
                                                        <option value="default" selected="selected">Default sorting
                                                        </option>

                                                        <option value="id desc">Sort by latest</option>
                                                        <option value="id asc">Sort by Oldest</option>
                                                        <option value="name asc">A - Z</option>
                                                        <option value="name desc">Z - A </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="toolbox-right">

                                                <div class="toolbox-item toolbox-layout">
                                                    <a href="vendor-wcfm-store-product-grid.html" class="icon-mode-grid btn-layout active">
                                                        <i class="w-icon-grid"></i>
                                                    </a>
                                                    <a href="vendor-wcfm-store-product-list.html" class="icon-mode-list btn-layout">
                                                        <i class="w-icon-list"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </nav>

                                        <!-- Start of data print -->

                                        <div id="data_div">
                                          </div>
                                    </div>
                                    <div class="tab-pane" id="tab-4">
                                        <div class="review-area">
                                            <h3 class="title font-weight-bold mb-5">Write A Review</h3>
                                            <input name="review" type="text" class="form-control" placeholder="your review">
                                            <button class="btn btn-rounded">Add Your Review</button>
                                        </div>
                                        <!-- End of Reveiw Area -->
                                        <div class="review-area">
                                            <h3 class="title font-weight-bold mb-5">Reviews</h3>
                                            <div class="reviewers d-flex align-items-center flex-wrap mb-7">
                                                <div class="reviewers-picture d-flex mr-2">
                                                    <figure>
                                                        <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar" width="113" height="112" />
                                                    </figure>
                                                    <figure>
                                                        <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar" width="113" height="112" />
                                                    </figure>
                                                    <figure>
                                                        <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar" width="113" height="112" />
                                                    </figure>
                                                </div>
                                                <div class="reviewer-name">
                                                    <a href="#" class="font-weight-bold mr-1">John Doe</a>has reviewed
                                                    this store
                                                </div>
                                            </div>
                                            <!-- End of Reviewers -->
                                            <div class="review-ratings">
                                                <div class="review-ratings-left mr-auto">
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Feature</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Varity</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Flexibility</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Delivery</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Support</label>
                                                    </div>
                                                </div>
                                                <!-- End of Review Ratings Left -->
                                                <div class="review-ratings-right">
                                                    <div class="average-rating">5.0<sub>/5</sub></div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full mr-0">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End of Review Ratings Right -->
                                            </div>
                                            <!-- End of Review Ratings -->
                                            <div class="user-wrap">
                                                <div class="user-photo">
                                                    <figure>
                                                        <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar" width="113" height="112" />
                                                    </figure>
                                                    <div class="rated text-center">
                                                        <label>Rated</label>
                                                        <span class="score">5.0</span>
                                                    </div>
                                                </div>
                                                <!-- End of User Photo -->
                                                <div class="user-info">
                                                    <h4 class="user-name">John Doe</h4>
                                                    <div class="user-date mb-7">
                                                        <span>1 Reviews</span>
                                                        <span>April 1, 2021 12:12 Pm</span>
                                                    </div>
                                                    <p>Diam in arcu cursus euismod quis. Eget sit amet tellusvitae
                                                        sapien pellentesque habitant morbi tristique senectus et.
                                                        Cras adipiscing enim ermentum et sollicitudin ac orci phasellus.
                                                    </p>
                                                </div>
                                                <!-- End of User Info -->
                                                <div class="review-ratings">
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Feature</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Varity</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Flexibility</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Delivery</label>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                        </div>
                                                        <label>5.0 Support</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of User Wrap -->
                                        </div>
                                        <!-- End of Reveiw Area -->
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- End of Main Content -->
                    </div>
                </div>
            </div>


            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <?php
        // require_once "shop_footer.php";
        ?>
        <!-- End of Footer -->
    </div>
    <!-- End of Page-wrapper -->

    <!-- Start of Scroll Top -->
    <div id="profileCounter" class="pt-5 pb-5" style="display: none; position: sticky; bottom: 0; width: 100%; height: wrap-content; background-color: rgb(8, 50, 108); color: white; z-index: 999;">
        <div style="display: flex; align-items: center; text-align: center; flex-direction: column;">
            <div>
                <button class="btn customBtn" data-type="RFV" id="">RFV</button>
                <button class="btn customBtn" data-type="RFQ" id="">RFQ</button>
                <button class="btn customBtn" data-type="RFI" id="">RFI</button>
                <button class="btn customBtn" data-type="RFQ-M" id="">RFQ-M</button>
            </div>
        </div>
    </div>



    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>
    <!-- End of Scroll Top -->

    <!-- End of Scroll Top -->

    <!-- Start of Quick View -->
    <?php $img = '<div class="row gutter-lg" id="view"><div class="col-md-3 mb-4 mb-md-0"><div class="product-gallery product-gallery-sticky mb-0"><div class="product-single-swiper swiper-container swiper-theme nav-inner row cols-1 gutter-no"><figure class="product-image" id="logoBlock"><img src="assets/images/loading.jpg"data-zoom-image="assets/images/loading.jpg" alt="Water Boil Black Utensil" width="800" height="900"></figure></div></div></div><div class="col-md-9 overflow-hidden p-relative"><img src="assets/images/loading.jpg"data-zoom-image="assets/images/loading.jpg"alt="Water Boil Black Utensil" width="800" height="900"></div></div>'; ?>

    <div class="product product-single product-popup">
        <div class="row gutter-lg" id="view">


        </div>
    </div>


    <div id="formLoader">
        <div class="row">
            <div class="col-sm-12 text-center text-white">
                Loading....
                <div class="spinner-border text-primary" style="height: 10vh; width: 10vh;"></div>
            </div>
        </div>
    </div>
    <!-- End of Quick view -->

    <!-- Plugin JS File -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="../assets/vendor/sticky/sticky.min.js"></script>
    <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/main.min.js"></script>
    <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>
<script>
    var dat = '<?php echo $img; ?>';

    function quick(thi) {
        // console.log('hii');


        var id = $(thi).parents("div").attr("id");

        var action = 'data';

        $.ajax({

            url: "marketplace-professionals-helper",
            type: "POST",
            data: {
                quick: action,
                id: id
            },
            beforeSend: function() {
                $("#view").replaceWith(dat);
                window.dispatchEvent(new Event('resize'));
            },
            success: function(data) {

                $('#view').replaceWith(data);
                window.dispatchEvent(new Event('resize'));
            }
        });

    }
    $(document).ready(function() {
        console.log('hi');
        data();

        $(document).on('change', ".profileSelector", function() {
            var flag = false;
            $('.profileSelector:checked').each(function() {
                flag = true;
            });

            if (flag) {
                $("#profileCounter").fadeIn();
            } else {
                $("#profileCounter").fadeOut();
            }
        })

        function FindLink(type) {
            var list = "";
            $('.profileSelector:checked').each(function() {
                list += $(this).val() + ",";
            })

            if (list.trim() == '') {
                $("#formLoader").css("display", "none");
                Swal.fire("Error", "No profile selected.\nPlease select at least 1 profile to proceed.", "info");
                return;
            }

            location.href = type.toLowerCase() + "?id=" + list ;
        }

        $(".customBtn").on('click', function() {
            $("#formLoader").css("display", "flex");
            switch ($(this).data("type")) {
                case "RFV":
                case "RFQ":
                case "RFI":
                case "RFQ-M":
                    FindLink($(this).data("type"));
                    break;
                default:
                    $("#formLoader").css("display", "none");
                    Swal.fire("Something went wrong.", "Please reload the page and try again", "error")
            }
        })

        function data() {
            // console.log('hi');

            var action = 'data';
            $("#formLoader").css("display", "flex");
            $.ajax({

                url: "marketplace-professionals-helper.php",
                type: "POST",
                data: {
                    action: action
                },
                success: function(data) {
                    $("#formLoader").css("display", "none");
                    $('#data_div').html(data);
                }
            });
        }

        $('.common').on('change', function xyz() {
            // console.log('hi');

            var cate = filterdata("sub_cat_id");
            var indus = filterdata("industry");
            var loc = filterdata("location");
            var type = filterdata("type");
            var skill = filterdata("skills");
            var sort = $('#sort').val();

            var action = 'data';
            $("#formLoader").css("display", "flex");
            $.ajax({

                url: "marketplace-professionals-helper",
                type: "POST",
                data: {
                    action: action,
                    cat: cate,
                    industry: indus,
                    location: loc,
                    type: type,
                    skill: skill,
                    sort: sort
                },
                success: function(data) {
                    $("#formLoader").css("display", "none");
                    $('#data_div').html(data);
                }
            });


        })

        function filterdata(classname) {
            var filter = [];
            $('.' + classname + ':checked').each(function() {
                filter.push($(this).val());
            });
            return filter;
        }

    })
</script>