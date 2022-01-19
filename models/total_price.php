<?php
        require_once "../db.php"; 
        "../src/gaurd.php";
        $doctor_name = mysqli_real_escape_string($conn, $_POST['doctor_name']);
        $query="SELECT  FLOOR(SUM(DISTINCT total_cost)) as total, currency from sessions WHERE doctor_name = '" . $doctor_name . "'";
        $result = mysqli_query($conn,$query);
        $cust = mysqli_fetch_array($result);
        if($cust) {
        echo json_encode($cust);
        } else {
        echo "Error: " . $sql . "" . mysqli_error($dbCon);
        }
?>