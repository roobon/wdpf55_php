<?php 

    $asia = ["Bangladesh", "Nepal", "Bhutan", "Srilanka", "India"];
    $otherworld = ["Australia", "England", "South Africa", "Newzeland", "Island"];

    $marged = array_merge($asia, $otherworld);

    echo "<pre>";
    print_r($marged);
    shuffle($marged);
    print_r($marged);



?>