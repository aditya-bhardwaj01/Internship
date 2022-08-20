<?php

include "config/connection.php";
$type = $_POST['type'];

if($type == 1 || $type == 2){
    $data = $_POST['data'];
    $stringId = '';
    for($i=0; $i<sizeof($data); $i++){
        $stringId .= $data[$i];
    
        if($i != sizeof($data)-1){
            $stringId .= ',';
        }
    }
}

if($type == 1){
    $sql = "UPDATE marketplace_initiatives SET marketplaces = '$stringId'";
    $res = mysqli_query($conn, $sql);
    if($res){
        echo "SUCCESS";
    }
    else{
        echo "ERROR";
    }
}
else if($type == 2){
    $sql = "UPDATE marketplace_initiatives SET self_templates = '$stringId'";
    $res = mysqli_query($conn, $sql);
    if($res){
        echo "SUCCESS";
    }
    else{
        echo "ERROR";
    }
}

else if($type == 3){
    if(isset($_POST['start'])){
        $start = $_POST['start'];
        $sql = "SELECT * FROM marketplace_digital_products WHERE marketplace_id = 25 AND status = 1 LIMIT $start, 6";
        $res = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($res) > 0){
            $html = '';
            while($row=mysqli_fetch_assoc($res)) {
                $function = 'fetchInitiatives(2,'.$row['id'].','.'tempCheckDefault'.$row['id'].')';
                $html .= '<div class="template-data col-sm-6" style="padding: 1em;">
                <img style="height: 200px; width: 100%;" src="'.$row['banner'].'" alt="template">
                <div class="form-check">
                    <div style="text-align: center;">
                        <input class="form-check-input" type="checkbox" value="" check-status="unchecked" 
                        id="tempCheckDefault'.$row['id'].'" 
                        onchange="'.$function.'">
                        <label class="form-check-label" for="tempCheckDefault'.$row['id'].'">
                            <h5>'.$row['title'].'</h5>
                        </label>
                    </div>
                
                </div>
                
                <div style="text-align: center;">
                    <a type="button" class="btn btn-warning" href="template_detail.php?id='.urlencode(base64_encode($row['id'])).'">
                        View
                    </a>
                </div>
                </div>';
            }
            echo $html;
        }
    }
}


?>