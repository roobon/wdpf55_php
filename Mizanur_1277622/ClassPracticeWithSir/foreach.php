<?php 
$siteLists = array("www.google.com", "www.youtube.com", "www.w3school.com");
foreach ($siteLists as $siteList) {
    //echo $siteList . "\n";
    //echo "<a href=" . "http://" . $siteList .">" . $siteList3 . "</a></br>";
}

echo "\n. <hr>";

//Associative Array
$prices = array("Dhaka"=>200, "Chitagong"=>150, "Barisal"=>100);
echo "<pre>";
//print_r($prices);

echo "<table border=5>";
echo "<tr>
        <th>City</th>
        <th>Price</th>
        </tr>";
foreach ($prices as $city => $price) {
    //echo $city . " : ". $price . "<br>";
    echo "<tr>";
    echo "<td> $city </td>";
    echo "<td> $price </td>";
    echo "</tr>";
}
echo "</table>";
?>