<?php 
require_once "db.php";
include "src/gaurd.php"; 
$username = $_SESSION['username'];
$task = $_POST['task'];

if ($task != " " ){
$sql = "INSERT INTO tasks (title, doctor_name) VALUES ('$task','$username')";
$result = mysqli_query($conn, $sql);
}

if ($result) {
    echo 1;
} else {
    echo 0;
}

?>
