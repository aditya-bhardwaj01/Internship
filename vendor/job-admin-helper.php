<?php
include "../config/connection.php";
if (isset($_POST['updateStatus'])) {
    $coups = realEscape($_POST['updateStatus']);
    $pid = realEscape($_POST['product']);

    $qry = "UPDATE marketplace_jobs set status = '$coups' where id = '$pid' and site_id = '$this_site_id' ";
    if (mysqli_query($conn, $qry)) {
        echo 1;
    } else {
        errlog(mysqli_error($conn), $qry);
        echo 0;
    }
}
else if (isset($_POST['updateLabel'])) {
    $coups = realEscape($_POST['updateLabel']);
    $pid = realEscape($_POST['product']);
    $qry = "UPDATE marketplace_jobs set age_label = '$coups' where id = '$pid' and site_id = '$this_site_id' ";
    if (mysqli_query($conn, $qry)) {
        echo 1;
    } else {
        errlog(mysqli_error($conn), $qry);
        echo 0;
    }
}
else if (isset($_POST['delete_btn_set'])) {
    $del_id=realEscape($_POST['deleteid']);
    $query="delete from marketplace_jobs where id ='$del_id'";
    $r=mysqli_query($conn,$query);
}
?>