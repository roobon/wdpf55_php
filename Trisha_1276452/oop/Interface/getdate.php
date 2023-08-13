<?php 

$current = time();

$date = getdate($current);
echo "<pre>";
print_r($date);
echo "<br>";

$current = 456933322;

echo date("d-F-Y h:i:sa" , $current);

echo mktime(20,35,00,1,1,2023);


// Age ber kora

 
 $dob = mktime(00,00,00,01,05,1990);
  $current =time();
  echo $diff =$current - $dob;
  echo "<br>";
  echo $diff/60/60/24/365;

  //oop diye age ber kora

  $treminationDate = new DateTime('2028-05-30');
  $todaysDate = new DateTime('today');
  $span = $treminationDate->diff($todaysDate);
  echo "Year: ". $span->y . "Month" . $span->m;

  
?>