<?php 

$cars = array("Volvo","BMW","Toyota");
echo "<pre>";
print_r($cars);
echo "<hr>";



$morecars = array_unshift($cars,"Marchedes","Audi");
echo "<pre>";
print_r($cars);
echo "<hr>";


array_shift($cars);
print_r($cars);



echo "<hr>";
$students= array ("Tokey", "Zobaed", array ("Aklima", "Sultana"),   "Hasan");    

echo (count($students  , 1)); 



echo "<hr>";
$color=array("red","yellow","white");
$x= in_array("black",$color);
if($x==1){
echo "good bye";}
if($x==0){
echo "Hello";}




?>