<?php
     require_once "../db.php";

     $id = $_POST['id'];
     
     echo $appointments_id;
     $sqlDelete = "DELETE from prescriptions WHERE id='". $id ."'";
      
     if(mysqli_query($conn, $sqlDelete)) {   
          echo '1';
      } else {
         echo '0';
      }
         
     mysqli_close($conn);
     ?>
?> 