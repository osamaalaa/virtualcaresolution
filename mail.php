

<?php

$to = "osama.a@yasclinicgroup.ae";

$subject = "this is a test";

$message = "test from PHP script";

$headers = "From:Test@Test.com";

$time = time();

mail($to, $subject, $message, $headers);

print "Script Ran $time";

?>