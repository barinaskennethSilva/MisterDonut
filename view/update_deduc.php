<?php
 @include 'db.php';
$id = $_GET['edit_deduc'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
if(isset($_POST['myduc_update'])){
 $employee_id = $_POST['employee_id'];
  $employee_name = $_POST['employee_name'];
  $employee_position = $_POST['employee_position'];
    $sss_contri = $_POST['sss_contri'];
    $pagibig_contri = $_POST['pagibig_contri'];
 $phil_contri = $_POST['phil_contri'];   
if(empty($employee_id) || empty($employee_name) || empty($sss_contri) ){

      $message[] = 'please fill out all!';    

   }else{

      $update_data = "UPDATE deduction SET employee_id='$employee_id',employee_name='$employee_name' ,sss_contri='$sss_contri',pagibig_contri='$pagibig_contri',phil_contri='$phil_contri' WHERE id = '$id'";
 $upload = mysqli_query($conn,$update_data);
if($upload){

      header("Location: employeeForm.php");

  echo"<script>alert ('Successful Update Record')</script>";
  exit();
      }else{
header("Location: employeeForm.php");
  echo"<script>alert ('please fill out all!')</script>";
  exit();
      }
   }
echo"<script>alert('hello world')</script>";
}

}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Deduction Record</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/view.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
     <?php

  @include 'db.php';

  $id = $_GET['edit'];
      $select = mysqli_query($conn, "SELECT * FROM deduction WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?>
  <div class="my_form w-50 mt-5 shadow m-auto">
    <div class="topForm w-100 bg-dark p-2 text-white  text-center"> 
    <h1 class="fw-bold">Update Deduction Form</h1> 
    </div>
    <form class="myform p-2" action="" method="post">
    <div class="mb-3">
   <label for="employee_id" class="form-label">Employee ID:</label>
   <input type="text" name="employee_id" id="employee_id" class="form-control" value="<?php echo $row['employee_id']; ?>"/>   
    </div>  
       <div class="mb-3">
   <label for="employee_name" class="form-label">Employee Name:</label>
   <input type="text" name="employee_name" id="employee_name" class="form-control" value="<?php echo $row['employee_name']; ?>"/>   
    </div>  
         <div class="mb-3">
  <label for="sss" class="form-label">SSS Contribution:</label>
   <input type="text" name="sss" id="sss" class="form-control" value="<?php echo $row['sss_contri']; ?>"/>      </div>    
            <div class="mb-3">
  <label for="pagibig_contri" class="form-label">PagIbig Contribution:</label>
   <input type="text" name="pagibig_contri" id="pagibig_contri" class="form-control"value="<?php echo $row['pagibig_contri']; ?>" />      </div>    
   
       <div class="mb-3">
  <label for="phil_contri" class="form-label">Phil Health Contribution:</label>
   <input type="text" name="phil_contri" id="phil_contri" class="form-control" value="<?php echo $row['phil_contri']; ?>"/>      </div>    
          <div class="mt-3 d-flex w-100">
            <input type="submit" class="btn btn-primary fw-bold fw-bold w-75 mb-3" name="myduc_update" value="Update Deduction">
     <a href="Deduction.php" type="button" class="btn btn-danger w-75 ms-3 fw-bold mb-3"onclick="closeForm()">Close</a>      
</div>
   
    </form>
  </div>  
  <?php }?>
  </body>
</html>