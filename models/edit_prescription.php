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
    $doctorid = mysqli_real_escape_string($conn, $_POST['doctorid']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);
    $startDate1 = date_create($startDate);
    $prescid = mysqli_real_escape_string($conn, $_POST['prescid']);
    $prescid = (int)$prescid;

   date_add($startDate1, date_interval_create_from_date_string( $Duration * $Durationt ." days"));
   $end_date= date_format($startDate1, "Y-m-d");
if(mysqli_query($conn, "UPDATE prescriptions SET `drug_name`='$drug_name',
    `strength`='$Strength' ,  `dose`='$dose', `duration_count` = '$Duration', 
    `start_date` = '$startDate', `duration_type` = '$Durationt', `comments` = '$comments',
    `end_date` = '$end_date', `modified_by` = '$doctorid'
   WHERE id='$prescid '")) {   
        echo '1';
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
?> 