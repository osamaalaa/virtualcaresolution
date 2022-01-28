<?php
include "../conf/database.php";
include "../sample/functions.php";
$database = new Database();
$db = $database->getConnection();
$servant = new Servant($db);
if (isset($_POST['username']) && isset($_POST['password'])) {
    foreach ($_POST as $key => $value) {
        $servant->$key = $value;
    }
    if ($servant->signin()) {
        
        echo $_SESSION["role_id"];
    }
}
