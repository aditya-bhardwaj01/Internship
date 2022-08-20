<?php
include "config.php";

if(isset($_POST['value'])){
    $value = $_POST['value'];

    $sql = "SELECT id, name, vendor_type, email FROM vendor WHERE name LIKE '{$value}%'";

    $res = mysqli_query($conn, $sql);

    $html = '<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">Vendor type</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>';

    if(mysqli_num_rows($res) > 0){
        foreach($res as $row){
            $html .= '<tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['vendor_type'].'</td>
                        <td>'.$row['email'].'</td>
                      </tr>';
        }

        $html .= '</tbody></table>';
        echo $html;
    }
    else{
        echo "<h6 class='text-danger text-center mt-3'>No data found</h6>";
    }
}
?>