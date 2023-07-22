<?php 
// $country = ["Dhaka"=>"Bangladesh", "Mosco"=>"Russia" , "cairo"=>"Misor"];


// while($value = current($country)){
//     echo $value;
//     next($country);
// }
$country = ["Dhaka" => "Bangladesh", "Moscow" => "Russia", "Cairo" => "Egypt"];

// echo key($country); 
// next($country);

// echo key($country);

foreach ($country as $key=> $value) {
    echo $value .",";
}


?>