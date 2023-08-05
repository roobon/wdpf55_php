<?php 
$cities = array("Dhaka", "Noakhali", " Monitor", "water", "tea", "Bottle") ;
$mycitites =  implode(' , ' , $cities)  ;

echo $mycitites ;
echo "<br>" ;
echo strlen($mycitites);
echo "<br>" ;
echo gettype($mycitites) ;
?>