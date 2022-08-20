<?php
$sortBy = $_POST['basis'];
$sortOrder = $_POST["sortOrder"];
$category = $_POST["category"];
$start = $_POST['start'];

$conn = mysqli_connect("localhost", "root", "", "ideal_village") or die("Connection failed");

$sql = "SELECT image_url FROM product_images limit $start, 6";

$categorySort = "";
if($category != ""){
    $categorySort = "AND x.item_type=".$category;
}

$table="";
if($sortBy === "created_date" || $sortBy === "product_title"){
    $table = "marketplace_products";
}
if($sortBy === "price"){
    $table = "product_variants";
}

$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

if (mysqli_num_rows($result) > 0) {
    foreach ($result as $row) {
        echo '<div class="product"><figure class="product-image"><a href="#">'.
      '<img src="' . $row['image_url'] . '" alt=""></a></figure></div>';
    }
} else {
    echo "<h4>No record Found</h4>";
}

// SELECT y.image_url FROM marketplace_products x INNER JOIN product_images y 
//     ON x.id = y.product_id". $categorySort ."AND x.status = 1 AND x.verified = 1 AND y.type='image' 
//     and y.marketplace_id=5 x.site_id=$this_site_id AND y.main=1 
//     INNER JOIN product_variants z ON y.product_id = z.id ORDER BY $table.$sortBy $sortOrder

?>