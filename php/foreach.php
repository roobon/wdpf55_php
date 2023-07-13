<?php 

    $links = array("www.prothomalo.com", "www.daraz.com.bd", "www.w3schools.com");

    foreach($links as $link){
        echo $link . "<br>";
    }
    echo "<hr>";

    foreach($links as $link){
        echo "<a href=http://" .$link. ">" . $link . "</a><br>";
    }
    echo "<hr>";

    // Associative Array
    $prices = array("Dhaka"=>200, "Khulna"=>250, "Cumilla"=>260);
    echo "<pre>";
    print_r($prices);

    echo "<ul>";
    foreach($prices as $city=>$price){
       echo "<li>" . $city . ":" .  $price . "</li>";  
    }
    echo "</ul>";


    echo "<table border=1>";
    echo "<tr>
            <th>City</th>
            <th>Price</th>
        </tr>";
    foreach($prices as $city=>$price){
        echo "<tr>";
        echo "<td> $city </td>";
        echo "<td> $price </td>";
        echo "</tr>";  
    }
    echo "</table>";




?>