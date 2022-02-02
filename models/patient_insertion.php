<?php
    require_once "../db.php";
    $patient_name = mysqli_real_escape_string($conn, $_POST['patient_name'] );
    $uuid  = mysqli_real_escape_string($conn, $_POST['uuid']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $appointments_id = mysqli_real_escape_string($conn, $_POST['appointments_id']);

    if(mysqli_query($conn, 
                    "REPLACE INTO patient_data(patient_name , uuid, phone_contact , date , appointments_id )
                     VALUES('" . $patient_name . "','" . $uuid . "', '" . $phone_number . "', '" . $date . "' , '" . $appointments_id . "')")) {  
                         
      echo '1';
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
?> 