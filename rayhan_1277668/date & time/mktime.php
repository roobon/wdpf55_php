<?php 

$dob = mktime(0, 0, 0, 1, 8, 1998);
$current = time() ;
$diff = $current - $dob ;
$myYear = $diff/60/60/24/365 ;
echo round($myYear , 2);

echo "<br>" ;

// oop concept
$terminationDate = new DateTime('2018-05-30');
$todaysDate = new DateTime('today') ;
$span = $terminationDate->diff($todaysDate);

echo "<br> <pre>" ;
print_r($span) ;

echo "date: ". $span->d . "<br>" ;
echo "Month: ". $span->m . "<br>" ;
echo "Year: ". $span->y . "<br>" ;

?>