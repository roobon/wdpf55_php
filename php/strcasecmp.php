<?php
$email1 = "admin@example.com";
$email2 = "ADMIN@EXAMPLE.COM";

//echo strcasecmp($email1, $email2);
if (! strcasecmp($email1, $email2))
echo "The email addresses are identical!";
?>