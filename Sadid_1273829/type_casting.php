<?php
    $num = 150;

    $num1 = (double)$num;
    var_dump($num1);
    echo $num1;


    $txt = "today is friday";
    $txt = (int) $txt;
    echo $txt;
    var_dump($txt);

    $x = 75.64;
    $x = (int) $x;
    var_dump($x);

    $score = 256;
    $score = (array) $score;
    var_dump($score);

    print_r($score);
?>