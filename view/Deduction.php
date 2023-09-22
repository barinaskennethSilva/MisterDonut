<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Deduction Employee Benifits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/view.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <style>
        .form{
           width:80%;
           height:510px;
           z-index:90 !important;
           background:#fff;
           position: absolute;
           left:100px;
           display:none;
        }
        .topForm{
            background:#111;
            color:#fff;
            padding:10px;
            text-align:center;
        }
        .topForm h1{
            font-size:30px;
            font-weight: 700;
        }
    </style>
     <?php
include"Header.php"?>
  <div class="input-container">
    <button class="btn btn-primary mt-2 ms-2 fw-bold" onclick="openForm()">Add Deduction</button>
      <h2 class="text-center">Employee Benefits Deduction </h2> 
 <div class="form shadow" id="myform">
  <div class="topForm"> 
    <h1> Deduction Form</h1> 
    </div>
    <div class="mt-3 p-2"> 
    <form action="deduc.php" method="POST">
    <div class="d-flex">
 <!-------------- form 1 ----------------> 
     <div class="d-flex flex-column w-50">
 <div class="mb-3">
    <label for="employee_id" class="form-label fw-bold">Employee Id</label>
    <input type="text" class="form-control" name="employee_id" id="employee_id"autocomplete="off" placeholder="Employee Id">
  </div> 

        <div class="mb-3">
    <label for="employee_name" class="form-label fw-bold">Employee Name</label>
    <input type="text" class="form-control" name="employee_name" id="employee_name"autocomplete="off" placeholder="Employee Name">
  </div> 

      <div class="mb-3">
    <label for="employee_position" class="form-label fw-bold">Employee Position</label>
    <input type="text" class="form-control" name="employee_position" id="employee_position"autocomplete="off" placeholder="Employee Position">
  </div> 
     <div class="mb-3">
            <label for="deduction_date" class="form-label fw-bold"> Deduction Date</label>
            <input type="date" name="deduction_date" class="form-control">
        </div>
   </div> 
 <!-------------- form 2 ---------------->
     <div class="d-flex flex-column ms-3 w-50">
        <div class="mb-3">
    <label for="SSS" class="form-label fw-bold">SSS</label>
    <input type="text" class="form-control" name="sss_contri" id="SSS"autocomplete="off" placeholder="Input Amount">
  </div> 

        <div class="mb-3">
    <label for="PAGIBIG" class="form-label fw-bold">PAGIBIG</label>
    <input type="text" class="form-control" name="PAGIBIG" id="PAGIBIG"autocomplete="off"placeholder="Input Amount" >
  </div>

        <div class="mb-3">
            <label for="sss" class="form-label fw-bold">PHIL HEALTH</label>
            <input type="text" placeholder="Input Amount"name="phil_health" class="form-control">
        </div>

   <div class="mb-3">
            <label for="employee_salary" class="form-label fw-bold"> Employee Salary</label>
            <input type="text" placeholder="Input Amount"name="employee_salary" class="form-control">
        </div>



        <div class="mt-3 d-flex w-100" style="position:relative;right:150px">
            <input type="submit" class="btn btn-primary fw-bold fw-bold w-75 mb-3" name="myduc" value="Save an Deduction">
     <button type="button" class="btn btn-danger w-75 ms-3 fw-bold mb-3"onclick="closeForm()">Close</button>      
</div>
</div>
    </form>
 </div>   
</div>
 </div>
 <table class="table mt-3 table-hover my-table">
  <thead>
    <tr class="bg-danger text-white">
      <th scope="col">Employee ID</th>
      <th scope="col">Full Name</th>
     <th scope="col">Position</th>
      <th scope="col">Salary</th>
    <th scope="col">SSS Contribution</th>
      <th scope="col">PAG IBIG Contribution</th>
      <th scope="col">Phil Health Contribution</th>
       <th scope="col">Total Deduction</th>
     <th scope="col">Total Salary</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
session_start();
include("db.php");
$sql = "SELECT * FROM `deduction`";
$result = mysqli_query($conn,$sql);
if ($result) {
while($row = mysqli_fetch_assoc($result)){
$id = $row['id'];
 $employee_id = $row['employee_id'];
 $employee_name = $row['employee_name'];
 $employee_position = $row['employee_position'];
 $sss = $row['sss_contri'];
 $PAGIBIG = $row['pagibig_contri'];
$phil_health = $row['phil_contri'];
 echo" <tr>
      <th scope='row'>$employee_id</th>
      <td> $employee_name</td>
       <td> </td>
       <td> </td>
<td>$sss</td>
      <td>$PAGIBIG</td>
      <td>$phil_health</td>
<td> </td>
<td> </td>
      <td>  <a href='Delete.php?delete_deduc=$id'class='btn btn-danger ms-2 mt-2'> Delete</a>
   
      <a href='update_deduc.php?edit_deduc=$id' type='button' class='btn text-white btn-warning ms-2 mt-2' id='update'>Update</a></td>
    </tr> 
"; } }?>
  </tbody>
</table>
 </div> 

 <script>
    
    function openForm(){
        document.getElementById("myform").style.display="block";
    }
    function closeForm(){
        document.getElementById("myform").style.display="none";
    }
 </script>
</body>
</html>