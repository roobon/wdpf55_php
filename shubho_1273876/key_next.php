<?php
$countries = array("Dhaka" => "Bangladesh", "kathmundu" => "Nepal", "Colombo" => "Srilanka", "Maley" => "Maldives");

echo key($countries);
next($countries);
echo "<br>";
echo key($countries);

while ($key = key($countries)) {
    echo "$key <br>";
    next($countries);
}


echo "<br>";
foreach ($countries as $key => $value) {
    echo "$key <br>";
}
