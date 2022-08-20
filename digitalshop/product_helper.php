<?php
include "config/connection.php";
$price = $_POST['price'];
$date = $_POST['date'];

if($date == 'all'){
    $sql = "SELECT a.id, a.vendor_id, a.cat_id, a.sub_cat_id, a.child_cat_id, 
    a.product_title, a.product_description, a.specifictaions, a.tags, a.views, a.price, b.image_url, c.name
    FROM marketplace_digiproducts a INNER JOIN product_images b ON a.id = b.product_id 
    AND a.site_id = $this_site_id AND a.price <= $price AND b.marketplace_id = 26 AND b.type = 'IMAGE' 
    AND a.status = 1 AND a.verified = 1 AND b.main = 1 INNER JOIN vendor c ON c.id = a.vendor_id";
}
else{
    $weekNumber = date("W")-1;
    $monthNumber = date('m')-1;
    $yearNumber = date("Y") - 1;
    if($date == 'week'){
        $sql = "SELECT a.id, a.vendor_id, a.cat_id, a.sub_cat_id, a.child_cat_id, 
        a.product_title, a.product_description, a.specifictaions, a.tags, a.views, a.price, b.image_url, c.name
        FROM marketplace_digiproducts a INNER JOIN product_images b ON a.id = b.product_id 
        AND a.site_id = $this_site_id AND a.price <= $price AND WEEK(a.created_date) = $weekNumber AND YEAR(a.created_date) = $yearNumber+1 
        AND b.marketplace_id = 26 AND b.type = 'IMAGE' AND a.status = 1 AND a.verified = 1 AND b.main = 1 INNER JOIN vendor c 
        ON c.id = a.vendor_id";
    }
    if($date == 'month'){
        $sql = "SELECT a.id, a.vendor_id, a.cat_id, a.sub_cat_id, a.child_cat_id, 
        a.product_title, a.product_description, a.specifictaions, a.tags, a.views, a.price, b.image_url, c.name
        FROM marketplace_digiproducts a INNER JOIN product_images b ON a.id = b.product_id 
        AND a.site_id = $this_site_id AND a.price <= $price AND MONTH(a.created_date) = $monthNumber AND 
        YEAR(a.created_date) = $yearNumber+1 AND b.marketplace_id = 26 AND b.type = 'IMAGE' 
        AND a.status = 1 AND a.verified = 1 AND b.main = 1 INNER JOIN vendor c ON c.id = a.vendor_id";
    }
    if($date == 'year'){
        $sql = "SELECT a.id, a.vendor_id, a.cat_id, a.sub_cat_id, a.child_cat_id, 
        a.product_title, a.product_description, a.specifictaions, a.tags, a.views, a.price, b.image_url, c.name
        FROM marketplace_digiproducts a INNER JOIN product_images b ON a.id = b.product_id 
        AND a.site_id = $this_site_id AND a.price <= $price AND YEAR(a.created_date) = $yearNumber
        AND b.marketplace_id = 26 AND b.type = 'IMAGE' AND a.status = 1 AND a.verified = 1 AND b.main = 1 
        INNER JOIN vendor c ON c.id = a.vendor_id";
    }
}

$res = mysqli_query($conn, $sql);

$html = '';
if(mysqli_num_rows($res) > 0){
    foreach($res as $row){
        $html .= '<div class="work-box wow fadeInUp">
        <a href="theme-single.php?id='.$row['id'].'">
            <img style="height: 280px;" src="'.$row['image_url'].'" alt="MaanSoft">
        </a>
        <div class="work-desc">
            <a href="theme-single.html">
                <h5 class="work-title">
                    '.$row['product_title'].'
                </h5>
            </a>
            <div class="work-meta">
                <ul class="space-between">
                    <li>By- <a href="#">'.$row['name'].'</a></li>
                </ul>
            </div>
            <div class="work-bottom space-between">
                <div class="work-price">
                    <span class="value">$'.$row['price'].'</span>
                </div>
                <div class="work-btns">
                    <ul>
                        <li>'.$row['views'].' Views</li>
                        <li><a href="theme-single.html" class="btn-7">Preview</a></li>
                        <li>
                            <a href="#" class="btn-cart">
                                <img src="assets/img/icons/cart-white.png" alt="MaanSoft">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>';
    }
}
else{
    echo '<h4>No products found...</h4>';
}

echo $html;


?>
