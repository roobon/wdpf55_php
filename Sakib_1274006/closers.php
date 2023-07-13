<?php 
ini_set('display_errors', 'off'); 
// upper line for error off
$x = 15;

$example = function(){
    // global $x;
    $x += 100;
    echo $x;

};
$example();
echo $x;



?>