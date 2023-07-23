<?php

$Asia = ["Bangladesh" ,"Nepal", "India", "Srilanka"];
$OtherWorld =["Australia", "England", "South Africa", "Finland"];

$merged = array_merge($Asia, $OtherWorld);
print_r($merged);
shuffle($merged);
print_r($merged);


?>