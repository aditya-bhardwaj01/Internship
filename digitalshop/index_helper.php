<?php

include "config/connection.php";
include './marketplace_ids.php';
$category = $_POST['category'];
$type = $_POST['type'];

$html = '';

if ($type == 1) {
    foreach ($marketplace_ids as $id) {
        $sql = "SELECT a.*, b.name FROM marketplace_digital_products a INNER JOIN vendor b 
        ON a.status=1 AND b.id = a.vendor_id AND a.marketplace_id = $id AND a.cat_id = '$category' 
        AND a.site_id = $this_site_id ORDER BY a.created_date DESC";

        $res = mysqli_query($conn, $sql);
        foreach ($res as $row) {
            $html .= '<div class="pf-item video photography wow fadeInUp">
            <div class="work-box">
                <div class="work-pic">
                    <img src="'.$row['banner'].'" alt="MaanSoft" style="height: 350px;">
                    <a href="theme-single.php?id='.urlencode(base64_encode($row['id'])).'" data-fancybox="gallery" class="item work-popup popup-link">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
                <div class="work-desc">
                    <a href="theme-single.php?id='.urlencode(base64_encode($row['id'])).'">
                        <h5 class="work-title">
                        '.$row['title'].'
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
                                <li><a href="theme-single.php?id='.urlencode(base64_encode($row['id'])).'" class="btn-7">Preview</a></li>
                                <li>
                                    <a href="#" class="btn-cart">
                                        <img src="assets/img/icons/cart-white.png" alt="MaanSoft">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
    }
} else if ($type == 2) {
    foreach ($marketplace_ids as $id) {
        $sql = "SELECT a.*, b.name FROM marketplace_digital_products a INNER JOIN vendor b 
        ON a.status=1 AND b.id = a.vendor_id AND a.marketplace_id = $id AND a.cat_id = '$category' 
        AND a.site_id = $this_site_id ORDER BY a.created_date DESC";

        $res = mysqli_query($conn, $sql);
        foreach ($res as $row) {
            $html .= '<div class="pf-item video photography wow fadeInUp">
            <div class="work-box">
                <div class="work-pic">
                    <img src="'.$row['banner'].'" alt="MaanSoft" style="height: 350px;">
                    <a href="theme-single.php?id='.urlencode(base64_encode($row['id'])).'" data-fancybox="gallery" class="item work-popup popup-link">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
                <div class="work-desc">
                    <a href="theme-single.php?id='.urlencode(base64_encode($row['id'])).'">
                        <h5 class="work-title">
                        '.$row['title'].'
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
                                <li><a href="theme-single.php?id='.urlencode(base64_encode($row['id'])).'" class="btn-7">Preview</a></li>
                                <li>
                                    <a href="#" class="btn-cart">
                                        <img src="assets/img/icons/cart-white.png" alt="MaanSoft">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
    }
}

if ($html == '') $html .= '<h4 style="text-align: center;">No data found</h4>';

echo $html;
?>