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
    <button type="button" class="btn btn-primary ms-2 mt-2 addList">Add List</button>
 <!--------- Create Data --------------->
  <div class="newList shadow" id="newList">
  <div class="bg-dark text-center fw-bold text-white h3 p-4">
  New Employee List  
  </div>  
 
   <form class="myform p-4" action="Record.php" method="POST" >
       <div class="d-flex">  
 <!--------------- form 1 -------------->     <div class="d-flex flex-column w-50">  <div class="mt-3">
   <label for="employee_id">Employee Id</label>
   <input type="text" name="employee_id" id="employee_id" class="form-control" placeholder="Employee Id" />    
     </div>
         <div class="mt-3">
   <label for="LastName">Last Name</label>
   <input type="text" name="LastName" id="LastName" class="form-control" placeholder="Last Name" />    </div>
            <div class="mt-3">
   <label for="LastName">First Name</label>
  <input type="text" name="FirstName" id="FirstName" class="form-control" placeholder="First Name" />    </div>
   
     <div class="mt-3">
 <label for="LastName">Middle Name</label>
<input type="text" name="MiddleName" id="MiddleName" class="form-control" placeholder="Middle Name" />    </div>
   
     <div class="mt-3">
   <label for="Extension">Extension</label>
 <input type="text" class="form-control" name="Extension" id="Extension" placeholder="Extension" />    </div>   
  </div> 
  <!--------------- form 2 -------------->  <div class="ms-3 d-flex flex-column w-50">  
        <div class="mt-3">
    <label for="Gender">Gender</label>
   <select name="Gender" class="form-control" id="Gender">
   <option disabled>Gender</option>
   <option value="Female">Female</option>
  <option value="Male">Male</option>   
   </select>
    </div>   
       <div class="mt-3">
   <label for="ContNum">Contact Number</label>
 <input type="tel" name="ContNum" id="ContNum" placeholder="Contact Number" maxlength="11" class="form-control"/> </div>   
 
 <div class="mt-3">
   <label for="address">Address</label>
 <input type="text" name="address" id="address" class="form-control" placeholder="Address" autocomplete="off"/>    </div>   
 <div class="mt-3">
   <label for="Position">Position</label>
 <select name="Position" id="Position" class="form-control">
   <option value="manager">manager</option>
   <option value="cashier">cashier</option>
   <option value="chief">chief</option>
   <option value="seller">seller</option>
 </select>
 
 </div>  </div> 


</div>
<div class="mt-3 d-flex">
  <input type="submit" class=" btn btn-primary fw-bold w-75 h-25" name="newList" id="newList" value="Record" />
    <button type="button" class="btn btn-danger w-75 ms-3 fw-bold mb-3 closeX">Close</button>      
</div>

   </form>  
    </div>

 <!--------- Display Data --------------->   <table class="mt-3 table table-hover">
  <thead>
    <tr class="bg-danger text-white">
      <th scope="col">Employee ID</th>
      <th scope="col">Full Name</th>
     <th scope="col">Gender</th>
    <th scope="col">Address</th>
      <th scope="col">Position</th>
      <th scope="col">Rate</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
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
$rate = $row['rate'];
  echo"    <tr>
      <th scope='row'>$employee_id</th>
      <td><input type='text' value='$FirstName $MiddleName $LastName'style='width:180px; background-color: transparent;border:none; outline:none;'disabled name='Employee_name'></td>
   <td>$Gender</td>
<td>$Address</td>
      <td>$Position</td>
      <td>$rate</td>
      <td>  <a href='Delete.php?delete=$id'class='btn btn-danger ms-2 mt-2'> Delete</a>
   
      <a href='update_record.php?edit=$id' type='button' class='btn text-white btn-warning ms-2 mt-2' id='update'>Update</a></td>
    </tr>  ";
}
}
?>
  </tbody>
</table>
</div>
  </body>
</html>