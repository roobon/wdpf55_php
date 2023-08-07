<?php 
    $terminationDate = new DateTime('1997-02-02');
    $todaysDate = new DateTime('today');
    $span = $terminationDate->diff($todaysDate);
    echo "Year: $span->y Month: $span->m Day: $span->d";

    echo "<br>";
    echo "<pre>";
    print_r($span);
?>