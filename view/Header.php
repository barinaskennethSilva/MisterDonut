<?php
include("db.php");
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM Admin WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: ../Admin/Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    <?php include"../css/index.css";?>
  </style>
  <script async src="..js/index.js"></script>
  <title>POSsys</title>
</head>
<body>
  
  
  <nav class="navbar navbar-expand-lg navbar-warning bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand text-white fw-bold" href="#">Automated Payroll System</a>
<div class="prof">
      <img class="profile" src="../img/back_pages.png" alt="profile" />
  <label for="name"><?php echo $row['ad_name'];?></label>   
</div>
    </div>
</nav>
	<div class="dashboard bg-danger">
	  <div class="top-dash bg-warning">

	   	<h1>Mister Donut</h1> 
	  </div>
	  <ul class="link-group">
	      <li><a href="home.php"><i class="fa fa-home"></i>Home</a></li>
	    <li><a href="employeeForm.php"><i class="fa fa-group"></i>Employees</a></li>
	    <li><a href="Working_days.php"><i class="fa fa-group"></i>Working Days</a></li>
  <li><a href="./Admin/SignIn.html"><i class="fa fa-institution"></i>Collections</a></li>
  <li><a href="./Admin/SignIn.html"><i class="fa fa-laptop"></i>Payroll</a></li>
  <li><a href="./Admin/SignIn.html"><i class="fa fa-gear"></i>Settings</a></li>
<li><a href="./Admin/SignIn.html"><i class="fa fa-sign-out"></i>Logout</a></li>
	  </ul>
	</div>
  
  
  
  
</body>
</html>