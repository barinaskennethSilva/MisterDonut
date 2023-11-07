<?php
include('db.php');
 
if(isset($_POST['myduc'])){
    $employee_id = $_POST['employee_id'];
   $employee_name = $_POST['employee_name'];
$employee_position = $_POST['employee_position'];
    $sss = $_POST['sss_contri'];
    $PAGIBIG = $_POST['PAGIBIG'];
    $phil_health = $_POST['phil_health'];
   $totalDeduct = $sss +  $PAGIBIG + $phil_health;
    
  if (empty($sss) || empty($PAGIBIG) || empty($phil_health)) {
    $_SESSION['message'] = 'All Field Required to Fill';
    header('Location: ./Deduction.php');
      }
      else{
   $query = "INSERT INTO deduction(employee_id, employee_name, employee_position,sss_contri, pagibig_contri, phil_contri,totalDeduct) VALUES('$employee_id','$employee_name','$employee_position', '$sss','$PAGIBIG','$phil_health','$totalDeduct')";
  
  
  if( mysqli_query($conn, $query)){
    $sql = "
    SELECT Total_Rate - totalDeduct AS result
    FROM time_sheet
    UNION
    SELECT Total_Rate - totalDeduct AS result
    FROM deduction;
";
$result = mysqli_query($conn, $sql);

  }
    
    
    
    header('Location: ./Deduction.php');
    echo"<script>alert('Deduction Salary Successful')</script>";
      }
    
}
      
?>