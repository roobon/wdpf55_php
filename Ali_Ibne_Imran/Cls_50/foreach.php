<?php 
    $links = array("www.w3schools.com","www.amazon.com","www.youtube.com");
    foreach($links as $link){
        echo $link."<br>";
    }
    echo"<hr>";
    foreach($links as $link){
        echo "<a href="."https://".$link.">".$link."</a>"."<br>";
    }
    echo"<hr>";
    $prices = array("Dhaka"=>200,"Khulna"=>250,"Cumilla"=>260);
    echo "<pre>";
    print_r($prices);
    echo "<ul>";
    foreach($prices as $city=>$price){
        echo "<li>"."Price of ".$city." = ".$price."</li>";
    }
    echo "</ul>";

    echo"<hr>";
    $prices = array("Dhaka"=>200,"Khulna"=>250,"Cumilla"=>260);
    echo "<pre>";
    print_r($prices);
    echo "<table border=1>";
        echo "<tr>
                <th>City</th>
                <th>Price</th>
            </tr>";
    foreach($prices as $city=>$price){
        echo "<tr>";
        echo "<td>".$city."</td>";
        echo"<td>".$price."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>