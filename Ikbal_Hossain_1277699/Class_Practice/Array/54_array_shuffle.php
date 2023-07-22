<?php 
    $country = ["Bangladesh", "Nepal", "Bhutan", "Srilanka"];

    $others = ["Pakistan", "Australia", "England", "South Africa"];

    $merged = array_merge($country, $capital);
    echo("<pre>");
    print_r($merged);
    echo("<br>");

    shuffle($merged);
    print_r($merged);

?>