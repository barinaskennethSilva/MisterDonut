<?php
include('db.php');
if (isset($_POST['verify-btn'])) {
  $veify_code = $_POST['verify-input'];
  
  if (empty($veify_code)) {
      echo"<script>alert('All field empty')</script>";
    header('Location: Verify_code.php');  
  }
  else
$result = mysqli_query($conn, "SELECT * FROM Admin WHERE  ad_verify_code = '$veify_code'");
  $row = mysqli_fetch_assoc($result);
  
  if(mysqli_num_rows($result) > 0){
  header('Location: ../view/home.php');
  }
  else{
echo"<script>alert('All field empty')</script>";
    header('Location: Verify_code.php'); 
  }
  }
  


?>