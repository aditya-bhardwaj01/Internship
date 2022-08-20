<?php 
$conn = mysqli_connect("localhost", "root", "", "ideal_village");
if(!$conn){
    echo "Connection failed".mysqli_connect_error();
}
?>