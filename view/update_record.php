<?php
 @include 'db.php';
$id = $_GET['edit'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
if(isset($_POST['update_record'])){
 $employee_id = $_POST['employee_id'];
  $LastName = $_POST['LastName'];
  $FirstName = $_POST['FirstName'];
  $MiddleName = $_POST['MiddleName'];
$Gender = $_POST['Gender'];
$Address = $_POST['Address'];
$Position = $_POST['Position'];
$Extension = $_POST['Extension'];
$ContNum = $_POST['ContNum'];

   if(empty($employee_id) || empty($FirstName) || empty($MiddleName) ){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE Employee SET Employee_id='$employee_id',Emplo_LastName='$LastName' ,Emplo_FirstName='$FirstName',Emplo_MiddleName='$MiddleName',Emplo_Extension='$Extension' ,Emplo_Gender='$Gender',Emplo_ContNum='$ContNum', Emplo_Address='$Address',Emplo_Position='$Position' WHERE id = '$id'";
 $upload = mysqli_query($conn,$update_data);

      if($upload){
      header("Location: employeeForm.php");
  echo"<script>alert ('Successful Update Record')</script>";
  exit();
      }else{
header("Location: employeeForm.php");
  echo"<script>alert ('please fill out all!')</script>";
  exit();
      }

   }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>
   <!--------- Update Data ---------------> <div class="newList shadow" id="updateList">
  <div class="bg-danger text-center fw-bold text-white h3 p-4">
  Update Employee List  
  <i class="fa fa-close closeX" id="closeX1"></i>
  </div>  
     <?php
  @include 'db.php';
  $id = $_GET['edit'];
      $select = mysqli_query($conn, "SELECT * FROM Employee WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?>
   <form class="myform  p-4" action="" method="post" accept-charset="utf-8">
     <div class="mt-3" required>
   <label for="employee_id">Employee Id</label>
   <input type="text" name="employee_id" id="employee_id" class="form-control" placeholder="Employee Id" value="<?php echo $row['Employee_id']; ?>"/>    
     </div>
         <div class="mt-3">
   <label for="LastName">Last Name</label>
   <input type="text" name="LastName" id="LastName" class="form-control" placeholder="Last Name" value="<?php echo $row['Emplo_LastName']; ?>"/>    </div>
            <div class="mt-3">
   <label for="Name">First Name</label>
  <input type="text" name="FirstName" id="FirstName" class="form-control" placeholder="First Name" value="<?php echo $row['Emplo_FirstName']; ?>"/>    </div>
   
     <div class="mt-3">
 <label for="LastName">Middle Name</label>
<input type="text" name="MiddleName" id="MiddleName" class="form-control" placeholder="Middle Name" value="<?php echo $row['Emplo_MiddleName']; ?>"/>    </div>
   
     <div class="mt-3">
   <label for="Extension">Extension</label>
 <input type="text" class="form-control" name="Extension" id="Extension" placeholder="Extension" value="<?php echo $row['Emplo_Extension']; ?>"/>    </div>   
   
        <div class="mt-3">
   <select name="Gender" class="form-control" id="Gender"required>
   <option value="Gender" disabled>Gender</option>
   <option value="Female">Female</option>
  <option value="Male">Male</option>   
   </select>
    </div>   
       <div class="mt-3">
   <label for="ContNum">Contact Number</label>
 <input type="tel" name="ContNum" id="ContNum" placeholder="Contact Number" maxlength="11" class="form-control"value="<?php echo $row['Emplo_ContNum']; ?>"/> </div>   
 
 <div class="mt-3">
   <label for="address">Address</label>
 <input type="text" name="Address" id="address" class="form-control" placeholder="Address" autocomplete="off"value="<?php echo $row['Emplo_Address']; ?>"/></div>   

 <div class="mt-3">
   <label for="address">Position</label>
 <input type="text" name="Position" id="address" class="form-control" placeholder="Position" autocomplete="off"value="<?php echo $row['Emplo_Position']; ?>"/></div>   


<div class="mt-3">
  <input type="submit" class=" btn btn-primary fw-bold w-100" name="update_record" id="newList" value="Record" />
</div>
   </form>  
        <?php }; ?>
    </div>



</body>
</html>