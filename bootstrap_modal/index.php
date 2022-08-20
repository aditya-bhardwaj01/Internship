<!DOCTYPE html>
<html>

<head>
  <title>Webslesson Tutorial | Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
  <br /><br />
  <div class="container" style="width:700px;">
    <h3 align="center">Insert Data Through Bootstrap Modal by using Ajax PHP</h3>
    <br />
    <div class="table-responsive">
      <div align="right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDataCenter">
          Add
        </button>


      </div>
      <br />
      <div id="employee_table">
        <table class="table table-bordered">
          <tr>
            <th width="70%">Employee Name</th>
            <th width="30%">View</th>
          </tr>
          <?php
          $connect = mysqli_connect("localhost", "root", "", "bootstrap_modal");
          $sql = "SELECT * FROM tbl_employee";
          $res = mysqli_query($connect, $sql);
          foreach ($res as $row) {

          ?>
            <tr>
              <td><?php echo $row['name']; ?></td>
              <td>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewData<?php echo $row['id']; ?>">
                View
              </button>
              </td>

            <?php } ?>
            </tr>
        </table>
      </div>
    </div>
  </div>
</body>

</html>

<div class="modal fade" id="addDataCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PHP Ajax Insert Data in MySQL By Using Bootstrap Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <label>Enter Employee Name</label>
          <input type="text" name="name" id="name" class="form-control" />
          <br />
          <label>Enter Employee Address</label>
          <textarea name="address" id="address" class="form-control"></textarea>
          <br />
          <label>Select Gender</label>
          <select name="gender" id="gender" class="form-control">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
          <br />
          <label>Enter Designation</label>
          <input type="text" name="designation" id="designation" class="form-control" />
          <br />
          <label>Enter Age</label>
          <input type="text" name="age" id="age" class="form-control" />
          <br />
          <button class="btn btn-success" onclick="submitData()">Insert</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
  
  function submitData(){
    var name = document.getElementById("name").value;
    var address = document.getElementById("address").value;
    var gender = document.getElementById("gender").value;
    var designation = document.getElementById("designation").value;
    var age = document.getElementById("age").value;
    
    $.ajax({
      url: "insert.php",
      method: "POST",
      data: {
        name: name,
        address: address,
        gender: gender,
        designation: designation, 
        age: age
      },
      success: function(response) {
        $("#employee_table").html("");
        $("#employee_table").html(response);
      }
    })
  }

</script>