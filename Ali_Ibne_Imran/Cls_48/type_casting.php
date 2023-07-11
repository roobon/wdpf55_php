<h3>Type Casting in PHP</h3>
<?php 
    $number = 150;
    var_dump($number);
    echo "<br>";
    $number = (double) $number;
    var_dump($number);
    echo "<br>";

    $txt = "Today is Monday";
    var_dump($txt);
    echo "<br>";
    $txt = (int)$txt;
    var_dump($txt);

    echo "<br>";
    $x = 75.56;
    var_dump($x);
    echo "<br>";
    $x = (int)$x;
    var_dump($x);

    echo "<br>";
    $score = 256;
    $score = (array)$score;
    var_dump($score);
    echo "<br>";
    print_r($score);
    echo "<pre>";
    var_dump($score);
    print_r($score);


    echo "<br>";
    


?>