<?php

include "config/connection.php";
include "./marketplace_ids.php";
$type = $_POST['type'];
$html = '';

foreach ($marketplace_ids as $id) {
    if($type == 1){
        $category = $_POST['category'];

        $sql = "SELECT a.*, b.name, b.profile_pic FROM marketplace_digital_products a INNER JOIN vendor b 
        ON a.status=1 AND b.id = a.vendor_id AND a.marketplace_id = $id AND a.cat_id = '$category' 
        ORDER BY a.created_date DESC";
    }
    else if($type == 2){
        $minPrice = $_POST['minPrice'];
        $maxPrice = $_POST['maxPrice'];

        $sql = "SELECT a.*, b.name, b.profile_pic FROM marketplace_digital_products a INNER JOIN vendor b 
        ON a.status=1 AND b.id = a.vendor_id AND a.marketplace_id = $id AND a.price >= $minPrice AND a.price <= $maxPrice 
        AND ORDER BY a.created_date DESC";
    }

    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res)){
        foreach($res as $row) {
            $html .= '<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="single-item-grid">
                <div class="item-img">
                    <a href="single-product.php?id='.$row['id'].'">
                        <img style="height: 320px;" src="'.$row['banner'].'" alt="product" class="img-responsive">
                    </a>
                </div>
                <div class="item-content">
                    <div class="item-info">
                        <h3><a href="single-product.php?id='.$row['id'].'">'.$row['title'].'</a></h3>
                        <div class="price">$'.$row['price'].'</div>
                    </div>
                    <div class="item-profile">
                        <div class="profile-title">
                            <div class="img-wrapper"><img style="height: 35px;" src="'.$row['profile_pic'].'" alt="profile" class="img-responsive img-circle"></div>
                            <span>'.$row['name'].'</span>
                        </div>
                        <div class="profile-rating">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
    }
}

if($html == ''){
    $html .= '<h3>No data found</h3>';
}

echo $html;

?>