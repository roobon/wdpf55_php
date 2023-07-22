<?php 
$links = array("www.prothomalo.com ","www.daraz.com.bd", "www.w3schools.com");

// foreach($links as $link){
//     echo $link ."<br>";
// }

foreach($links as $link){
    echo "<a href = http:// ". $link .">" .$link . "</a> <br>";
}
echo "<hr>";
// $prices = array("Dhaka"=>200, "Khulan"=>300, "Cumilla" => 270);
// echo "<pre>";
// print_r($prices);
// echo "<tr>";
// foreach($prices as $city =>$price){
//     echo " <td> " .$city . " : " . $price ." </td> ";
// }
// echo "<tr>";

?>
<?php

$prices = array("Dhaka" => 200, "Khulna" => 300, "Comilla" => 270);

echo "<table border =1>";
echo "<tr>
        <th>City</th>
        <th>Price</th>
    </tr>";

foreach ($prices as $city => $price) {
    echo "<tr>";
    echo "<td >$city</td>";
    echo "<td>$price</td>";
    echo "</tr>";
}

echo "</table>";

?>


