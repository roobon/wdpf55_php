<?php

ini_set("display_error", "off");
        $x = 15;
    $example = function(){
        global $x;
        echo $x += 100;
    };
    $example();
    echo PHP_EOL;
    echo $x; #eikhane global keyword use kra hoiche & function er moddhe $x change korle global $x er value tao change hoye jabe....
    echo "<hr>"
?>
<?php
    $msg = "Hasnain Sadid";

    $exp = function() use ($msg){
        echo $msg;
    };
    $exp();
?>
<?php
    $msg = "Hasnain Sadid";

    $exp = function() use ($msg){
        $msg = "bangladesh";
        # eikhane use keyword dewar jonno global $msg er value change hobe na, kintu function er vitorer value ta change hye jabe.... 
        // &$msg dile sob $msg er value change hoye jabe... 
        echo $msg;
    };
    $exp();
    echo $msg;
?>