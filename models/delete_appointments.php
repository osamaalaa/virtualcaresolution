<?php
     require_once "../db.php";

     $appointments_id = $_POST['appointments_id'];
     $sqlDelete = "DELETE from appointments WHERE appointments_id=".$appointments_id;
      
     mysqli_query($conn, $sqlDelete);
     echo mysqli_affected_rows($conn);
      
     mysqli_close($conn);
     ?>
?>