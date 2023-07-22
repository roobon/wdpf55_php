<?php 

    $asia = ["Bangladesh", "Nepal", "Bhutan", "Srilanka"];

    $otherworld = ["Australia", "England", "South Africa", "Newzealand"];

    $merged = array_merge($asia, $otherworld);

    echo "<pre>";
    print_r($merged);
    shuffle($merged);
    print_r($merged);
?>