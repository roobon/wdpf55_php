<?php

    ini_set("display_errors", "off"); //ei page er error bondho korte ini_set use korte hoy
    $x =55;
    $example = function(){
        //global $x;
        
        $x +=100;
        echo $x;
    };

    $example();
    echo $x;
?>
<?php
    echo "<hr>";

    $massage = "Today is wednessday";
    $say = function () use ($massage){
        $massage = "Tomorro is Thirsday";
        echo $massage. "<br>";
    };
    $say();
    echo $massage;
?>