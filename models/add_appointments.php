<?php
    require_once "../db.php";
    $patient_name = mysqli_real_escape_string($conn, $_POST['patient_name'] );
    $doctor_name  = mysqli_real_escape_string($conn, $_POST['doctor_name']);
    $notes = mysqli_real_escape_string($conn, $_POST['notes']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    if(mysqli_query($conn, "INSERT INTO appointments(patient_name , doctor_name, notes, date , time , phone_number ) VALUES('" . $patient_name . "','" . $doctor_name . "', '" . $notes . "', '" . $date . "', '" . $time . "' , '". $phone_number ."')")) {     echo '1';
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
?> 