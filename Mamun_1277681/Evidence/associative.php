<?php 

$country = ["Bangladesh" => "Dhaka","Maldives" => "Male", "India" => "Delhi", "Pakistan" => "Islamabad", ];


ksort($country);


foreach ($country as $countryName => $capital) {
    echo "country name is ". $countryName . " and capital is " . $capital . "<br>";
}


?>