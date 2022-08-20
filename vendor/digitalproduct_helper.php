<?php

include '../config/connection.php';
$change = $_POST['type'];
$changeId = $_POST['changeId'];
$rowId = $_POST['rowId'];

$sql = "UPDATE marketplace_digital_products set $change=$changeId where id=$rowId and site_id=$this_site_id";
$res = mysqli_query($conn, $sql);
if (!$res) {
    errlog(mysqli_error($conn), $sql);
}

if($res) echo 1;
else echo 0;

?>