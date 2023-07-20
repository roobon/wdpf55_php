<?php 

$prices = [ "Bat"=>5000, "Ball"=> 500 , "Stamp"=> 300 ] ;

echo "<pre>" ;

print_r($prices) ;

foreach ( $prices as $Equipment => $price ) {
    echo " we need " . $Equipment .  " and money for "  . $price . " <br> " ;
}

echo "<br>";

echo "<table style='border:2px solid green; width:75% ; text-align:center '  >" ;
echo "<th style='border:2px solid blue;'>" . " Equipment " ;
echo "<th style='border:2px solid blue;'>" . " price " ;
foreach ( $prices as $Equipment => $price ) {

 

    echo  "<tr style='border:2px solid blue;'>" ;
        echo "<td style='border:2px solid blue;'>" . $Equipment ;
        echo "<td style='border:2px solid blue;'>" . $price ;
    echo  "</tr>" ;
}
echo "</table>"
?>