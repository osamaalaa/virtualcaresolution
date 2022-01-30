<?php
        require_once "../db.php"; 
        "../src/gaurd.php";
        $userId = mysqli_real_escape_string($conn, $_POST['userId']);
        $query="SELECT  signature_id, user_id, signature_name, signature_path, created_at, deleted  from signatures WHERE user_id = '" . $userId . "'";
        $result = mysqli_query($conn,$query);
        $cust = mysqli_fetch_array($result);
        if($cust) {
        echo json_encode($cust);
        } else {
        echo "Error: " . $sql . "" . mysqli_error($dbCon);
        }
?>