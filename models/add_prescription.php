<?php
    require_once "../db.php";
    $drug_name = mysqli_real_escape_string($conn, $_POST['drug_name'] );
    $Strength  = mysqli_real_escape_string($conn, $_POST['Strength']);
    $dose = mysqli_real_escape_string($conn, $_POST['dose']);
    $Duration = mysqli_real_escape_string($conn, $_POST['Duration']); 
    $Duration = (int)$Duration;
    $Durationt = mysqli_real_escape_string($conn, $_POST['Durationt']);
    $startDate = mysqli_real_escape_string($conn, $_POST['startDate']);
    $startDate = date('Y-m-d H:i:s',strtotime($startDate));
    $uuid = mysqli_real_escape_string($conn, $_POST['uuid']);
    $uuid = (int)$uuid;
    $doctorid = mysqli_real_escape_string($conn, $_POST['doctorid']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);
    $appointments_id = mysqli_real_escape_string($conn, $_POST['appointments_id']);
    $appointments_id = (int)$appointments_id;
     $startDate1 = date_create($startDate);

   date_add($startDate1, date_interval_create_from_date_string( $Duration * $Durationt ." days"));
   $end_date= date_format($startDate1, "Y-m-d");
if(mysqli_query($conn, "INSERT INTO prescriptions(drug_name , strength, dose, duration_count ,start_date,comments, uuid , doctor_id,appointment_id, created_by,duration_type, end_date) VALUES('" . $drug_name . "','" . $Strength . "', '" . $dose . "', '" . $Duration . "', '" . $startDate . "' , '". $comments ."', '". $uuid ."', '" . $doctorid . "', '" . $appointments_id . "', '" . $doctorid . "', '" . $Durationt . "', '" . $end_date . "')")) {   
        echo '1';
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
?> 