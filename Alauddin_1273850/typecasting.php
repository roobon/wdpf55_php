<h3>Type Casting in PHP</h3>
<?php 
$mynumber = 150;
var_dump($mynumber);
echo "<br>";

$number = (double) 150;

var_dump($number);
echo "<br>";

$txt = "Today is Monday";
//echo (int)$txt;
$txt = (int) $txt;
var_dump($txt);
echo "<br>";

$x = 75.56;
$x = (integer) $x;
var_dump($x);
echo "<br>";


$score = 256;
$score = (array)$score;
echo "<pre>";
var_dump($score);
echo "<br>";

print_r($score);

?>