<?php
include_once 'db.php';
session_start();
if(isset($_POST['savesubmit']))
{     
  $uname = $_POST['uname'];
     $email = $_POST['email'];
     $phone = $_POST['phone']; 
     $password = $_POST['password'];
   
   if($password <> ""){
    $sql = "UPDATE users SET `password`='$password' , `mobile`='$phone' , `email`='$email'  WHERE `username` ='$uname'";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New record has been added successfully !')</script>";          
        
            $_SESSION['password'] = $password; 
            $_SESSION['mobile'] = $phone;
            $_SESSION['email'] = $email;
            $imgs=saveImage();
            header("Location: profile.php?status=1&imgstate=$imgs");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
        $imgs=saveImage();
        header("Location: profile.php?status=2&imgstate=$imgs");
     }
     mysqli_close($conn);
   }else{
      echo "Password cannot be empty...";
      $imgs=saveImage();
      header("Location: profile.php?status=3&imgstate=$imgs");
   }
}
function saveImage(){
  global $conn;
   $target_dir = "users/images/";
   $uname = $_SESSION["username"];
   $target_file = $target_dir . $uname . "_" . basename($_FILES["fileToUpload"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   $imgpath = $target_file  ;

   // Check if image file is a actual image or fake image
   if(isset($_POST["fileToUpload"])) {
     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
     if($_FILES["fileToUpload"]["tmp_name"] <> "" && $check !== false) {
       echo "File is an image - " . $check["mime"] . ".";
       $uploadOk = 1;
     } else {
       echo "File is not an image.";
       $uploadOk = 0;
       $imgstate=3;
     }
   }
   
   // Check if file already exists
   if (file_exists($target_file)) {
     //echo "Sorry, file already exists.";
     //$uploadOk = 0;
   }
   
   // Check file size
   if ($_FILES["fileToUpload"]["size"] > 500000) {
     echo "Sorry, your file is too large.";
     $uploadOk = 0;
     $imgstate=4;
   }
   
   // Allow certain file formats
   if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
   && $imageFileType != "gif" ) {
     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
     $uploadOk = 0;
     $imgstate=5;
   }
   
   // Check if $uploadOk is set to 0 by an error
   if ($uploadOk == 0) {
     echo "Sorry, your file was not uploaded.";
   // if everything is ok, try to upload file
   } else {
     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
       /*$sqlup="INSERT INTO `profile`(`username`, `imgpath`) VALUES ('$uname' , '$imgpath') 
       on duplicate key update `imgpath`='$imgpath'";*/
       $sqlup="update users set `imgpath`='$imgpath' where username='$uname'";
       if (mysqli_query($conn, $sqlup)) {
          echo "updated in db";
          $_SESSION["imgpath"]=$imgpath;
          $imgstate=1;
       }
     } else {
       echo "Sorry, there was an error uploading your file.";
       $imgstate=2;
     }
   }
   return $imgstate;
}

?>