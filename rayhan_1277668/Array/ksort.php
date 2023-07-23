<?php 

$numbers = array(25,7,86,10,5,30);
$fruits = array("Apple"=>215 , "Banana"=>310 , "Orange"=>130, "Angur" => 250 ) ;
$days = array( 'sunday' , "monday", "tuesday", "thursday", "friday" );


echo "<pre>";
print_r($fruits) ;
echo "<pre>";
echo "<br>" ;

ksort($fruits);
print_r($fruits) ;

?>