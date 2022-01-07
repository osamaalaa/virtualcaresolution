<?php
     require_once "../db.php";
     include "src/gaurd.php";
    $json = array();
    $sqlQuery = "SELECT * FROM appointments WHERE doctor_name = ".$_SESSION["username"]." ORDER BY appointments_id";

    $result = mysqli_query($conn, $sqlQuery);
    $alldata = array();
    while ($row = mysqli_fetch_assoc($result)) 
    {
        array_push($alldata, $row);
    }
    mysqli_free_result($result);

    mysqli_close($conn);
    echo json_encode($alldata);
?>