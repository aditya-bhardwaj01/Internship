<?php

include "../config/connection.php";
$type = $_POST['type'];
$filter = $_POST['filter'];
if($type == 'label'){
    if($filter == 'Promoted'){
        $filter = 1;
    }
    else if($filter == 'Sponsored'){
        $filter = 2;
    }
    else if($filter == 'Featured'){
        $filter = 3;
    }
}

$sql = "select a.*, b.image_url from marketplace_placements a inner join product_images b
where a.site_id=$this_site_id and a.id=b.product_id and b.type='IMAGE' and b.main=1 and b.marketplace_id=10 and $type='$filter'";
$res = mysqli_query($conn, $sql);
if (!$res) {
    errlog(mysqli_error($conn), $sql);
}

$html = '';

foreach($res as $row){
    $html .= '<figure class="product-media">
    <a href="product-default.html">
        <img src="'.$row['image_url'].'" alt="Product" width="295" height="335" />
    </a>
    <div class="product-action-vertical">
        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
    </div>
</figure>
<div class="product-details">

    <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
    <h4 class="product-name">
        <a href="product-default.html">'.$row['site_title'].'</a>
    </h4>
    <p><span class="flaticon-placeholder"></span> '.$row['city'].', '.$row['state'].'</p>
    <div class="ratings-container">
        <div class="ratings-full">
            <span class="ratings" style="width: 80%;"></span>
            <span class="tooltiptext tooltip-top"></span>
        </div>
        <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
    </div>
    <div class="row">
        <div class="col-md-4 col-xs-2">
            <div class="icon-box text-center">
                <div class="icon-box-content">
                    <h4 class="icon-box-title">Availability</h4>
                    <div class="product-cat">
                        <a href="#">'.$row['available_for'].'</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-2">
            <div class="icon-box text-center">
                <div class="icon-box-content">
                    <h4 class="icon-box-title">Engegement</h4>
                    <div class="product-cat">
                        <a href="#">'.$row['suitable_for'].'</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-2">
            <div class="icon-box text-center" role="group">
                <div class="icon-box-content">
                    <h4 class="icon-box-title">Open for</h4>
                    <div class="product-cat">
                        <a href="#">'.$row['open_for'].'</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-pa-wrapper">
        <div class="product-action">
            <a href="#" class="btn-cart btn-product btn btn-link btn-underline">View Property
            </a>
        </div>
    </div>
</div>';
}

echo $html;

?>