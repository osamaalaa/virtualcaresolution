
<?php
require_once "./db.php";
//  include "src/gaurd.php";
// $name = mysqli_real_escape_string($conn, $_SESSION["username"]);
$timer = mysqli_real_escape_string($conn, $_POST['timer']);
if(mysqli_query($conn, "INSERT INTO sessions (doctor_name,session_time) VALUES('" . "osama" . "', '" . $timer . "')")) {
echo '1';
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
?>