<?php
header('Content-Type: application/json');

include "db.php";
include "src/guard.php";
// $username = $_SESSION['username'];

$sqlQuery = "SELECT id,pname,created_at FROM patients ORDER BY id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>