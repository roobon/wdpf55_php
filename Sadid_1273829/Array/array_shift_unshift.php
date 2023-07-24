<?php
    $car = ["bmw", "toyota", "Saab"];
    array_unshift($car, "Marchedes", "Audi", "Volvo");
    echo "<pre>";
    print_r($car);

    array_shift($car);
    print_r($car);

    array_pop($car);
    print_r($car);

    array_push($car, "Sadid");
    print_r($car)
?>