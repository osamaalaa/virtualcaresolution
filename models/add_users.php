<?php
    require_once "../db.php";
    $username = mysqli_real_escape_string($conn, $_POST['username'] );
    $channel  = mysqli_real_escape_string($conn, $_POST['channel']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $role_id = mysqli_real_escape_string($conn, $_POST['role_id']);
    if(mysqli_query($conn, 
                    "INSERT INTO users(username , channel, password , mobile , email , role_id )
                     VALUES('" . $username . "','" . $channel . "', '" . $password . "', '" . $mobile . "' , '". $email ."', '". $role_id ."')")) {     echo '1';
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
?> 