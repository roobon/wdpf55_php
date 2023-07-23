<?php 

$numbers = array(25,7,86,10,5,30);
$fruits = array("Apple"=>215 , "Banana"=>110 , "Orange"=>30 ) ;



echo "<pre>";
print_r($numbers) ;
echo "<pre>";
echo "<br>" ;

rsort($numbers);
print_r($numbers) ;

?>