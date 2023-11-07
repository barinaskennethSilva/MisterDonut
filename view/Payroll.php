<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Pages</title>
</head>
<body>
  <style>
  .msg_box{
    width: 300px;
    height: 300px;
    background-color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    z-index: 50;
  }
.form-text{
  display: flex;
  flex-direction: column;
}
  </style>
    <?php
    include "Header.php";
    ?>
   
  <!--div class="msg_box shadow">
  <div class="msg_header bg-danger w-100 p-2 fw-bold text-center text-white">SALARY RELEASE</div>  
  <form>
      <div class="mb-3 p-2 form-text">
   <label class="label-form">Payroll Number</label>
  <span>11245048</span>
  </div>
  <div class="mb-3 p-2 form-text">
   <label class="label-form">Deduction</label>
  <span>1500</span>
  </div>
   <div class="mb-3 p-2 form-text form-text">
  <label  class="label-form">Total Rate</label>
  <span>2500</span>
  </div>
     <div class="mb-3 p-2 form-text">
  <label  class="label-form">Amount Salary</label>
  <span>2500</span>
  </div>
  </form>
  </div--> 
   
    <div class="input-container">
        <h1 class="text-center mt-2">Release Payroll</h1>
        <table class="table mt-3 table-hover my-table">
            <thead>
                <tr class="bg-danger text-white">
                    <th scope="col">Employee ID</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Employee Email</th>
                    <th scope="col">Position</th>
                    <th scope="col">Total Rate</th>
                    <th scope="col">Benefits Deduction</th>
                    <th scope="col">Salary Release</th>
                    <th scope="col">Payroll number</th>
                  
                    <th scope="col">Salary Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            session_start();
            include("db.php");


$sql = "SELECT Employee_id, Full_Name, Employee_Position, Employee_email, SUM(Amount_Rate) AS total_rate FROM Time_Sheet GROUP BY Employee_id UNION SELECT employee_id, employee_name, employee_position, totalDeduct FROM deduction GROUP BY employee_id";






$result = $conn->query($sql);
 if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
  $employee_id = $row['Employee_id'];
  $Full_Name = $row['Full_Name'];
  $Employee_Name = $row['employee_name'];
  $Employee_email = $row['Employee_email'];
  $Employee_Position = $row['Employee_Position'];
          $total_rate = $row['total_rate'];
$totalDeduct = $row['totalDeduct'];
$salary_release = "Replace with salary release data";
$payroll_number = "Replace with payroll number";
  $date_release = "Replace with date release";
  $salary_status = "Replace with salary status";

echo "<tr> <td>$employee_id</td><td>$Full_Name</td>
       <td>$Employee_email</td>
<td>$Employee_Position</td>
                   <td>$total_rate</td>
           <td>$totalDeduct</td>

                        <td>$payroll_number</td>
                        <td>$date_release</td>
                        <td>$salary_status</td>
                        <td><a href='payroll_send.php' class='btn btn-danger'>Send</a></td>
                    </tr>
                    ";
                }
            } else {
                echo "No results found.";
            }

            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>