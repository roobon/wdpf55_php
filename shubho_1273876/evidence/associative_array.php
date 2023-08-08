<?php

// Create the associative array
$countryCapitalArray = array(
    "United States" => "Washington, D.C.",
    "United Kingdom" => "London",
    "France" => "Paris",
    "Germany" => "Berlin",
    "Japan" => "Tokyo"
);

// Sort the array by keys (country names)
ksort($countryCapitalArray);

echo "<h2>Sorted Country-Capital Pairs</h2>";
echo "<ul>";
foreach ($countryCapitalArray as $country => $capital) {
    echo "<li>{$country}: {$capital}</li>";
}
echo "</ul>";

?>
