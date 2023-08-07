<?php 
    $country = ["Bangladesh", "Nepal", "Bhutan", "Srilanka"];

    $capital = ["Dhaka", "Katmandu", "Thimpu", "colombo"];

    $merged = array ($country, $capital);
    echo("<pre>");
    print_r($merged);
?>


<?php 
    $country = ["Bangladesh", "Nepal", "Bhutan", "Srilanka"];

    $capital = ["Dhaka", "Katmandu", "Thimpu", "colombo"];

    $combined = array_combine($country, $capital);
    echo("<pre>");
    print_r($combined);
?>