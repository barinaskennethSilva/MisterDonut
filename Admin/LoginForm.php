<?php
include("db.php");

if(!empty($_SESSION["id"])){
//  header('Location: ../view/Header.php');
  header('Location: Verify_login.php');
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../file/vendor/phpmailer/phpmailer/src/Exception.php';
require '../file/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../file/vendor/phpmailer/phpmailer/src/SMTP.php';
if(isset($_POST["login"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
//-------------update code------------------
if ($rand_id = rand(time(), 10000)) {
$query = mysqli_query($conn,"UPDATE Admin SET ad_verify_code = '$rand_id' ");
$message = "Thank you for Login with Mister Donuts here the verification code
" . $rand_id;
$mail = new PHPMailer;
  $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "patenooliver5@gmail.com";
    $mail->Password = 'rccnikkobchmcowv'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom($email);
$mail->addAddress($email, 'Recipient Name');
$mail->Subject = 'New Message';
$mail->Body = $message;
if ($mail->send()) {
    echo '<script>alert("Email sent successfully.")</script>';
    header('Location: ./login.php');
} else {
    echo 'Error: ' . $mail->ErrorInfo;
}
}

//-------------update code------------------

  $result = mysqli_query($conn, "SELECT * FROM Admin WHERE  ad_email = '$email'");
  $row = mysqli_fetch_assoc($result);
 
  if(empty($email) && empty($password)){
      echo"<script>alert('All field empty')</script>";
    header('Location: Login.php');  
    }
    
  if($email != $row['ad_email']){
      echo"<script>alert('Not Register')</script>";
  header('Location: Login.php');  
    }
  
  if(mysqli_num_rows($result) > 0){
  // Under Construction
  if( $password == $row['ad_password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header('Location: Verify_login.php');
    }

    
   
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
      header('Location: Login.php');
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>