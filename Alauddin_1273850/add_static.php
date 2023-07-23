<?php 

function add(){

    STATIC $n=10; 
    $n = $n + 5; 
    echo $n;

}

add();
add(); 
add(); 
?>