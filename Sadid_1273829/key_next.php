<?php

$countries = array(
    "Dhaka" => "Bangladesh",
    "Male" => "Maldives",
    "Kathmundu" => "Nepal",
    "Dilhi" => "India"
);

echo key($countries);
echo "<br>";
next($countries);
echo key($countries);


// while ($key = key($countries)) {
//     echo "$key <br>";
//     next($countries);
// }

echo "<hr>";

foreach($countries as $key => $country){
    echo $key .= " = ". $country. "<br>" ;
    // echo ;
}