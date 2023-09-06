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
if (empty($employee_id) || empty($FirstName) || empty($LastName) || empty($MiddleName) || empty($Extension) || empty($Gender) || empty($ContNum) || empty($address)) {
//header("Location: employeeForm.php");
echo"<script>alert('All Field Required to Fill')</script>";
header("Location: employeeForm.php");
}
else{
$query = "INSERT INTO Employee(Employee_id,Emplo_LastName,Emplo_FirstName,Emplo_MiddleName,Emplo_Extension,Emplo_Gender,Emplo_ContNum,Emplo_Address,Emplo_Position) VALUES('$employee_id','$LastName','$FirstName','$MiddleName','$Extension','$Gender','$ContNum','$address','$Position')";

mysqli_query($conn,$query);

echo"<script>alert('Register Successfully')</script>";
header("Location: employeeForm.php");
}
}
?>