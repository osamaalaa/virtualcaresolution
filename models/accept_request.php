<?php 

require_once "../db.php";

$id = $_POST['id'];

$sql = "UPDATE portal_request
SET approved = 1 WHERE portal_request_id='$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo 1;
} else {
    echo 0;
}

?>