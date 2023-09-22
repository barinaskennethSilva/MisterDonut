<?php
include("db.php");
$id = $_GET['edit'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$time_Out = $_POST['time_Out'];
if(isset($_POST['update_record'])){
  $Full_Name = $row['Full_Name'];
}
else{
  $update_data = "UPDATE Time_Sheet SET time_Out='$time_Out' WHERE id = '$id'";

 $Time_Out = mysqli_query($conn,$update_data);
      if($Time_Out){
      header("Location: Employee_attendance.php");

  echo"<script>alert ('Successful Update Record')</script>";
  exit();
      }else{
header("Location: Time_Out.php");
  echo"<script>alert ('please fill out all!')</script>";
  exit();
      }
  
}
}
?>
  <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/style.css">
  </head>

<body>
    <nav class="navbar navbar-expand-lg navbar-warning bg-danger">
  <div class="container-fluid">

    <a class="navbar-brand text-white fw-bold" href="Employee_attendance.php"><i class="fa fa-arrow-left me-3"></i>Employee Attendance</a>

    </div>
</nav>
  <center>
  <div class='time_Out w-50 bg-white ms-3 shadow mt-5'>
   <div class='bg-danger text-center fw-bold text-white p- w-100'>
     <label for='time_Out'>Time Out</label>
   </div>
        <?php
  @include 'db.php';
  $id = $_GET['edit'];
      $select = mysqli_query($conn, "SELECT * FROM Time_Sheet WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?>
    <form class='p-2' method='post'>
              <div class='mt-3'>
              
 <input type='text' id='Full_Name' class='form-control' value='
  <?php echo $row['Full_Name']; ?>
' /></div>
     <div class='mt-3'>       
                 <div class='mt-3'>
    <input type='time' name='time_Out' id='time_Out' class='form-control' placeholder='time Out' />    </div>
         <div class='mt-3'>
  <input type='submit' class='btn btn-primary fw-bold w-100' name='time_out'id='Save' value='Time Out' />
</div>
    </form>
            <?php }; ?>
   </div>
   </center>
   </body>

</html>
