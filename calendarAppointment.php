<?php
  require_once "db.php"; 
  include "src/gaurd.php"; 
  
$username = $_SESSION['username'];
$sql = "SELECT  a.patient_name title,
a.date start , a.date end
FROM appointments a 
LEFT JOIN appointment_status s
ON a.status = s.status_id
WHERE a.doctor_name = '$username' AND a.deleted= 0 
ORDER BY a.appointments_id";
$result = mysqli_query($conn,$sql);

$json_array = array();

while ($row = mysqli_fetch_assoc($result)) 
{
    $json_array[] = $row;
}

echo json_encode($json_array);
?>