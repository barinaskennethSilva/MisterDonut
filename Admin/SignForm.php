<?php
include("../db/db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../file/vendor/phpmailer/phpmailer/src/Exception.php';
require '../file/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../file/vendor/phpmailer/phpmailer/src/SMTP.php';
if (isset($_POST['SignIn'])) {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $rand_id = rand(time(), 10000);
  
$message = "Thank you for Signing up with Mister Donuts here the verification code
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
    header('Location: ./SignIn.php');
} else {
    echo 'Error: ' . $mail->ErrorInfo;
}

  if (empty($name) || empty($email) || empty($password)) {
$_SESSION['message'] = 'All Field Required to Fill';
header('Location: ./SignIn.php');
  }
  else{
$query = "INSERT INTO Admin(ad_name, ad_email, ad_password,ad_verify_code) VALUES('$name','$email','$password','$rand_id')";
mysqli_query($conn, $query);
header('Location: ./Verify_code.php');
echo"<script>alert('Register Successful')</script>";
  }

}

?>