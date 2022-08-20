<?php
include '../config/connection.php';

if (isset($_POST['updateStatus'])) {
    $coups = realEscape($_POST['updateStatus']);
    $pid = realEscape($_POST['product']);

    $qry = "UPDATE order_details set status = '$coups' where id = '$pid' and site_id = '$this_site_id' ";
    if (mysqli_query($conn, $qry)) {
        echo 1;
    } else {
        errlog(mysqli_error($conn), $qry);
        echo 0;
    }
}
else if(isset($_POST['id']))
{
    $id = realEscape($_POST['id']);
    $sql = "DELETE from order_details where id = '$id'";
    $row = mysqli_query($conn, $sql);
    if ($row) {
        echo 1;
    } else {
        errlog(mysqli_error($conn), $sql1);
        echo 0;
    }
}
?>