<?php 
$planet1 = "Mercury";
$planet2 = "Jupiter";
echo "The smallest planet is ". $planet1 . " & " . "The biggest planet is " . $planet2."\n";
echo "The smallest planet is  {$planet1}  & The biggest planet is {$planet2} \n";
printf ("The smallest planet is  %s  & The biggest planet is %s \n", $planet1, $planet2);
printf ("The smallest planet is  %s  & The biggest planet is %s \n", strtoupper($planet1), strrev($planet2)); //upperCase & Text Reverse.

//More about PRINTF
$fname = "Mizanur";
$mname = "Rahman";
$lname = "Rana";
printf('My full name is %s %s %s ', $fname, $mname, $lname); // (%S) called argument 
echo "\n";
printf('My full name is %2$s %1$s %3$s', $fname, $mname, $lname);
echo "\n";


$fNum = 35.4520478;
printf("%d \n",$fNum); //%d is for receive only Number 
printf("%f \n",$fNum); //%f is for receive floating number
printf("%.2f \n",$fNum); //%.2f is for receive only 2 digit after decimal



$m = 123; //0123
$n = 12; //0012
printf("%04d \n",$m);
printf("%04d \n",$n);


$x = 123.3265; 
$y = 12.45345; 
printf("%08.2f \n", $x);
printf("%06.3f \n", $y);

?>