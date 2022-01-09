<?php
    require_once "../db.php";
    $pname = mysqli_real_escape_string($conn, $_POST['pname'] );
    $mri = mysqli_real_escape_string($conn, $_POST['mri']);
    $cheifcomplaint = mysqli_real_escape_string($conn, $_POST['cheifcomplaint']);
   
    $sickleave = mysqli_real_escape_string($conn, $_POST['sickleave']);
    $wfh = mysqli_real_escape_string($conn, $_POST['wfh']);
    $doctor_name = mysqli_real_escape_string($conn, $_POST['doctor_name']);
    $pid = mysqli_real_escape_string($conn, $_POST['pid']);
    if(mysqli_query($conn, "INSERT INTO patients(pid , pname, mri, cheifcomplaint , sickleave , wfh , doctor_name ) VALUES('" . $pid . "','" . $pname . "', '" . $mri . "', '" . $cheifcomplaint . "', '" . $sickleave . "' , '". $wfh ."', '". $doctor_name ."')")) {
     echo '1';
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
?> 