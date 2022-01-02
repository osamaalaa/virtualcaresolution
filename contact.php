

<?php
include_once 'db.php';
if(isset($_POST['savesubmit']))
{    
   
     $uname = $_POST['uname'];
     $email = $_POST['email'];
     $msg = $_POST['msg']; 
     $msgtype = $_POST['msgtype'];
   
   if($msg <> ""){
    $sql = "insert into contactus(`username`, `email`, `msg_type`, `message`) values('$uname' , '$email' ,'$msgtype','$msg')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New message has been added successfully !')</script>";          
        session_start();            
            header("Location: contact.php?status=1");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
        
        header("Location: contact.php?status=2");
     }
     mysqli_close($conn);
   }else{
      echo "Message cannot be empty...";
      header("Location: contactus.php?status=3");
   }
}
?>