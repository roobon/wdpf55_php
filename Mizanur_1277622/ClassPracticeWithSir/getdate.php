<?php 
date_default_timezone_set("Asia/Dhaka");
//print_r(getdate(time())) ;
echo "\n";
//echo date("d-F-Y h:i:s A", time()) . "\n";

//echo mktime(20,35,00,1,22,2018);

$dob = mktime(00,00,00,17,07,1997);
$current = time();

$differ = $current - $dob;

//echo $differ/60/60/24/365;

$terminationDate = new DateTime('1997-07-17');
$todaysDate = new DateTime('today');
$span = $terminationDate->diff($todaysDate);
print_r($span);
echo "Year " . $span->y . " Month " . $span->m . " Day " . $span->d;

?>