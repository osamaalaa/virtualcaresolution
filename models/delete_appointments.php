<?php
     require_once "../db.php";

     $appointments_id = $_POST['appointments_id'];
     
     echo $appointments_id;
     $sqlDelete = "DELETE from appointments WHERE appointments_id='". $appointments_id ."'";
      
     if(mysqli_query($conn, $sqlDelete)) {   
          echo '1';
      } else {
         echo '0';
      }
         
     mysqli_close($conn);
     ?>
?> 