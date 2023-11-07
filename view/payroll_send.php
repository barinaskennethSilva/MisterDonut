            <?php
            session_start();
            include("db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$sql = "SELECT * FROM Time_Sheet  ";

$result = $conn->query($sql);
 if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
  $employee_id = $row['Employee_id'];
  $Full_Name = $row['Full_Name'];
  $Employee_Name = $row['employee_name'];
 $Employee_Position = $row['Employee_Position'];
 $Employee_email = $row['Employee_email'];
 //$Employee_email = "kbarinas0@gmail.com";
 $total_rate = $row['total_rate'];
$totalDeduct = $row['totalDeduct'];
$salary_release = "3,500";
$payroll_number = "Replace with payroll number";
  $date_release = "Replace with date release";
  $salary_status = "Replace with salary status";
  
 
require '../file/vendor/phpmailer/phpmailer/src/Exception.php';
require '../file/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../file/vendor/phpmailer/phpmailer/src/SMTP.php'; 
  
  $message = "We are pleased to inform you that your bi-monthly salary for the current month has been successfully deposited in your designated bank account. The amount you received is $salary_release please check your bank account to verify receipt of payment";
  $mail = new PHPMailer;
  $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "patenooliver5@gmail.com";
    $mail->Password = 'rccnikkobchmcowv'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom($Employee_email);
$mail->addAddress($Employee_email, 'Recipient Name');
$mail->Subject = 'New Message';
$mail->Body = $message;
if ($mail->send()) {
   echo '<script>alert("Email sent successfully.")</script>';
   header('Location: Payroll.php');
} else {
    echo 'Error: ' . $mail->ErrorInfo;
}
  
  
  
  }
   
 }
  
  ?>