

<?php
  require_once "db.php"; 
  include "src/gaurd.php"; 
  
$id = $_GET['appointment_id'];
$sql = "select id, drug_name, strength, dose, duration_count,
duration_type, start_date, comments from prescriptions
where appointment_id = '". $id ."' order by id";

$result = mysqli_query($conn,$sql);

$json_array = array();

while ($row = mysqli_fetch_assoc($result)) 
{
    $json_array[] = $row;
}

echo json_encode($json_array);
?>