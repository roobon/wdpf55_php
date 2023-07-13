<?php
    $fruits = array("Apple", "Orange", "Banana");
    echo "<pre>";
    print_r($fruits);
    echo "<hr>";

    $morefruits = array_unshift($fruits,"Jackfruits", "Lichi");
    echo "<pre>";
    print_r($fruits);
    echo "<hr>";

    array_shift($fruits);
    print_r($fruits);

    array_push($fruits, "Jackfruits");
    print_r($fruits);
    echo "<hr>";

    array_pop($fruits);
    print_r($fruits)
?>