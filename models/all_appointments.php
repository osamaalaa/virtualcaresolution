<?php
  require_once "../db.php";
  include "./src/gaurd.php"; 
  
$username = $_SESSION['username'];
$sql = "SELECT * FROM appointments WHERE doctor_name = '$username' ORDER BY appointments_id";
$result = mysqli_query($conn,$sql);

$json_array = array();

while ($row = mysqli_fetch_assoc($result)) 
{
    $json_array[] = $row;
}

echo json_encode($json_array);
?>