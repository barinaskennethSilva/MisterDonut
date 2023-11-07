<?php 
  include("db.php");
 
   $name = $_POST['name'];
 
   $sql = "SELECT * FROM Employee WHERE Emplo_LastName LIKE '$name%'";  
   $query = mysqli_query($conn,$sql);
   $data='';
   while($row = mysqli_fetch_assoc($query))
   {
     $id = $row['id'];
   $Emplo_FirstName = $row['Emplo_FirstName'];
   $Emplo_MiddleName = $row['Emplo_MiddleName'];
   $Emplo_LastName = $row['Emplo_LastName'];
    $Emplo_Gender = $row['Emplo_Gender'];
   $Emplo_Address =  $row['Emplo_Address'];
 $Emplo_Position =  $row['Emplo_Position']; 
 $rate =  $row['rate'];
       $data .=  "<tr><td>".$row['Employee_id']."</td><td>
       
  <input type='text' value=' $Emplo_FirstName $Emplo_MiddleName $Emplo_LastName'style='width:180px; background-color: transparent;border:none; outline:none;'disabled name='Employee_name'> </td>
  <td>".$Emplo_Gender."</td>
 <td>".$Emplo_Address."</td>
<td>".$Emplo_Position."</td>
<td>".$rate."</td>
<td><a href='Delete.php?delete=$id'class='btn btn-danger ms-2 mt-2'> Delete</a>
   
      <a href='update_record.php?edit=$id' type='button' class='btn text-white btn-warning ms-2 mt-2' id='update'>Update</a></td>
</tr>";

   }
    echo $data;
 ?>