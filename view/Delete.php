<?php
session_start();
include('db.php');
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn,"DELETE FROM Employee WHERE id = $id");
header("Location: employeeForm.php");
        echo "Data deleted successfully.";
    }
/////////////////////////////////////////// 
if (isset($_GET['delete_deduc'])) {
        $id = $_GET['delete_deduc'];
        mysqli_query($conn,"DELETE FROM deduction WHERE id = $id");
header("Location: Deduction.php");
        echo "Data deleted successfully.";
    }   
?>
