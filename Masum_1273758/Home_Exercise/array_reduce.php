<?php 
function sum($store,$item){
    $store+=$item;
    return $store;
}
function product($store,$item){
    $store*= $item;
    return $store;
}
$a=array(1,2,3,4,5,6,7);
$b= array();
var_dump(array_reduce($a,"sum"));
echo "<br>";
var_dump(array_reduce($a,"product",10));
echo "<br>";
var_dump($b,"sum","No data to reduce");
echo "<hr>";
$arr = array("A","B","C","D","E","F","G","H","Ï","J","K");
echo "<pre>";
print_r(array_chunk($arr,2));
echo "<hr>";
$arr = array("A","B","C","D","E","F","G","H","Ï","J","K");
print_r(array_chunk($arr,2,true))



?>