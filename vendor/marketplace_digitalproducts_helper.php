<?php

include "config/connection.php";

$price = $_POST['price'];
$category = $_POST['category'];
$label = $_POST['label'];
if ($category != '' && $label == '') {
    $sql = "SELECT a.*, b.image_url FROM marketplace_digiproducts a INNER JOIN product_images b
            WHERE a.site_id = $this_site_id AND a.cat_id = '$category' AND a.id = b.product_id AND
            b.marketplace_id = 27 AND a.price<=$price";
} else if ($label != '' && $category == '') {
    $sql = "SELECT a.*, b.image_url FROM marketplace_digiproducts a INNER JOIN product_images b
            WHERE a.site_id = $this_site_id AND a.Label = '$label' AND a.id = b.product_id AND
            b.marketplace_id = 27 AND a.price<=$price";
} else {
    $sql = "SELECT a.*, b.image_url FROM marketplace_digiproducts a INNER JOIN product_images b
            WHERE a.site_id = $this_site_id AND a.id = b.product_id AND
            b.marketplace_id = 27 AND a.price<=$price";
}

$res = mysqli_query($conn, $sql);
if (!$res) {
    errlog(mysqli_error($conn), $sql);
}

$html = '';

foreach($res as $row){
    $html .= '<div class="swiper-slide product product-image-gap product-simple">
    <div class="product-label-group">
        <label class="product-label label-new">'.$row['Label'].'</label>
    </div>
    <figure class="product-media">
        <a href="digiproduct-detail.php?id='.$row['id'].'">
            <img src="'.$row['image_url'].'" alt="Product" width="295" height="335" />
        </a>
        <div class="product-action-vertical">
            <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
        </div>
    </figure>
    <div class="product-details">
        <div class="product-cat">
            <a href="shop-banner-sidebar.html">'.$row['cat_id'].'</a>
        </div>
        <h3 class="product-name">
            <a href="digiproduct-detail.php?id='.$row['id'].'">'.$row['product_title'].'</a>
        </h3>
        
        <div class="product-pa-wrapper">
            <div class="product-price">
                <ins class="new-price">INR '.$row['price'].'.00</ins><del class="old-price">INR 60.00</del>
            </div>
        </div>
    </div>
    </div>';
}

echo $html;

?>