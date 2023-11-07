<?php
require_once 'db.php'; 


if (isset($_REQUEST['newList'])) {
  $employee_id = $_REQUEST['employee_id'];
  $LastName = $_REQUEST['LastName'];
  $FirstName = $_REQUEST['FirstName'];
  $MiddleName = $_REQUEST['MiddleName'];
  $email = $_REQUEST['Email'];
  $Gender = $_REQUEST['Gender'];
  $ContNum = $_REQUEST['ContNum'];
  $address = $_REQUEST['address'];
  $Position = $_REQUEST['Position'];
  $manager = "750";
$cashier = "500";
$chief = "650";
$seller = "450";  
  
  if (empty($employee_id) || empty($FirstName) || empty($LastName) || empty($MiddleName) || empty($email) || empty($Gender) || empty($ContNum) || empty($address)) {
//header("Location: employeeForm.php");
echo"<script>alert('All Field Required to Fill')</script>";
header("Location: employeeForm.php");
}
  else if ($Position == "manager") {
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO Employee (Employee_id, Emplo_LastName, Emplo_FirstName,Emplo_MiddleName,Emplo_email,Emplo_Gender,Emplo_ContNum,Emplo_Address,Emplo_Position,rate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("Error in SQL statement: " . $conn->error);
    }

    // Bind parameters
    if ($stmt->bind_param("ssssssssss", $employee_id, $LastName,$FirstName, $MiddleName,$email,$Gender,$ContNum,$address,$Position,$manager)) {
        if ($stmt->execute()) {
            echo "Data inserted successfully.";
        } else {
            echo "Error executing the statement: " . $stmt->error;
        }
    } 
  }
    else if ($Position == "cashier") {
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO Employee (Employee_id, Emplo_LastName, Emplo_FirstName,Emplo_MiddleName,Emplo_email,Emplo_Gender,Emplo_ContNum,Emplo_Address,Emplo_Position,rate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("Error in SQL statement: " . $conn->error);
    }

    // Bind parameters
    if ($stmt->bind_param("ssssssssss", $employee_id, $LastName,$FirstName, $MiddleName,$email,$Gender,$ContNum,$address,$Position,$cashier)) {
        if ($stmt->execute()) {
            echo "Data inserted successfully.";
        } else {
            echo "Error executing the statement: " . $stmt->error;
        }
    } 
  }
else if ($Position == "chief") {
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO Employee (Employee_id, Emplo_LastName, Emplo_FirstName,Emplo_MiddleName,Emplo_email,Emplo_Gender,Emplo_ContNum,Emplo_Address,Emplo_Position,rate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("Error in SQL statement: " . $conn->error);
    }

    // Bind parameters
    if ($stmt->bind_param("ssssssssss", $employee_id, $LastName,$FirstName, $MiddleName,$email,$Gender,$ContNum,$address,$Position,$chief)) {
        if ($stmt->execute()) {
            echo "Data inserted successfully.";
        } else {
            echo "Error executing the statement: " . $stmt->error;
        }
    } 
  }
else if ($Position == "seller") {
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO Employee (Employee_id, Emplo_LastName, Emplo_FirstName,Emplo_MiddleName,Emplo_email,Emplo_Gender,Emplo_ContNum,Emplo_Address,Emplo_Position,rate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("Error in SQL statement: " . $conn->error);
    }

    // Bind parameters
    if ($stmt->bind_param("ssssssssss", $employee_id, $LastName,$FirstName, $MiddleName,$email,$Gender,$ContNum,$address,$Position,$seller)) {
        if ($stmt->execute()) {
            echo "<script>alert('Employee Register successfully')</script>.";
           header("Location: employeeForm.php");
        } else {
            echo "Error executing the statement: " . $stmt->error;
        }
    } 
  }
    else {
        echo "Error binding parameters: " . $stmt->error;
    }
    
    // Close the database connection
    $stmt->close();
    $conn->close();

   
}
?>