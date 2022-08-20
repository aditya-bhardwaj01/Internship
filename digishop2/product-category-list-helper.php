<?php

include "config/connection.php";
include "./marketplace_ids.php";

$type = $_POST['type'];

if ($type == 1) {
    $category = $_POST['category'];

    $result = array();
    $html_grid = '';
    $html_list = '';

    foreach ($marketplace_ids as $id) {
        $sql = "SELECT a.*, b.name, b.profile_pic FROM marketplace_digital_products a INNER JOIN vendor b 
        ON a.status=1 AND b.id = a.vendor_id AND a.marketplace_id = $id AND a.cat_id = '$category' 
        ORDER BY a.created_date DESC";
    
        $res = mysqli_query($conn, $sql);
        foreach ($res as $row) {
            $html_grid .= '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="single-item-grid">
            <div class="item-img">
                <a href="single-product.php?id='.$row['id'].'">
                    <img style="height: 320px;" src="'.$row['banner'].'" alt="product" class="img-responsive">
                </a>

                <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
            </div>
            <div class="item-content">
                <div class="item-info">
                    <h3><a href="single-product.php?id='.$row['id'].'">'.$row['title'].'</a></h3>
                    <div class="price">$'.$row['price'].'</div>
                </div>
                <div class="item-profile">
                    <div class="profile-title">
                        <div class="img-wrapper"><img src="'.$row['profile_pic'].'" alt="profile" class="img-responsive img-circle"></div>
                        <span>'.$row['name'].'</span>
                    </div>
                    <div class="profile-rating">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>';

        $html_list .= '<div class="single-item-list">
        <div class="item-img">
            <a href="single-product.php?id='.$row['id'].'">
                <img style="height: 230px;" src="'.$row['banner'].'" class="img-responsive">
            </a>

        </div>
        <div class="item-content">
            <div class="item-info">
                <div class="item-title">
                    <h3><a href="single-product.php?id='.$row['id'].'">'.$row['title'].'</a></h3>
                    <span>'.$row['cat_id'].'</span>
                </div>
                <div class="item-description">
                    <p>'.$row['description'].' </p>
                </div>
                <div class="item-sale-info">
                    <div class="price">$'.$row['price'].'</div>
                    <div class="sale-qty">Views ( '.$row['views'].' )</div>
                </div>
            </div>
            <div class="item-profile-list">
                <div class="profile-title">
                    <div class="img-wrapper"><img style="height: 40px;" src="'.$row['profile_pic'].'" alt="profile" class="img-responsive img-circle"></div>
                    <span>'.$row['name'].'</span>
                </div>
                <div class="profile-rating-info">
                    <ul>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>';
        }
    }

}

$result[] = $html_grid;
$result[] = $html_list;
echo json_encode($result);

?>