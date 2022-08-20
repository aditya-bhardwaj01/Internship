<?php
include "config/cloudinaryConfig.php";
include "config/connection.php";

if(isset($_POST['submit'])){
    $marketplace = $_POST['marketplace'];
    $title = $_POST['title'];
    $price = $_POST['price'];

    $modules = array();
    if(isset($_POST['admin'])){
        array_push($modules, 1);
    }
    if(isset($_POST['vendor'])){
        array_push($modules, 2);
    }
    if(isset($_POST['user'])){
        array_push($modules, 3);
    }
    if(isset($_POST['guest'])){
        array_push($modules, 4);
    }
    $tags = $_POST['tags'];
    $description = $_POST['description'];
    $features = $_POST['features'];
    $main_image = $_FILES['main_image']['tmp_name'];

    $moduleStr = '';

    for($i=0; $i<sizeof($modules); $i++){
        $moduleStr .= $modules[$i];
        if($i != sizeof($modules)-1){
            $moduleStr .= ',';
        }
    }
    
    $imageUrl = getURL($main_image);

    $s1 = getURL($_FILES['srnsht1']['tmp_name']);
    $s2 = getURL($_FILES['srnsht2']['tmp_name']);
    $s3 = getURL($_FILES['srnsht3']['tmp_name']);
    $s4 = getURL($_FILES['srnsht4']['tmp_name']);
    $s5 = getURL($_FILES['srnsht5']['tmp_name']);
    $s6 = getURL($_FILES['srnsht6']['tmp_name']);
    $s7 = getURL($_FILES['srnsht7']['tmp_name']);
    $s8 = getURL($_FILES['srnsht8']['tmp_name']);
    $s9 = getURL($_FILES['srnsht9']['tmp_name']);
    $s10 = getURL($_FILES['srnsht10']['tmp_name']);
    $s11 = getURL($_FILES['srnsht11']['tmp_name']);
    $s12 = getURL($_FILES['srnsht12']['tmp_name']);

    $screenshots = $s1.','.$s2.','.$s3.','.$s4.','.$s5.','.$s6.','.$s7.','.$s8.','.$s9.','.$s10.','.
                    $s11.','.$s12;
    
    $sql = "INSERT INTO marketplace_digital_products (marketplace_id, site_id, title, description, tags, banner, price, features, module_ids) 
        VALUES ($marketplace, $this_site_id, '$title', '$description', '$tags', '$imageUrl', $price, '$features', '$moduleStr')";
    
    $res = mysqli_query($conn, $sql);

    $sql = "UPDATE product_images SET image_url = '$screenshots' WHERE marketplace_id = 27 AND type = 'IMAGE' AND main=0";
    $res = mysqli_query($conn, $res); 

}

?>