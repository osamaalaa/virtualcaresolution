<?php
  require_once "../db.php";

  
$username = $_SESSION['username'];
$sql = "SELECT 
pa.id,
pa.uuid, 
pa.patient_name,
pa.language,
pa.DOB,
pa.city,
pa.phone_contact,
pa.date,
pa.sex,
ap.doctor_name
from patient_data pa
LEFT JOIN appointments ap
ON ap.appointments_id = pa.appointments_id";
$result = mysqli_query($conn,$sql);

$json_array = array();

while ($row = mysqli_fetch_assoc($result)) 
{
    $json_array[] = $row;
}

echo json_encode($json_array);

?>
