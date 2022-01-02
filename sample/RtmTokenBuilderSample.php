<?php
include("../src/RtmTokenBuilder.php");

$appID = "59d107639dca474c9ac93fc22d9301c3";
$appCertificate = "34c06e4669304ce98e30e73ce761bb08";
$user = "test_user_id";
$role = RtmTokenBuilder::RoleRtmUser;
$expireTimeInSeconds = 3600;
$currentTimestamp = (new DateTime("now", new DateTimeZone('UTC')))->getTimestamp();
$privilegeExpiredTs = $currentTimestamp + $expireTimeInSeconds;

$token = RtmTokenBuilder::buildToken($appID, $appCertificate, $user, $role, $privilegeExpiredTs);
echo 'Rtm Token: ' . $token . PHP_EOL;
