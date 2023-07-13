<?php 

$links = array("www.prothomalo.com", "www.daraz.com.bd", "www.w3schools.com");

foreach($links as $a){

    echo$a. "<br>";

}

echo "<hr>";

$links = array("https://www.prothomalo.com", "https://www.jagonews24.com/", "https://www.w3schools.com/");

foreach($links as $a){

    echo "<a href=" . $a. ">" . $a ."</a><br>";

}

echo "<hr>";

$links = array("www.prothomalo.com", "www.jagonews24.com", "www.w3schools.com");

foreach($links as $a){

    echo "<a href=http://" . $a. ">" . $a ."</a><br>";

}
echo "<hr>";

$prices = array("Dhaka"=>200, "Khulna"=>250);
echo "<pre>";
print_r($prices);

echo "<ul>";

foreach($prices as $key=>$value){

    echo "<li>" . $key . ":" . $value . "</li>";
}
echo "</ul>";


echo "<hr>";

$prices = array("Dhaka"=>200, "Khulna"=>250);
echo "<pre>";
print_r($prices);

echo "<table border=1>";
echo "<tr>
        <th>District</th>
        <th>Prices</th>
        </tr>";

foreach($prices as $key=>$value){

    echo "<tr>";
    echo "<td>$key </td>";
    echo "<td>$value </td>";
    echo "</tr>";
    
}
echo "</table>"

?>