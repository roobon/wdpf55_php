<?php 
$numbers = [5,6,78,23,44,55,33,44,55];
$cities = ["Dhaka","Khulna","Sylhet","Comilla","Dhaka","Khulna"];
$countries = array ("Dhaka"=>"Bangladesh","Katmundu"=>"Napal","Colombo"=>"Srilanka","Maley"=>"Maldives");

// sort($numbers);
echo"<pre>";
print_r($numbers);


$result = array_reverse($numbers);
echo "<hr>";
print_r($result);



sort($cities);
echo"<br>";
print_r($cities);



sort($countries);
echo"<br>";
print_r($countries);


sort($countries);
echo"<br>";
print_r($countries);

// $results = key($countries);
// sort($resul;
// echo"<br>";
// print_r($resultss);




?>