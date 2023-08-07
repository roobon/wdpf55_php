<?php 

$current = time();

$data = getdate($current);
echo "<pre>";
print_r($data);
echo "<br>";

$current = 456933322;

echo date("d F,Y h:i:sa", $current);



echo mktime(20,35,00,1,22,2018);


$dob = mktime(00,00,00,01,05,1990);

$current = time();

echo $diff = $current - $dob;
echo "<br>";
echo $diff/60/60/24/365;

echo "<br>";
$terminationDate = new DateTime('2018-05-30');
$todaysDate = new DateTime('today');
$span = $terminationDate->diff($todaysDate);
echo" Year: ". $span->y . " Month: " . $span->m;

//echo "Your subscription ends in {$span->format('%a')} days!";

?>