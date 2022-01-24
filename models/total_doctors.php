<?php
        require_once "../db.php"; 
        "../src/gaurd.php";
        // $doctor_name = mysqli_real_escape_string($conn, $_POST['doctor_name']);
        $query="    SELECT usr.id , usr.username username, usr.date_added, usr.mobile, usr.email, usr.imgpath, usr.role_id , rol.role_name  , rol.role_description
		FROM users usr 
         LEFT JOIN roles rol
           ON usr.role_id = rol.role_id";
        $result = mysqli_query($conn,$query);
        $return_arr = array();
        $json_array = array();
        
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $id = $row['id'];
            $username = $row['username'];
            $date_added = $row['date_added'];
            $mobile = $row['mobile'];
            $email = $row['email'];
            $imgpath = $row['imgpath'];
            $role_id = $row['role_id'];
            $role_name = $row['role_name'];
            $role_description = $row['role_description'];
            $return_arr[] = array("id" => $id,
                            "username" => $username,
                            "date_added" => $date_added,
                            "mobile" => $mobile,
                            "email" => $email,
                            "imgpath" => $imgpath,
                            "role_id" => $role_id,
                            "role_name" => $role_name,
                            "role_description" => $role_description
                        );
        }
        
        // Encoding array in JSON format
        echo json_encode($return_arr);
        ?>