<?php 
    $numbers = array(25, 7, 20, 15, 30);

    echo("<pre>");
    ksort($numbers);
    print_r($numbers);
    echo("<br>");
?>


<?php 
    $fruits = array("Apple"=>215, "Mango"=>50, "Orange"=>30, "Grape"=>200);
    // echo("<pre>");
    ksort($fruits);
    print_r($fruits);
    echo("<br>");
    // only associative array upor result buja jay. 
?>

<?php 
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");

    ksort($days);
    print_r($days);
?>

