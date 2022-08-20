<?php
require_once "config/connection.php";
$sqlmarketplace = "SELECT marketplace_ids FROM site_orders WHERE alloted_site_id = $this_site_id and status = 1";
$resmarketplace = mysqli_query($conn, $sqlmarketplace);
$marketplace_ids = array();
foreach($resmarketplace as $row) {
    $temp = explode(',', $row['marketplace_ids']);
    foreach($temp as $id){
        array_push($marketplace_ids, $id);
    }
}
?>