<?php 
    $cars = array("Volvo", "BMW", "Toyota");
    echo "<pre>";
    print_r($cars);
    echo "<hr>";

    array_push($cars, "Marcedes", "Audi");
    
    print_r($cars);
    echo "<hr>";

    array_pop($cars);
    print_r($cars);


?>