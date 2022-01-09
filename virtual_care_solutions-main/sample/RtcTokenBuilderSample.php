<?php
include("../src/RtcTokenBuilder.php");
include "../conf/database.php";
include "../sample/functions.php";
$database = new Database();
$db = $database->getConnection();
$servant = new Servant($db);
if (isset($_POST['KEY'])) {
    if ($_POST['KEY'] === "34c06e4669304ce98e30e73ce761bb08") {
        $appID = $database::AppId;
        $appCertificate = $_POST['KEY'];
        $servant->user_id = $_POST['user_id'];
        $channelName = (isset($_POST['JOIN'])) ? "" :  $servant->SetChannelName();
        $uid = $_POST['user_id'];
        //  $rc_uid = '123';
        $role = RtcTokenBuilder::RoleAdmin;
        $expireTimeInSeconds = 3600;
        $currentTimestamp = (new DateTime("now", new DateTimeZone('UTC')))->getTimestamp();
        $privilegeExpiredTs = $currentTimestamp + $expireTimeInSeconds;

        $token = RtcTokenBuilder::buildTokenWithUid($appID, $appCertificate, $channelName, $uid, $role, $privilegeExpiredTs);
        $usertoken = RtcTokenBuilder::buildTokenWithUid($appID, $appCertificate, $channelName, (int)$uid + 1, $role, $privilegeExpiredTs);
        $array = [array(
            "appID" => $appID, "token" => $token . PHP_EOL, "channel" => $channelName, "uid" => $uid, "cameraId" => "",
            "mode" => "live",
            "microphoneId" => "",
            "cameraResolution" => "default",
            "codec" => "h264"
        ), array(
            "appID" => $appID, "token" => $usertoken . PHP_EOL, "channel" => $channelName, "uid" => (int)$uid + 1, "cameraId" => "",
            "mode" => "live",
            "microphoneId" => "",
            "cameraResolution" => "default",
            "codec" => "h264"
        )];
        echo json_encode($array);
    }
}
