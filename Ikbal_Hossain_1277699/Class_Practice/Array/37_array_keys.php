<?php 
    // array key function array er modde key gula niye arekta array make kore.
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    // Peter, Ben, Joy => Keys
    // 35, 37, 43 => Value

    $keys = array_keys($age);
    // echo $keys;
    // echo("<br>");

    echo("<pre>");
    print_r($keys);

?>