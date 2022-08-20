<?php

include "../config/connection.php";
include '../config/cloudinaryConfig.php';

$type = $_POST['type'];

if ($type == 'upper') {
    $field = realEscape($_POST['field']);
    $newVal = realEscape($_POST['newValue']);
    $id = $_POST['id'];

    if ($field == 'roleInput') {
        if ($newVal == 'Chartered Accountant') {
            $sub_cat_id = 1;
        }
        if ($newVal == 'Lawyer') {
            $sub_cat_id = 2;
        }
        $sql = "UPDATE marketplace_professionals SET sub_cat_id='$sub_cat_id' WHERE vendor_id=$id";
    } else if ($field == 'locationInput') {
        $sql = "UPDATE vendor SET city='$newVal' WHERE id=$id";
    } else if ($field == 'phoneInput') {
        $sql = "UPDATE vendor SET mobile='$newVal' WHERE id=$id";
    } else if ($field == 'emailInput') {
        $sql = "UPDATE vendor SET email='$newVal' WHERE id=$id";
    } else if ($field == 'affInput') {
        $sql = "UPDATE marketplace_professionals SET affiliation='$newVal' WHERE vendor_id=$id";
    } else if ($field == 'affnumInput') {
        $sql = "UPDATE marketplace_professionals SET affiliation_number='$newVal' WHERE vendor_id=$id";
    }

    $res = mysqli_query($conn, $sql);
    if (!$res) {
        errlog(mysqli_error($conn), $sql);
    }
}

if ($type == 'business-lower') {
    $id = $_POST['id'];
    $business_name = realEscape($_POST['business_name']);
    $about_business = realEscape($_POST['about_business']);
    $website = realEscape($_POST['website']);
    $address = realEscape($_POST['address']);
    $banner_image = '';
    $company_logo = '';
    $image1 = '';
    $image2 = '';
    $image3 = '';
    $image4 = '';
    $image5 = '';
    $image6 = '';
    $images = array();

    if (!(!isset($_FILES['banner_image']) || $_FILES['banner_image']['error'] == UPLOAD_ERR_NO_FILE)) {
        $banner_image = getURL($_FILES['banner_image']['tmp_name']);
    }
    if (!(!isset($_FILES['company_logo']) || $_FILES['company_logo']['error'] == UPLOAD_ERR_NO_FILE)) {
        $company_logo = getURL($_FILES['company_logo']['tmp_name']);
    }
    if (!(!isset($_FILES['image1']) || $_FILES['image1']['error'] == UPLOAD_ERR_NO_FILE)) {
        $image1 = getURL($_FILES['image1']['tmp_name']);
        array_push($images, $image1);
    }
    if (!(!isset($_FILES['image2']) || $_FILES['image2']['error'] == UPLOAD_ERR_NO_FILE)) {
        $image2 = getURL($_FILES['image2']['tmp_name']);
        array_push($images, $image2);
    }
    if (!(!isset($_FILES['image3']) || $_FILES['image3']['error'] == UPLOAD_ERR_NO_FILE)) {
        $image3 = getURL($_FILES['image3']['tmp_name']);
        array_push($images, $image3);
    }
    if (!(!isset($_FILES['image4']) || $_FILES['image4']['error'] == UPLOAD_ERR_NO_FILE)) {
        $image4 = getURL($_FILES['image4']['tmp_name']);
        array_push($images, $image4);
    }
    if (!(!isset($_FILES['image5']) || $_FILES['image5']['error'] == UPLOAD_ERR_NO_FILE)) {
        $image5 = getURL($_FILES['image5']['tmp_name']);
        array_push($images, $image5);
    }
    if (!(!isset($_FILES['image6']) || $_FILES['image6']['error'] == UPLOAD_ERR_NO_FILE)) {
        $image6 = getURL($_FILES['image6']['tmp_name']);
        array_push($images, $image6);
    }

    $qry1 = true;
    $qry2 = true;
    $qry3 = true;

    $sql = "UPDATE vendor set company_name='$business_name', bio='$about_business', website='$website', address='$address', company_logo='$company_logo'
     WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        errlog(mysqli_error($conn), $sql);
        $qry1 = false;
    }

    if ($banner_image != '') {
        $sqlStore = "INSERT INTO store_detail (site_id, vendor_id, store_banner, about_business, website, address) VALUES 
        ($this_site_id, $id, '$banner_image', '$about_business', '$website', '$address')";
        $resStore = mysqli_query($conn, $sqlStore);
        if (!$resStore) {
            errlog(mysqli_error($conn), $sqlStore);
            $qry2 = false;
        }
    }

    if(sizeof($images) > 0){
        for ($i = 0; $i < sizeof($images); $i++) {
            $sqlWarehouse = "INSERT INTO warehouse_image (site_id, vendor_id, image_url) VALUES 
            ($this_site_id, $id, '$images[$i]')";
    
            $resWarehouse = mysqli_query($conn, $sqlWarehouse);
    
            if (!$resWarehouse) {
                errlog(mysqli_error($conn), $sqlWarehouse);
                $qry3 = false;
            }
        }
    }

}

?>
