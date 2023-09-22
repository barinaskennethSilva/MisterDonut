<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Payroll Pages</title>
  </head>
  <body>
       <?php
include"Header.php"?>
  <div class="input-container">
   <h1 class="text-center mt-2">Release Payroll  </h1>
    <table class="table mt-3 table-hover my-table">
  <thead>
    <tr class="bg-danger text-white">
      <th scope="col">Employee ID</th>
      <th scope="col">Employee Name</th>
     <th scope="col">Position</th>
      <th scope="col">Rate</th>
        <th scope="col">Salary Release</th>
        <th scope="col">Date Release</th>
         <th scope="col">Salary Status</th>
        <th scope="col">Action</th>
   </tr>
    <tr> 
    <td>002</td>
     <td>Santa Clous</td>
 <td>Chief</td>
 <td>500</td>
  <td>3500</td>
    <td>September 25, 2020</td>
      <td>Release</td>
   <td><a href="#" class="btn btn-danger">Delete</a></td>
 </tr>
   </div>
  </body>
</html>