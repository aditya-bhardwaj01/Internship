<?php

if(isset($_POST['priority'])){
    $priority = $_POST['priority'];
    
    $sql = "";

    $res = mysqli_query($conn, $sql);

    if($res){
        echo 1;
    }
    else{
        echo 0;
    }
}

?>