<?php 

function add(){

    STATIC $n=15; 
$n = $n + 5; 
echo $n;

}

add();

add();

// echo "<br>";

// echo"<hr>";
// function add(){

//      $n=15; 
// $n = $n + 5; 
// echo $n;

// }

// add();

// add(); 