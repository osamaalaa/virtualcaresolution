<?php
 require_once "../db.php";

//print_r($_POST);
 $folderPath = "../images/signatures/";
 $id = $_POST['id'];
 $username = $_SESSION['username'];
 $user_id = $_POST['user_id'];



$image_parts = explode(";base64,", $_POST['signature_image']);

$image_type_aux = explode("image/", $image_parts[0]);
 
$image_type = $image_type_aux[1];
 
$image_base64 = base64_decode($image_parts[1]);
  
$file = $folderPath . $user_id . '.'.$image_type;

$savePath = "images/signatures/". $user_id . '.'.$image_type;

$sql = "INSERT INTO signatures (user_id, signature_path , signature_name) VALUES ('$user_id','$savePath' ,'$user_id')";

$result = mysqli_query($conn, $sql);

 if ($result) {
    file_put_contents($file, $image_base64);
    echo "1"; 

    } else {
        echo "0";

 }

?>