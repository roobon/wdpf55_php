<?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "<pre>";
    print_r($cars);
    echo "<hr>";
    array_unshift($cars,"Audi", "Marcedes");
    print_r($cars);
    echo "<hr>";
    array_shift($cars);
    print_r($cars);
?>