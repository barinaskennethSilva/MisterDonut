
<?php
require_once 'db.php';
require_once 'noobText/phpqrcode/qrlib.php';
$path = 'images/';
$qrcode = $path . time() . ".png";
$qrimage = time() . ".png";

if (isset($_POST['generate_id'])) {
    if (!empty($_REQUEST['Employee_Id'])) {
        $employee_id = $_REQUEST['Employee_Id'];
        $name = $_REQUEST['Full_Name'];
        $position = $_REQUEST['Employee_Position'];
        $email = $_REQUEST['Employee_email'];
        $address = $_REQUEST['Employee_address'];

        $stmt = $conn->prepare("INSERT INTO Time_Sheet (Employee_id, Full_Name, Employee_Position, Employee_email, Employee_address, qrimage) VALUES (?, ?, ?, ?, ?, ?)");
        
        if ($stmt !== false) {
            $stmt->bind_param("ssssss", $employee_id, $name, $position, $email, $address, $qrimage);
            if ($stmt->execute()) {
                echo "Data inserted successfully.";
            } else {
                echo "Error executing the statement: " . $stmt->error;
            }
        } else {
            echo "Error preparing the statement: " . $conn->error;
        }

        QRcode::png($employee_id, $qrcode, 'H', 4, 4);

        $data = "
        <div style='width: 450px; height: 250px; border-radius: 10px; display: flex; flex-direction: row; padding: 5px; margin: auto;'>
            <img src='images/p1_Id.png' style='width: 450px; height: 550px;position: relative;bottom:170px !important; '> </div>    <div style='display:flex;flex-direction:column;padding:5px;position:relative;top:-220px;left:28px;'>         <input type='text' value='$name' style='width:210px; background-color: transparent; border:none; font-size:20px; color:#fff; font-weight:700; outline:none;' disabled name='Employee_name'>  <span style='font-weight:500; color:#fff; margin-top:5px;'>ID NO: $employee_id</span>   <span style='margin-top:10px; font-weight:500; color:#fff;'>Position: $position</span>     </div>        <img style='width:160px; height: 120px !important; position: relative; top:-325px; left:270px;' src='" . $qrcode . "'>   </div>";
        echo $data;
    } else {
        echo "Employee ID cannot be empty.";
    }
} else {
    echo "No data received.";
}
?>