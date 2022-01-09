<?php
header('Content-Type: application/json');

include "db.php";
include "src/guard.php";
$username = $_SESSION['username'];

$sqlQuery = "SELECT session_id,created_at FROM sessions";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>