<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Attendance</title>
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
      <h1>Daily Date Record</h1>
    </center>
          <div class=" shadow newList" id="recList">
  <div class="bg-danger text-center fw-bold text-white h3 p-4">
  Daily Time Record 
  <i class="fa fa-close closeX"id="closeX2"></i>
  </div>  
          <form class="shadow p-4 myform" action="Attendance.php" method="POST">
    <div class="mt-3">
   <label for="employee_id">Employee Id</label>
   <input type="text" name="employee_id" id="employee_id" class="form-control" placeholder="Employee Id" />    
     </div>
         <div class="mt-3">
   <label for="LastName">Full Name</label>
   <input type="text" name="Full_Name" id="Full_Name" class="form-control" placeholder="Full Name" />    </div>
            <div class="mt-3">
   <label for="time_In">time In</label>
  <input type="time" name="time_In" id="time_In" class="form-control" placeholder="time In" />    </div>
 <!----- Subject for Erease ------------->
   <div class="mt-3">
   <label for="employee_id">Employee position</label>
 
  <select name="Employee_Position" id="Position" class="form-control">
   <option value="manager">manager</option>
   <option value="cashier">cashier</option>
   <option value="chief">chief</option>
   <option value="seller">seller</option>
 </select>
 
 
 </div>
 <!---------------------------------------> 
  <input type="hidden" name="no_present" id="no_present" value="1" class="form-control"/> 
       <div class="mt-3">
   <label for="date">Date</label>
 <input type="date" name="date" id="date" placeholder="Date" class="form-control"/> </div>   
<div class="mt-3">
  <input type="submit" class=" btn btn-primary fw-bold w-100" name="Save" id="Save" value="Save Working Days" />
</div>
   </form>  
      </div>
  <!--------- Display Data ---------------> 
  <button class="btn btn-primary mb-2 ms-2 rec_attendance" type="button">Attendance</button>
  <table class="table table-hover">
  <thead>
    <tr class="bg-danger text-center text-white">
       <th scope="col">Employee ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Position</th>
     <th scope="col">Date</th>
      <th scope="col">Time in</th>
      <th scope="col">Time out</th>
          <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <tr> 
       <?php
session_start();
include("db.php");
$sql = "SELECT * FROM `Time_Sheet`";
$result = mysqli_query($conn,$sql);
if ($result) {
while($row = mysqli_fetch_assoc($result)){
$id = $row['id'];
 $employee_id = $row['Employee_id'];
  $Full_Name = $row['Full_Name'];
  $Date = $row['Date'];
$time_In = $row['time_In'];
$time_Out = $row['time_Out'];
$Employee_Position = $row['Employee_Position'];
  echo" <td> 001</td>
    <td> $Full_Name </td>
      <td> $Employee_Position</td>
    <td> $Date</td>
   <td> $time_In</td>
   <td> $time_Out</td>
    <td> 
    <div class='d-flex'>
    <a href='Time_Out.php?edit=$id' class=' btn btn-warning fw-bold  text-white' name='Save' id='Save' >Time out</a>  <button type='button' class=' btn btn-warning fw-bold ms-3 text-white' name='Save' id='Save'><i class='fa fa-print'></i></button>
    </div>
    </td>
    </tr>";
}
}
?>
      </tbody>
      </table>
   </div> 
    <script type="text/javascript" charset="utf-8">
    const close2 = document.querySelector('#closeX2')
    const rec_attendance = document.querySelector('.rec_attendance')
      //DTR function
close2.addEventListener("click", function(){
  document.getElementById('recList').style.display="none";
});
rec_attendance.addEventListener("click", function(){
  document.getElementById('recList').style.display="block";
});
    </script>
  </body>
</html>