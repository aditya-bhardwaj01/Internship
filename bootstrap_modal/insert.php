<?php
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "bootstrap_modal");
if(!empty($_POST)){
     $name = $_POST['name'];
     $address = $_POST['address'];
     $gender = $_POST['gender'];
     $designation = $_POST['designation'];
     $age = $_POST['age'];

     $html = '<table class="table table-bordered">
     <tr>
       <th width="70%">Employee Name</th>
       <th width="30%">View</th>
     </tr>';

     $insert = "INSERT INTO tbl_employee (name, address, gender, designation, age)
     VALUES ('$name', '$address', '$gender', '$designation', $age)";
     if(mysqli_query($connect, $insert)){
          $sql = "SELECT * FROM tbl_employee";
          $res = mysqli_query($connect, $sql);

          foreach($res as $row){
               $html .= '<tr>
               <td>'.$row['name'].'</td>
               <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewData'.$row['id'].'">
                         View
                    </button>
               </td>
             </tr>';
          }

          $html .= '</table>';
          echo $html;
     }
     else{
          echo 1;
     }
}
?>
