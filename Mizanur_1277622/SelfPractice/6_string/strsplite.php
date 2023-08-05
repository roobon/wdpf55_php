<?php 
$str = "Hello World";
$wordSplit = str_split($str);
print_r($wordSplit);

$parts1 = strtok($wordSplit, " ");
?>