<?php
include("db.php");
if (isset($_POST['newList'])) {
$employee_id = $_POST['employee_id'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$MiddleName = $_POST['MiddleName'];
$Extension = $_POST['Extension'];
$Gender = $_POST['Gender'];
$ContNum = $_POST['ContNum'];
$address = $_POST['address'];
$Position = $_POST['Position'];

/////////////////////
$manager = "750";
$cashier = "500";
$chief = "650";
$seller = "450";
if (empty($employee_id) || empty($FirstName) || empty($LastName) || empty($MiddleName) || empty($Extension) || empty($Gender) || empty($ContNum) || empty($address)) {
//header("Location: employeeForm.php");
echo"<script>alert('All Field Required to Fill')</script>";
header("Location: employeeForm.php");
}
else if ($Position == "manager") {
$query = "INSERT INTO Employee(Employee_id,Emplo_LastName,Emplo_FirstName,Emplo_MiddleName,Emplo_Extension,Emplo_Gender,Emplo_ContNum,Emplo_Address,Emplo_Position,rate) VALUES('$employee_id','$LastName','$FirstName','$MiddleName','$Extension','$Gender','$ContNum','$address','$Position','$manager')";
mysqli_query($conn,$query);
header("Location: employeeForm.php");
}
if ($Position == "cashier") {
$query = "INSERT INTO Employee(Employee_id,Emplo_LastName,Emplo_FirstName,Emplo_MiddleName,Emplo_Extension,Emplo_Gender,Emplo_ContNum,Emplo_Address,Emplo_Position,rate) VALUES('$employee_id','$LastName','$FirstName','$MiddleName','$Extension','$Gender','$ContNum','$address','$Position','$cashier')";
mysqli_query($conn,$query);
header("Location: employeeForm.php");
}
else if ($Position == "chief") {
$query = "INSERT INTO Employee(Employee_id,Emplo_LastName,Emplo_FirstName,Emplo_MiddleName,Emplo_Extension,Emplo_Gender,Emplo_ContNum,Emplo_Address,Emplo_Position,rate) VALUES('$employee_id','$LastName','$FirstName','$MiddleName','$Extension','$Gender','$ContNum','$address','$Position','$chief')";
mysqli_query($conn,$query);
header("Location: employeeForm.php");
}
else if ($Position == "seller") {
$query = "INSERT INTO Employee(Employee_id,Emplo_LastName,Emplo_FirstName,Emplo_MiddleName,Emplo_Extension,Emplo_Gender,Emplo_ContNum,Emplo_Address,Emplo_Position,rate) VALUES('$employee_id','$LastName','$FirstName','$MiddleName','$Extension','$Gender','$ContNum','$address','$Position','$seller')";
mysqli_query($conn,$query);
header("Location: employeeForm.php");
}
}
?>