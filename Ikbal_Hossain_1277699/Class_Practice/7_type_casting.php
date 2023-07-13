<h3> Type Casting in PHP </h3>
type casting means type converting 
<?php
$mynumber = 150;
var_dump($mynumber);
echo "<br>";

$number = (float) 150;
var_dump($number);
echo "<br>";

$txt = "Today is Monday";
$txt = (int) $txt;
var_dump($txt);
echo "<br>";

$x = 75.56;
$x = (int) $x;
var_dump($x);
echo "<br>";

$score = 256;
$score = (array) $score;
var_dump($score);
echo "<br>";
echo "<pre>";
print_r($score);
?>