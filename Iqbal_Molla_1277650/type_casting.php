<h3>Type Casting</h3>
<?php
    $number = (double) 20;
    var_dump($number);

    echo "<br>";

    $txt = "Today is monday";
     $txt = (int) $txt;
     var_dump($txt);

     echo "<br>";

    $x =75.56;
    $x = (integer) $x;
    var_dump($x);

    echo "<br>";

    $score = 286;
    $score = (array) $score;
    var_dump($score);

    echo "<br>";
    
    echo "<pre>";

    print_r($score);

?>