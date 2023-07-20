<?php 
$countries = array("Dhaka"=>"Bangladehs", "Kathmandu"=>"nepal", "colombo"=>"shilanka", "Malay"=>"Maldives");

echo key($countries);
echo current($countries);

next($countries) ;

echo key($countries);
echo current($countries);
echo prev($countries) ;
echo key($countries);

echo "<hr>" ;

// while ($key = key($countries)){
//     echo "$key <br>" ;
//     next($countries);
// }

echo "<hr>" ;

foreach ( $countries as $city =>  $country    ) {
    echo  $city . "<br>";
    
}



?>