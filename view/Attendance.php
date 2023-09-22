<?php
include("db.php");
if (isset($_POST['Save'])) {
$employee_id = $_POST['employee_id'];
$Full_Name = $_POST['Full_Name'];
$Date = $_POST['date'];
$time_In = $_POST['time_In'];
$time_Out = " ";
$Employee_Position = $_POST['Employee_Position'];
$Num_Absent = $_POST['Num_Absent'];
$no_present = $_POST['no_present'];
$Amount_Rate = $_POST['Amount_Rate'];
$Total_Rate = $_POST['Total_Rate'];

$Salary_Status = $_POST['Salary_Status'];
if (empty($employee_id) || empty($Full_Name) || empty($time_In) || empty($Date)) {
//header("Location: employeeForm.php");
echo"<script>alert('All Field Required to Fill')</script>";
header("Location: employeeForm.php");
}
else{
$query = "INSERT INTO Time_Sheet(Employee_id,Full_Name,Date,time_In,time_Out,Employee_Position,Num_Absent,No_Day_work) VALUES('$employee_id','$Full_Name','$Date','$time_In','$time_Out','$Employee_Position','$Num_Absent','$no_present')";

mysqli_query($conn,$query);

echo"<script>alert('Register Successfully')</script>";
header("Location: Employee_attendance.php");
}
}
?>