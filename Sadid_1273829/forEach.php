<?php

$fruits = ["mango", "apple", "banana", "pine-apple", "orange", "guava", "jack-fruits"];

foreach($fruits as $fruit) {
    echo $fruit. "<br>";
}
echo "<hr>";


$links = ["www.prothomalo.com", "www.daraz.com.bd", "www.w3schools.com"];

foreach($links as $link) {
    echo $link. "<br>";
}
echo "<hr>";

foreach ($links as $link) {
    echo "<a href=http://".$link.">". $link. "</a><br>";
}

echo "<hr>";

$prices = ["Dhaka"=>200, "Khulna"=> 220, "cumilla"=>210];

// echo "<ul>";
// foreach ($prices as $city => $prices) {
//     echo "<li>". $city ." => ". $prices ."</li>";
// }
// echo "</ul>";

echo "<table border=1; >";
echo "<tr>
        <th>City</th>
        <th>Price</th>
    </tr>";
foreach ($prices as $city => $price) {
        echo "<tr>";
            echo "<td>$city</td>";
            echo "<td>$price</td>";
        echo "</tr>";
        }
echo "</table>";