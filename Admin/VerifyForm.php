<?php
include('../db/db.php');
if (isset($_POST['verify-btn'])) {
  $verify_code = $_POST['verify-input'];
  
  if (empty($verify_code)) {
      echo"<script>alert('All field empty')</script>";
    header('Location: Verify_code.php');  
  }
  else
$result = mysqli_query($conn, "SELECT * FROM Admin WHERE  ad_verify_code = '$verify_code'");
  $row = mysqli_fetch_assoc($result);
  
  if(mysqli_num_rows($result) > 0){
  header('Location: ../view/index.php');
  }
  else{
echo"<script>alert('All field empty')</script>";
    header('Location: Verify_code.php'); 
  }
  }
  


?>