<?php 
   


   $current = time();

   $data = getdate($current);
   echo "<pre>";
   print_r($data);
   echo "<br>";
  
   $current = 4546564455;

   echo date("d-F-Y h:i:sa", $current);
   echo "<br>";
   echo mktime(10,30,00,1,1,2023);
   echo "<br>";

//    $dob = mktime(00, 00, 00, 01, 05, 1990);
  
//    $current = time();
   
//    echo $diff = $current - $dob;
//    echo "<br>";
//    echo $diff/60/60/24/365;

$terminationDate = new DateTime('2018-05-30');
$todaysDate = new DateTime('today');
$span = $terminationDate->diff($todaysDate);
// echo $span->y;
// echo $span->days;
echo "Year: " . $span->y. " Month: " . $span->m . " Day: " . $span->d; 
// print_r($span);


?>