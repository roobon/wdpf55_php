<?php 
     

     $links = array("www.prothomalo.com","www.daraz.com.bd","www.w3schools.com","www.facebook.com","www.tsports.com.bd");

    //  foreach ($links as $link) {
    //     echo $link . "<br>";
    //  }

    foreach ($links as $link) {
        echo" <a href=" . "http://"  . $link.">" . $link  . "</a><br>";
     }

    echo "<hr>";

    $prices = array("Dhaka"=>200, "Khulna"=>250, "Cumilla"=>260);
    echo "<pre>";
    print_r($prices);

    //  echo "<ul>";
    // foreach ($prices as $city => $price) {
    //    echo "<li>" . $city . ":" . $price . "<li>";
    //  }
    //  echo "</ul>";

    
    echo "<table border=4>";
    echo "<tr>
           <th>City</th>
           <th>Price</th>
          </tr>";
      foreach($prices as $city=>$price){
       echo "<tr>";
       echo"<td> $city </td>";
       echo"<td> $price </td>";
       echo "</tr>";
        
     }
     echo "</table>";

?>