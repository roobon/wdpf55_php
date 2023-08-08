<?php 
$numbers = array(2,55,5,7,10,15,30);
$fruits = array("Apple"=>20,"Mango"=>60,"Oramge"=>30,"Grape"=>200);
$days = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday");


echo "<br>";
rsort($numbers);
print_r($numbers);
echo "<br>";
rsort($fruits);
print_r($fruits);
echo "<br>";
arsort($days);
print_r($days);


?>