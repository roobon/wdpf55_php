<?php 
$fN = "Mizanur";
$lN = "Rahman";
printf("Hi! I'm %s %s", $fN, $lN); //printf show the output directly;
echo PHP_EOL;
$output = sprintf("Hi! I'm %s %s", $fN, $lN); //sprintf store the output value in a variable & after we can use this;
echo $output ."\n";
echo strtoupper($output)."\n"; //strtoupper change cases to uppercase.
echo strtolower($output)."\n"; //strtolower chage cases to lowercase.
?>