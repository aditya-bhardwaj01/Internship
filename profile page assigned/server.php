<?php

session_start();
if(isset($_POST)){
    $vendor_id = $_SESSION['vendor_id'];

    $vendor_name = $_POST["vendor_name"];
    $vendor_address = $_POST["vendor_address"];
    $vendor_phone = $_POST["vendor_phone"];
    $vendor_email = $_POST["vendor_email"];
    
    $conn = mysqli_connect("localhost", "root", "", "ideal_village") or die("Connection failed");
    
    $sql = "UPDATE vendor set name='$vendor_name', city='$vendor_address', mobile='$vendor_phone', email='$vendor_email' WHERE id='$vendor_id'";
    
    $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
    
    if($result){
        echo 1;
    }
    else{
        echo 0;
    }
}

?>