<?php 
// $country = ["Dhaka"=>"Bangladesh", "Mosco"=>"Russia" , "cairo"=>"Misor"];
// echo key($country);
// next($country);

// echo key($country);

// while($key = key($country)){
//     echo $key;
//     next($country);
// }
$country = ["Dhaka" => "Bangladesh", "Moscow" => "Russia", "Cairo" => "Egypt"];

// echo key($country); 
// next($country);

// echo key($country);

foreach ($country as $key => $value) {
    echo $key .",";
}


?>