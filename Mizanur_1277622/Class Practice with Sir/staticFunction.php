<?php 
function add(){

    STATIC $n=15; 
    $n = $n + 5; //static means value of variable are store in variable
    echo $n;
    
    }
    
    add();
    echo "\n";
    add(); 
?>