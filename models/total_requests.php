<?php
        require_once "../db.php"; 
        "../src/gaurd.php";
        // $doctor_name = mysqli_real_escape_string($conn, $_POST['doctor_name']);
            $query="SELECT portal_request_id,
            fname,
            lname,
            email,
            phone, 
            uuid, 
            jobtitle, 
            birthdate, 
            nationality, 
            address,
            idfront,
            idback,
            insurancecompany, 
            planname,
            policynumber,
            groupnumber,
            policydate,
            approved, 
            created_at, 
            deleted
            FROM portal_request WHERE deleted = 0 
            ORDER BY portal_request_id  DESC";
        $result = mysqli_query($conn,$query); 
        $return_arr = array();
        $json_array = array();
        
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $portal_request_id = $row['portal_request_id'];
            $name = $row['fname'] ; 
            $uuid = $row['uuid'];
            $email = $row['email'];
            $phone = $row['phone'];
            $jobtitle = $row['jobtitle'];
            $nationality = $row['nationality'];
            $birthdate = $row['birthdate'];
            $approved = $row['approved'];
            $return_arr[] = array(
                            "portal_request_id" => $portal_request_id,
                            "name" => $name,
                            "uuid" => $uuid,
                            "email" => $email,
                            "phone" => $phone,
                            "jobtitle" => $jobtitle,
                            "nationality" => $nationality,
                            "birthdate" => $birthdate,
                            "approved" => $approved
                        );
        }
        
        // Encoding array in JSON format
        echo json_encode($return_arr);
        ?>