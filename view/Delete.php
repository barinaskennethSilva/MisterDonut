<?php
session_start();
include('db.php');
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn,"DELETE FROM Employee WHERE id = $id");
header("Location: employeeForm.php");
        echo "Data deleted successfully.";
    }
?>
