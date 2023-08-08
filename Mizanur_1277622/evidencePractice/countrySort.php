<?php 
$country = array("India" => "Delhi", "Srilanka" => "Colombo","Canada" => "Toronto", "Bangladesh" => "Dhaka", "Nepal" => "Kathmundu");
echo "<h3>Before sort</h3>";
//print_r($country);
foreach ($country as $cou => $city) {
    echo "<pre>";
    echo $cou . "=" . $city;
}
ksort($country);
//print_r($country);
echo "<h3>After sort</h3>";
echo "<table border=3>";
echo "<tr><th>Country Name</th><th>City Name</th></tr>";
foreach ($country as $cou => $city) {
    echo "<tr><td>$cou</td><td>$city</td></tr>";
    //echo $cou . "=" . $city;
}
echo "</table>";
?>