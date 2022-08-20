<?php
include "config/connection.php";

$data = $_POST['data'];
$order = $_POST['order'];

$count = 0;
$html = '';
$rows = array();

if ($data == 'default_load') {
    if($order == 'default'){
        $sql = "SELECT a.id, a.vendor_id, a.cat_id, a.title, a.type, a.created_date, b.image_url
    FROM marketplace_initiatives a INNER JOIN product_images b ON a.id = b.product_id AND 
    a.site_id = $this_site_id AND b.marketplace_id = 25 AND b.type = 'IMAGE' AND a.status = 1 AND a.verified = 1 AND b.main = 1";
    }
    else{
        $sql = "SELECT a.id, a.vendor_id, a.cat_id, a.title, a.type, a.created_date, b.image_url
    FROM marketplace_initiatives a INNER JOIN product_images b ON a.id = b.product_id AND 
    a.site_id = $this_site_id AND b.marketplace_id = 25 AND b.type = 'IMAGE' AND a.status = 1 AND a.verified = 1 AND b.main = 1
    ORDER BY a.created_date $order";
    }

    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $count++;
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
} else {
    $included = array();
    foreach ($data as $oneFilter) {
        if ($oneFilter[1] == 1) {
            $sql = "SELECT a.id, a.vendor_id, a.cat_id, a.title, a.type, a.created_date, b.image_url
            FROM marketplace_initiatives a INNER JOIN product_images b ON a.id = b.product_id AND a.cat_id = '$oneFilter[0]' 
            AND a.site_id = $this_site_id AND b.marketplace_id = 25 AND b.type = 'IMAGE' AND a.status = 1 AND a.verified = 1 
            AND b.main = 1";
        } else if ($oneFilter[1] == 2) {
            $sql = "SELECT a.id, a.vendor_id, a.cat_id, a.title, a.type, a.created_date, b.image_url
        FROM marketplace_initiatives a INNER JOIN product_images b ON a.id = b.product_id AND a.type = '$oneFilter[0]'
         AND a.site_id = $this_site_id AND b.marketplace_id = 25 AND b.type = 'IMAGE' AND a.status = 1 
         AND a.verified = 1 AND b.main = 1";
        }

        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                if (!in_array($row, $included)) {
                    $count++;

                    array_push($rows, [$row['created_date'], '<div class="product-wrap" style="padding: 1em;">
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
                    </div>']);

                    array_push($included, $row);
                }
            }
        }
    }

    if($order != 'default'){
        sort($rows);
        if($order == 'DESC'){
            rsort($rows);
        }
    }

    foreach($rows as $element){
        $html .= $element[1];
    }
}

$result[] = $count;
$result[] = $html;
echo json_encode($result);
?>
