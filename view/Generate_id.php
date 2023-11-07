
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="css/view.css">
    <script async src="js/view.js"></script>
  </head>
  <body>
     <style>
       .generate_id{
         width: 300px;
         height: 300px;
         border: 1px solid #111;
         margin-left: 10px;
       }
       
    </style>
      <?php
include"Header.php"?>
  <div class="input-container">
    <h4 class="text-center mt-2">Create Employee ID</h4>
    <div class="d-flex">
<div class="id">
    <div class="generate_id" id="showData">
      
    </div>
  <button class="btn btn-primary mt-2 ms-2 w-100" type="button">Print</button>  
</div>
<form class="w-50 m-auto" action="generate_form.php" method="post">
  <div class="mb-3">
    <label for="Employee_Id" class="form-label">Employee Id</label>
    <input type="text" class="form-control" id="Employee_Id" data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" required name="Employee_Id">
   
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Employee Name</label>
    <input type="text" class="form-control" required id="Full_Name" data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" name="Full_Name">
  </div>
  <div class="mb-3">
    <label for="position" class="form-label">Employee Position</label>
    <input type="text" class="form-control" required id="Employee_Position" data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" name="Employee_Position">
  </div>
 <div class="mb-3">
    <label for="email" class="form-label">Employee Email</label>
    <input type="email" class="form-control" required id="Employee_email" data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" name="Employee_email">
  </div>
 <div class="mb-3">
    <label for="address" class="form-label">Employee Address</label>
    <input type="text" class="form-control" required id="Employee_address" data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" name="Employee_address">
  </div>
 <button type="submit" class="btn btn-primary w-100" id="qrId" name="generate_id">Generate Id</button>
</form>
 </div>
</div>

    <script>
      $(document).ready(function(){
        $('#qrId').click(function(){
       event.preventDefault();
var employeeIdValue = $("#Employee_Id").val(); 
var Employee_nameValue = $("#Full_Name").val(); 
var Employee_emailValue = $("#Employee_email").val();
var Employee_positionValue = $("#Employee_Position").val(); 
var Employee_addressValue = $("#Employee_address").val(); 
$.ajax({
            method:'POST',
            url:'generate_form.php',
            data: { generate_id:'hello', Employee_Id: employeeIdValue,Full_Name: Employee_nameValue,Employee_Position:Employee_positionValue,Employee_email:Employee_emailValue,Employee_address:Employee_addressValue}, // You can send data as needed
            success:function(response)
            {
              $("#showData").html(response);
            } 
          });
        });
      });
    </script>
  </body>
</html>