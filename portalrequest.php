<?php 
require_once "db.php";
// include "src/gaurd.php"; 

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$uuid = $_POST['uuid'];
$birthdate = $_POST['birthdate'];
$jobtitle = $_POST['jobtitle'];
$nationality = $_POST['nationality'];
$address = $_POST['address'];
$insurancecompany = $_POST['insurancecompany'];
$planename = $_POST['planename'];
$policynumber = $_POST['policynumber'];
$groupnumber = $_POST['groupnumber'];
$policydate = $_POST['policydate'];


$oldpath = $_FILES['idfront']['tmp_name'];
$newpath ="images/nationalIds/$uuid _".$_FILES['idfront']['name'];
move_uploaded_file($oldpath, $newpath);

$oldpath_back = $_FILES['idback']['tmp_name'];
$newpath_back ="images/nationalIds/$uuid _".$_FILES['idback']['name'];
move_uploaded_file($oldpath_back, $newpath_back);



$sql = "INSERT INTO portal_request (fname, lname, email, phone, uuid, idfront, idback, jobtitle, birthdate, nationality, address,  insurancecompany, planname, policynumber, groupnumber, policydate) VALUES ('$fname','$lname','$email','$phone','$uuid', '$newpath','$newpath_back', '$birthdate','$jobtitle','$nationality','$address','$insurancecompany','$planename','$policynumber','$groupnumber','$policydate')";
$result = mysqli_query($conn, $sql);



if ($result) {

    echo 1;

} else {
    echo 0;
}

?>
