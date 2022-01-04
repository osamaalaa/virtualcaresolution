<?php
            require_once "./db.php";
             include "src/gaurd.php"; 
            // $name = mysqli_real_escape_string($conn, $_SESSION["username"]);
            $name = $_SESSION['username'];
            $sql = "SELECT * FROM sessions WHERE doctor_name='" . $name . "'"; // Fetch data from the table sessions using doctor_name
            $result = mysqli_query($conn,$sql);
            $sessions = mysqli_fetch_array($result);
            if($sessions) {
            echo json_encode($sessions);
            
            } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            
            ?>