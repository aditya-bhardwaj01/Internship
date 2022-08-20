<?php

include "config/connection.php";

if (isset($_POST['cancel_btn_set'])){
    $cancelid = $_POST['cancelid'];
    echo $cancelid;
    $sql = "UPDATE orders SET order_status = 10 WHERE id = $cancelid AND site_id = $this_site_id";
    $res = mysqli_query($conn, $sql);
    if(!$res){
        errlog(mysqli_error($conn), $sql);
    }
}

?>