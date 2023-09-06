<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "Payroll_sys");

if ($conn === false) {
die('Failed to connect'.mysqli_connect_error());
}

?>