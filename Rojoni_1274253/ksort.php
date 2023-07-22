<?php 
$numbers = array(2,55,5,7,10,15,30);//numeric array
$fruits = array("Apple"=>20,"Mango"=>60,"Oramge"=>30,"Grape"=>200);//associative array
$days = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday");//multidimentional array
echo "<pre>";


echo "<br>";
ksort($numbers);
print_r($numbers);
echo "<br>";
ksort($fruits);
print_r($fruits);
echo "<br>";
ksort($days);
print_r($days);


?>