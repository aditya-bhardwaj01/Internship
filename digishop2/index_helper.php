<?php

include "config/connection.php";
include "./marketplace_ids.php";
$category = $_POST['category'];

$html = '';
foreach ($marketplace_ids as $id) {
    $sql = "SELECT a.*, b.name FROM marketplace_digital_products a INNER JOIN vendor b 
    ON a.status=1 AND b.id = a.vendor_id AND a.marketplace_id = $id AND a.cat_id = '$category' 
    ORDER BY a.created_date DESC";

    $res = mysqli_query($conn, $sql);
    foreach ($res as $row) {
        $html .= '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 joomla plugins component">
    <div class="single-item-grid">
        <div class="item-img"> 
            <img src="' . $row['banner'] . '" alt="product" onclick="openDetailPage(event, ' . $row['id'] . ')"
            class="img-responsive" style="height: 300px; cursor: pointer;">
            <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
        </div>
        <div class="item-content">
            <div class="item-info">
                <a style="cursor: pointer;" onclick="openDetailPage(event, ' . $row['id'] . ')">' . $row['title'] . '</a>
                <div class="price">$' . $row['price'] . '</div>
            </div>
            <div class="item-profile">
                <div class="profile-title">
                    <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div> <span>' . $row['name'] . '</span>
                </div>
                <div class="profile-rating">

                </div>
            </div>
        </div>
    </div>
</div>';
    }

    if ($html == '') $html .= '<h4 style="text-align: center;">No data found</h4>';

    echo $html;
}
?>
