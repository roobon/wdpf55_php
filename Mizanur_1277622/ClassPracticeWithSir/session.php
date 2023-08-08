<?php 
session_start();
$_SESSION["user"] = "Mizanur Rahman";
$_SESSION["email"] = "mizanur@gmail.com";
echo "<pre>";
print_r($_SESSION);
echo session_id();
//session_destroy();
?>