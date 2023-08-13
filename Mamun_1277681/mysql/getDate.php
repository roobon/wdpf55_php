<?php 
// $current= time();
// $data = getdate($current);
// echo "<pre>";
// print_r($data);
// $current = 1641891900;
// echo date("d-F-y h:i:sa", $current);
// echo "<br>";
// echo mktime(10, 05, 00, 1, 11, 2022);




//  $dob =mktime(00, 00, 00, 29, 03, 1990);
//  $current = time();
//  $diff = $current- $dob;
//  echo $diff;
//  echo "<br>";
//  echo $diff/60/60/24/365;


//  $terminationDate = new DateTime()


$terminationDate = new DateTime('2018-05-30');
$todaysDate = new DateTime('today');
$span = $terminationDate->diff($todaysDate);
// echo "Your subscription ends in {$span->format('%a')} days!";
echo " the Difference is  " .$span->y." Year and ". $span->m.  " Month";
echo "<br>";

$terMInateDte = new DateTime('1997-02-03');
$todayDate = new DateTime('today');
$todaysAge = $terMInateDte->diff($todayDate);
echo " Today My age is  " .$todaysAge->y." Year and ". $todaysAge->m.  " Month";
?>