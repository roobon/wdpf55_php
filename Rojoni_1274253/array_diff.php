<?php 
$array1 = array ("OH","CA","NY","HI","CI","CUMILLA","Noakhali");
$array2 = array ("OH","CA","NY","HI","IA","Rangpur");
$array3 = array ("OH","CA","NY","HI","Dhaka");
$diff = array_diff($array1,$array2,$array3);
print_r($diff);
?>