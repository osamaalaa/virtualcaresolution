<?php
    require_once "../db.php";
    if(isset($_POST["notification_subject"]))
    {
  
    $notification_subject = mysqli_real_escape_string($conn, $_POST["notification_subject"]);
    $notification_text = mysqli_real_escape_string($conn, $_POST["notification_text"]);
    $query = "INSERT INTO notifications(notification_subject, notification_text)VALUES ('$notification_subject', '$notification_text')";
    mysqli_query($conn, $query);
    }
    ?>

