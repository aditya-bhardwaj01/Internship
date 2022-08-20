<?php

include "../config/connection.php";
$lowPrice = $_POST['lowPrice'];
$highPrice = $_POST['highPrice'];

$html = '';

if(isset($_POST['data'])){
    $data = $_POST['data'];
    foreach($data as $oneFilter){
        if($oneFilter[1] == 'label'){
            if($oneFilter[0] == 'promoted'){
                $oneFilter[0] = 1;
            }
            if($oneFilter[0] == 'sponsored'){
                $oneFilter[0] = 2;
            }
            if($oneFilter[0] == 'featured'){
                $oneFilter[0] = 3;
            }
        }
        
        $sql = "select a.*, b.image_url, c.price, c.mrp from marketplace_products a inner join product_images b on 
        a.save_type='BTB' and a.site_id=$this_site_id and a.id = b.product_id  and b.marketplace_id=6 inner join
        product_variants c on a.id=c.product_id and a.$oneFilter[1]='$oneFilter[0]' and c.price>=$lowPrice and c.price<=$highPrice";
    
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            errlog(mysqli_error($conn), $sql);
        }
    
        foreach($res as $row){
            $html .= '<div class="product-wrap">
            <div class="product text-center">
                <figure class="product-media">
                    <a href="product-default.html">
                        <img src="'.$row['image_url'].'" alt="Product" width="300" height="250" />
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
                        <a href="shop-banner-sidebar.html">'.$row['cat_id'].'</a>
                    </div>
                    <h3 class="product-name">
                        <a href="product-default.html">'.$row['product_title'].'</a>
                    </h3>
                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 100%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                    </div>
                    <div class="product-pa-wrapper">
                        <div class="product-price">
                            $'.$row['price'].'.00
                            - $'.$row['mrp'].'.00
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
    }
}
else{
    $sql = "select a.*, b.image_url, c.price, c.mrp from marketplace_products a inner join product_images b on 
        a.save_type='BTB' and a.site_id=$this_site_id and a.id = b.product_id  and b.marketplace_id=6 inner join
        product_variants c on a.id=c.product_id and c.price>=$lowPrice and c.price<=$highPrice";
    
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            errlog(mysqli_error($conn), $sql);
        }
    
        foreach($res as $row){
            $html .= '<div class="product-wrap">
            <div class="product text-center">
                <figure class="product-media">
                    <a href="product-default.html">
                        <img src="'.$row['image_url'].'" alt="Product" width="300" height="250" />
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
                        <a href="shop-banner-sidebar.html">'.$row['cat_id'].'</a>
                    </div>
                    <h3 class="product-name">
                        <a href="product-default.html">'.$row['product_title'].'</a>
                    </h3>
                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 100%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                    </div>
                    <div class="product-pa-wrapper">
                        <div class="product-price">
                            $'.$row['price'].'.00
                            - $'.$row['mrp'].'.00
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
}

echo $html;

?>