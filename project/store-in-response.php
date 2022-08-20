<?php
include "config/connection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['email'];
$msg = $_POST['msg'];
$vendor_id = $_POST['vendor_id'];

$sql = "UPDATE response SET message = '$msg', name = '$name', email = '$email' WHERE vendor_id = $vendor_id AND marketplace_id = 33";

$res = mysqli_query($conn, $sql);

if(!$res){
    echo 0;
} else {
    echo 1;
}

?>