<?php 

session_start();

$_SESSION['user'] = "Masum";
$_SESSION['email'] = "masum@gmail.com";

echo "<pre>";
print_r($_SESSION);
echo session_id();

?>