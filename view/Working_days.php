<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/view.css">
  <script async src="js/view.js"></script>
  </head>
  <body>

       <?php include"Header.php";?>
 <div class="input-container">
<center>
<h1> Record Employee Attendance List </h1>
</center>
 <!--------- Create Data --------------->
  <div class="newList shadow" id="newList">
  <div class="bg-danger text-center fw-bold text-white h3 p-4">
  Daily Time Record 
  <i class="fa fa-close"id='rec_attendance'></i>
  </div>  
 
   <form class="myform p-4" action="Record.php" method="POST" >
     <div class="mt-3">
   <label for="employee_id">Employee Id</label>
   <input type="text" name="employee_id" id="employee_id" class="form-control" placeholder="Employee Id" />    
     </div>
         <div class="mt-3">
   <label for="Full_Name">Full Name</label>
   <input type="text" name="Full_Name" id="Full_Name" class="form-control" placeholder="Full Name" />    </div>
    
       <div class="mt-3">
   <label for="Employee_Position">Employee Position</label>
   <input type="text" name="Employee_Position" id="Employee_Position" class="form-control" placeholder="Employee Position" />    </div> 
    
            <div class="mt-3">
   <label for="Num_Absent">No. of Absent</label>
  <input type="text" name="Num_Absent" id="Num_Absent" class="form-control" placeholder="No. of Absent" />   </div>
   
 <div class="mt-3">
   <label for="No_Day_work">Total Days of Work:</label>
 <input type="text" name="No_Day_work" id="No_Day_work" class="form-control" placeholder="Number of Day Work" autocomplete="off"/>    </div>   
   
     <div class="mt-3">
  <label for="Total_Rate">Total Rate</label>
 <input type="text" class="form-control" name="Total_Rate" id="Total_Rate" placeholder="Total Rate" />    </div>   
   
        <div class="mt-3">
 <label for="Rate">Amount Rate</label>  
   <select name="Rate" class="form-control" id="Rate">
   <option value="350" >350</option>
   <option value="450">450</option>   
   <option value="500">500</option>
   </select>
    </div>   
       <div class="mt-3">
   <label for="date">Date</label>
 <input type="date" name="date" id="date" placeholder="Date" class="form-control"/> </div>   
 
      <div class="mt-3">
 <label for="Salary_Status">Salary Status</label>
<input type="text" name="Salary_Status" id="Salary_Status" class="form-control" placeholder="Salary Status" />    </div>
 
<div class="mt-3">
  <input type="submit" class=" btn btn-primary fw-bold w-100" name="Save" id="Save" value="Save Working Days" />
  <input type="button" class=" btn btn-warning fw-bold w-100 mt-3 text-white" name="Save" id="Save" value="Print Attendance" />
</div>
   </form>  
    </div>

 <!--------- Display Data --------------->   <table class="table table-hover">
  <thead>
    <tr class="bg-danger text-white">
      <th scope="col">Full Name</th>
     <th scope="col">Position</th>
      <th scope="col">No. Absent</th>
      <th scope="col">No. Work Days</th>
  <th scope="col">Rate per Days</th>   
<th scope="col">Total Rate</th>
    </tr>
  </thead>
  <tbody>
      <?php
session_start();
include("db.php");
$sql = "SELECT * FROM `Time_Sheet`";
$result = mysqli_query($conn,$sql);
if ($result) {
while($row = mysqli_fetch_assoc($result)){
$id = $row['id'];
 $Employee_id = $row['Employee_id'];
  $Full_Name = $row['Full_Name'];
  $Num_Absent = $row['Num_Absent'];
$No_Day_work = $row['No_Day_work'];
$Employee_Position = $row['Employee_Position'];
$rate = $row['Amount_Rate'];
$Total_Rate = $row['Total_Rate'];
  echo" <tr> 
    <td>$Full_Name</td>
    <td> $Employee_Position </td>
  <td> $Num_Absent </td>
   <td> $No_Day_work </td>
      <td> $rate </td>
   <td> $Total_Rate </td>
      </tr> ";
}
}
?>
    <!--?php
session_start();
include("db.php");
$sql = "SELECT * FROM `Employee`";
$result = mysqli_query($conn,$sql);
if ($result) {
while($row = mysqli_fetch_assoc($result)){
$id = $row['id'];
 $employee_id = $row['Employee_id'];
  $FirstName = $row['Emplo_FirstName'];
  $MiddleName = $row['Emplo_MiddleName'];
$LastName = $row['Emplo_LastName'];
$Gender = $row['Emplo_Gender'];
$Address = $row['Emplo_Address'];
$Position = $row['Emplo_Position'];
$Extension = $row['Emplo_Extension'];
$ContNum = $row['Emplo_ContNum'];

  echo"    <tr>
      <th scope='row'>$employee_id</th>
      <td><input type='text' value='$FirstName $MiddleName $LastName'style='width:180px; background-color: transparent;border:none; outline:none;'disabled name='Employee_name'></td>
   <td>$Gender</td>
<td>$Address</td>
      <td>$Position</td>
      <td>  <a href='Delete.php?delete=$id'class='btn btn-danger ms-2 mt-2'> Delete</a>
   
      <a href='update_record.php?edit=$id' type='button' class='btn text-white btn-warning ms-2 mt-2' id='update'>Update</a></td>
    </tr>  ";
}
}
?--->
  </tbody>
</table>
</div>
  </body>
</html>