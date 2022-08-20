<?php
$category = $_POST['category'];
$start = $_POST['start'];
$id = $_POST['id'];
include "config/connection.php";

if($id == 1){
    $sqlTot = "SELECT * FROM affiliate_products WHERE cat_id = '$category' AND status = 0 AND verified = 0";
    $sql = "SELECT * FROM affiliate_products WHERE cat_id = '$category' AND status = 0 AND verified = 0 limit $start, 6";
}
else if($id == 2){
    $sqlTot = "SELECT * FROM affiliate_products WHERE source = '$category' AND status = 0 AND verified = 0";
    $sql = "SELECT * FROM affiliate_products WHERE source = '$category' AND status = 0 AND verified = 0 limit $start, 6";
}
$res = mysqli_query($conn, $sql);
$resTot = mysqli_query($conn, $sqlTot);

$currentShowing = 0;
$result = array();
$html = '';
if(mysqli_num_rows($res) > 0){
    while ($row = mysqli_fetch_assoc($res)) {
        $currentShowing++;
        $html.='<div class="product-wrap" style="margin: 0px 25px; width: 1000px; margin-left: 0;">
        <div class="product text-center">
            <figure class="product-media">
                <a href="product-default.html" width="300" height="338">
                '.$row['product_url'].'
                </a>
                <div class="product-action-horizontal">
                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                        title="Add to cart"></a>
                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                        title="Wishlist"></a>
                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                        title="Compare"></a>
                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                        title="Quick View"></a>
                </div>
            </figure>
            <div class="product-details">
                <div class="product-cat">
                    <a href="shop-banner-sidebar.html">'.$row['product_title'].'</a>
                </div>
                <h3 class="product-name">
                    <a href="product-default.html">'.$row['cat_id'].'</a>
                </h3>
            </div>
        </div>';
    }
}

$result[] = $html;
$result[] = $currentShowing;
$result[] = mysqli_num_rows($resTot);
echo json_encode($result);
?>
