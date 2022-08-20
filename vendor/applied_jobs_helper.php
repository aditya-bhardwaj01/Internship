<?php

include "config/connection.php";

if (isset($_POST['block_btn_set'])){
    $blockId = $_POST['blockId'];
    $sql = "UPDATE response SET status = 'Rejected by candidate' WHERE id = $blockId AND site_id = $this_site_id";
    $res = mysqli_query($conn, $sql);
    if(!$res){
        errlog(mysqli_error($conn), $sql);
    }
}

?>