<?php
    require_once "../db.php";
    if(isset($_POST['view'])){
    if($_POST["view"] != '')
    {
       $update_query = "UPDATE notifications SET notification_status = 1 WHERE notification_status=0";
       mysqli_query($conn, $update_query);
    }
    $query = "SELECT * FROM notifications WHERE deleted = 0 ORDER BY notification_id DESC LIMIT 5";
    $result = mysqli_query($conn, $query);
    $output = '';
    if(mysqli_num_rows($result) > 0)
    {

    while($row = mysqli_fetch_array($result))
    {
      $output .= '
      <div class="noti-scroll" data-simplebar>
      <a href="#" class="dropdown-item notify-item">
      <div class="notify-icon bg-primary"><i class="mdi mdi-comment-account-outline"></i></div>
      <p class="notify-details">'.$row["notification_subject"].'<small class="text-muted"><em>'.$row["notification_text"].'</em></small></p>
      </a>
      </div>
      ';
    }
    }
    else{
        $output .= '<li><a href="#" class="dropdown-item notify-item" >No Notification Found</a></li>';
    }
    $status_query = "SELECT * FROM notifications WHERE notification_status=0 and deleted = 0";
    $result_query = mysqli_query($conn, $status_query);
    $count = mysqli_num_rows($result_query);
    $data = array(
       'notification' => $output,
       'unseen_notification'  => $count
    );
    echo json_encode($data);
    }
    ?>