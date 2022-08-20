<?php

use LDAP\Result;

include 'config/connection.php';
$title = $_POST['product_title'];

$conn = mysqli_connect("localhost", "root", "", "ideal_village") or die("Connection failed");
$sql = "SELECT cat_id, description, SUK, tags, vendor_id, sub_cat_id FROM marketplace_products WHERE product_title='$title'";

$result = mysqli_query($conn, $sql);
$data = array();

if(!$result){
    errlog(mysqli_error($conn), $sql) ;
}
else{
    while($row = mysqli_fetch_assoc(($result))){
        $data[] = $row;
    }
    echo json_encode($data);
}
?>