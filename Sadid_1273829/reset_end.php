<?php

$countries = array(
    "Dhaka" => "Bangladesh",
    "Male" => "Maldives",
    "Kathmundu" => "Nepal",
    "Dilhi" => "India"
);
next($countries);
next($countries);
echo key($countries);
echo PHP_EOL;
echo current($countries);
echo "<hr> \n";

prev($countries);
echo key($countries);
echo " = ";
echo current($countries);
echo "<hr> \n";

reset($countries);
echo key($countries);
echo " = ";
echo current($countries);
echo "<hr> \n";

end($countries);
echo key($countries);
echo " = ";
echo current($countries);