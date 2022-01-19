
<?php
require_once "./db.php"; 
  "src/gaurd.php";
// $name = mysqli_real_escape_string($conn, $_SESSION["username"]);
$timer = mysqli_real_escape_string($conn, $_POST['timer']);
$user = mysqli_real_escape_string($conn, $_POST['username']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
if(mysqli_query($conn, "INSERT INTO sessions (doctor_name,session_time , session_cost , total_cost) VALUES('" .$user. "', '" . $timer . "', '" . $price . "', '" . $price . "')")) {
echo '1';
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
?>