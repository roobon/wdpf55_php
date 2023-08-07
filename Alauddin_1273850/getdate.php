<?php 

    $curren = time();

    $data = getdate($curren);
    
    echo "<pre>";
    print_r($data);
    echo "<br>";

    $curren = 1672565400;

    echo date("d-F-Y h:i:s", $curren);
    echo "<br>";
    echo mktime(10,30,00,1,1,2023);
    echo "<br>";

    $dob = mktime(00,00,00,1,5,1990);
    $curren = time();
    $diff = $curren - $dob;
    echo $diff/60/60/24/365;
    echo "<br>";


    $terminationDate = new DateTime('2018-05-30');
    $todaysDate = new DateTime('today');
    $span = $terminationDate->diff($todaysDate);
    echo "Year: ". $span->y . " Month: ". $span->m;
    // print_r($span);


?>