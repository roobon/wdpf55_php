<?php
    $name = "Hasnain Sadid";
    $age = 25;
    $country = "Bangladesh";
    
    $content = <<<MASUM
        <h1>Introduction</h1>
        <p>Hello this is $name. I am $age years old & live in {$country}.</p>
    MASUM;

    echo $content;
?>