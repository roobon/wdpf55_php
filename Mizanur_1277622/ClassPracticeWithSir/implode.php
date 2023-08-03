<?php
$cities = array("Columbus", "Akron", "Cleveland", "Cincinnati");
//echo implode("|", $cities). "\n";

$students = array("Mizanur", "Shubho", "Abdul", "Ahad");
$studSTR = implode("/ ", $students)."\n"; //implode make array to string
echo "Length of Students array is = " . count($students) . "\n";
echo "Length of Students variable is = " . strlen($studSTR);
?>