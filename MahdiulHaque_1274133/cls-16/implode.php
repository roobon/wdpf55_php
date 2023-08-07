<?php
$cities = array("Dhaka", "Chitagong", "Barishal", "Khulna");
echo "<br>";
echo implode("**", $cities);
echo "<br>";
$string = implode("--" , $cities);
echo $string;
echo "<hr>";
echo strlen($string);
?>