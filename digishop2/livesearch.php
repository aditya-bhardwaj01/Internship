<?php

include "config/connection.php";

if(isset($_POST['value'])){
    $value = $_POST['value'];

    $sql = "SELECT distinct(cat_id) FROM marketplace_digital_products WHERE cat_id LIKE '{$value}%'";

    $res = mysqli_query($conn, $sql);

    $html = '<div style="background-color: white; padding: 1em; border-radius: 10px; margin-top: 0;">';

    if(mysqli_num_rows($res) > 0){
        foreach($res as $row){
            $a = "'".$row['cat_id']."'";
            $html .='<p style="color: black; text-align: left; margin: 6px; cursor: pointer;" onclick="openResults('.$a.')">
                        '.$row['cat_id'].'
                    </p>
                    <hr style="color: black; margin: 3px;">';
        }
        $html .= '</div>';
        echo $html;
    }
    else{
        echo "<h6 class='text-danger text-center mt-3'>No data found</h6>";
    }
}

?>