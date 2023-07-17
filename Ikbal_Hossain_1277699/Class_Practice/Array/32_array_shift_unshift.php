<?php 
    $cars = array("Volvo", "BMW", "Toyota");
    echo "<pre>";
    print_r($cars);
    echo "<hr>";

    array_unshift($cars, "Marcedes", "Audi");
    print_r($cars);
    echo "<hr>";

    array_shift($cars, "Marcedes");
    print_r($cars);
    echo "<hr>";
?>