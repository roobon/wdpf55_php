<?php
    $links = array("www.amardesh.com", "www.youtube.com", "www.yahoo.com");
    foreach($links as $link){
        echo $link. "<br>";
    }
    echo "<hr>";

    foreach($links as $link){
        echo "<a href=http://".$link.">".$link. "</a><br>";
    }
    echo "<hr>";

    //Associative array
    $prices = array("Dhaka"=> 500, "Barishal"=>600, "Madaripur"=>700);

    echo "<pre>";
    print_r($prices);
        echo "<ul>";
    foreach($prices as $city=>$price){
       echo "<li>". $city. ":". $price. "</li>";
    }
    echo "</ul>";

    echo "<hr>";

   
    $prices = array("Dhaka"=> 500, "Barishal"=>600, "Madaripur"=>700);

    echo "<pre>";
    print_r($prices);

    echo "<table border=1>"; //table show city and price
        "<tr>
            <th>city</th>;
            <th>price</th>;
         </tr>";
    foreach($prices as $city=>$price){
        echo "<tr>";
            echo  "<td>$city</td>";
            echo  "<td>$price</td>";
        echo "</tr>";
    }
    echo "</table>";
?>