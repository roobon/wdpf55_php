<?php 
$x = "Hola ";
$y = " World";
$ly = ltrim($y); //ltrim remove left spaces 
$rx = rtrim($x); //rtrim remove right spaces
echo $x; echo $ly ."\n";

$a = trim($x); //trim remove all spaces
$b = trim($y); //trim remove all spaces
echo $a; echo $b;
?>