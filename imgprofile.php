<?php 
require_once "db.php";
include "src/gaurd.php";

$username = $_SESSION['username'];
$oldpath = $_FILES['imgpath']['tmp_name'];

$newpath ="images/profileImgs/".$_FILES['imgpath']['name'];
move_uploaded_file($oldpath, $newpath);

$sql = "UPDATE users
SET imgpath = '$newpath'
WHERE username = '$username'";

$result = mysqli_query($conn, $sql);

if ($result) {

    echo 1;

} else {

    echo 0;
    
}
