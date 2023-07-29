<?php 
$num = array(1,2,3,4,5,6,7,8,9);
function square($n){
    printf("Square of %d is %d \n",$n, $n*$n);
}
//array_walk($num, "square");

function cube($n){
    return $n*$n*$n;
}
$new = array_map("Cube",$num);
print_r($new);

function even($n){
    return $n%2==2;
}
$newEven = array_filter($num, "even");
print_r($newEven);
?>