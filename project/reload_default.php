<?php

include "config/connection.php";

$order = $_POST['order'];

$sql = "SELECT a.id, a.vendor_id, a.cat_id, a.title, a.type, a.created_date, b.image_url
FROM marketplace_initiatives a INNER JOIN product_images b ON a.site_id = $this_site_id AND b.marketplace_id = 25 
ORDER BY created_date $order";

$res = mysqli_query($conn, $sql);
$countCurrent = 0;

$html = '';

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        $countCurrent++;
        $html .= '<div class="product-wrap" style="padding: 1em;">
        <div class="product text-center">
            <figure class="product-media">
                <a href="#">
                    <img src="' . $row['image_url'] . '" alt="product_image" style="height: 250px;">
                </a>
                <div class="product-action-horizontal">
                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                </div>
            </figure>
            <div class="product-details">
                <div class="product-cat">
                    <a href="#">' . $row['title'] . '</a>
                </div>
                <h3 class="product-name">
                    <a href="#">' . $row['cat_id'] . '</a>
                </h3>
            </div>
        </div>
    </div>';
    }
}
$result[] = $countCurrent;
$result[] = $html;
echo json_encode($result);
?>