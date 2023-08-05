<?php 
$x = "Hi!";
echo $x ."\n";
$y = &$x;
$y = "Hello!";
echo $x ."\n";
echo $y ."\n";
echo $x //VALUE OF X IS CHANGED FOR REFERENCE Y


// $txt1 = "Hello";
// $txt2 = $txt1 = "Hey Buddy!";
// $finalTxt = $txt2;
// echo $finalTxt;
?>