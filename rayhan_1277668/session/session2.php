<?php 

session_start() ;

$_SESSION['user'] = "Alauddin" ;
$_SESSION['email'] = "Alauddin@gmail.com" ;

print_r($_SESSION) ;

echo "<br>  <pre>";
echo session_id() ;

?>