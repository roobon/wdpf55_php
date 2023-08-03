<?php 
    $country = ["Bangladesh", "Nepal", "Bhutan", "Srilanka"];

    $capital = ["Dhaka", "Katmandu", "Thimpu", "kolombo"];

    $merged = array ($country, $capital);
    echo("<pre>");
    print_r($merged);
?>

<?php 
    $country = ["Bangladesh", "Nepal", "Bhutan", "Srilanka"];

    $others = ["Pakistan", "Australia", "England", "South Africa"];

    $merged = array_merge($country, $capital);
    echo("<pre>");
    print_r($merged);
?>