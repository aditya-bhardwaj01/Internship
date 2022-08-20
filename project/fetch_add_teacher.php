<?php
include "config/connection.php";
$category = $_POST['category'];
$id = $_POST['id'];
$start = $_POST['start'];

if ($id == '1') {
    $sqlTot = "SELECT a.id, a.class_title, a.class_level, a.start_time, a.end_time, a.class_instructor, b.image_url
            FROM add_teacher a INNER JOIN product_images b ON a.class_level = '$category' AND b.marketplace_id = 16";

    $sql = "SELECT a.id, a.class_title, a.class_level, a.start_time, a.end_time, a.class_instructor, b.image_url
            FROM add_teacher a INNER JOIN product_images b ON a.class_level = '$category' AND b.marketplace_id = 16 limit $start, 4";
}
if ($id == '2') {
    $sqlTot = "SELECT a.id, a.class_title, a.class_level, a.start_time, a.end_time, a.class_instructor, b.image_url
            FROM add_teacher a INNER JOIN product_images b ON a.class_focus = '$category' AND b.marketplace_id = 16";
    $sql = "SELECT a.id, a.class_title, a.class_level, a.start_time, a.end_time, a.class_instructor, b.image_url
            FROM add_teacher a INNER JOIN product_images b ON a.class_focus = '$category' AND b.marketplace_id = 16 limit $start, 4";
}
if ($id == '3') {
    $str = $category;
    $arr = explode(",", $str);
    $low = (int)$arr[0];
    $high = (int)$arr[1];

    $sqlTot = "SELECT a.id, a.class_title, a.class_level, a.start_time, a.end_time, a.class_instructor, b.image_url
            FROM add_teacher a INNER JOIN product_images b ON a.fees>=$low AND a.fees<=$high AND b.marketplace_id = 16";

    $sql = "SELECT a.id, a.class_title, a.class_level, a.start_time, a.end_time, a.class_instructor, b.image_url
    FROM add_teacher a INNER JOIN product_images b ON a.fees>=$low AND a.fees<=$high AND b.marketplace_id = 16 limit $start, 4";
}

$res = mysqli_query($conn, $sql);
$resTot = mysqli_query($conn, $sqlTot);

function writeMsg($st, $en)
{
    $dateTimeObject1 = date_create($st);
    $dateTimeObject2 = date_create($en);

    $difference = date_diff($dateTimeObject1, $dateTimeObject2);
    $minutes = $difference->days * 24 * 60;
    $minutes += $difference->h * 60;
    $minutes += $difference->i;
    $hour = $minutes / 60;
    $min = $minutes % 60;
    return (int)$hour.' hours '.$min.' minutes';
}

$currentShowing = 0;
$html = '';
//class_title label 
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        $currentShowing++;
        $html .= '<div class="product-wrap">
        <div class="product text-center" style="height: 400px;">
            <figure class="product-media">
                <a href="class-detail.php?detail=' . $row['id'] . ',' . $row['image_url'] . ',' . $row['class_instructor'] .'">
                <img src="' . $row['image_url'] . '" alt="product_image" style="height: 250px;">
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
                    <a href="class-detail.php?detail=' . $row['id'] . ',' . $row['image_url'] . ',' . $row['class_instructor'] .'">' . $row['class_title'] . '</a>
                </div>
                <h3 class="product-name">
                    <a href="class-detail.php?detail=' . $row['id'] . ',' . $row['image_url'] . ',' . $row['class_instructor'] .'"> Level: ' . $row['class_level'] . '</a>
                </h3>
                <div class="product-pa-wrapper">
                    <div class="product-price">Duration: 
                        ' . writeMsg($row['start_time'], $row['end_time']) . '
                    </div>
                </div>
            </div>
        </div>';
    }
} //.writeMsg($row['start_time'], $row['end_time']).

$result[] = $html;
$result[] = $currentShowing;
$result[] = mysqli_num_rows($resTot);
echo json_encode($result);
?>
