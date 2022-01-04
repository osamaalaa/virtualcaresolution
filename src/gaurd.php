<?php

session_start();

$inactive = 1800;
//ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours

if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
}
$_SESSION['testing'] = time(); // Update session

if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
    /* 
    if ($_SESSION['hierarchy'] == '2') {
        $pageName = basename($_SERVER['PHP_SELF']);
        if($pageName == 'footer.php'){           
            echo "error 500";
        }
     } */
} else {
    header('Location: http://localhost/new-vcs/login.php');
    session_destroy();
}
