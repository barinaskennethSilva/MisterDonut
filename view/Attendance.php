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

$manager = "750";
$cashier = "500";
$chief = "650";
$seller = "450";


$Salary_Status = $_POST['Salary_Status'];
if (empty($employee_id) || empty($Full_Name) || empty($time_In) || empty($Date)) {
//header("Location: employeeForm.php");
echo"<script>alert('All Field Required to Fill')</script>";
header("Location: employeeForm.php");
}
else{
  if ($Employee_Position == "manager") {
   $query = "INSERT INTO Time_Sheet(Employee_id,Full_Name,Date,time_In,time_Out,Employee_Position,Num_Absent,No_Day_work,Amount_Rate) VALUES('$employee_id','$Full_Name','$Date','$time_In','$time_Out','$Employee_Position','$Num_Absent','$no_present','$manager')";
  }
  else if ($Employee_Position == "cashier") {
$query = "INSERT INTO Time_Sheet(Employee_id,Full_Name,Date,time_In,time_Out,Employee_Position,Num_Absent,No_Day_work,Amount_Rate) VALUES('$employee_id','$Full_Name','$Date','$time_In','$time_Out','$Employee_Position','$Num_Absent','$no_present','$cashier')";
}
else if ($Employee_Position == "chief") {
$query = "INSERT INTO Time_Sheet(Employee_id,Full_Name,Date,time_In,time_Out,Employee_Position,Num_Absent,No_Day_work,Amount_Rate) VALUES('$employee_id','$Full_Name','$Date','$time_In','$time_Out','$Employee_Position','$Num_Absent','$no_present','$chief')";
}
else if ($Employee_Position == "seller") {
$query = "INSERT INTO Time_Sheet(Employee_id,Full_Name,Date,time_In,time_Out,Employee_Position,Num_Absent,No_Day_work,Amount_Rate) VALUES('$employee_id','$Full_Name','$Date','$time_In','$time_Out','$Employee_Position','$Num_Absent','$no_present','$seller')";
}
mysqli_query($conn,$query);

echo"<script>alert('Register Successfully')</script>";
header("Location: Employee_attendance.php");
}
}
?>