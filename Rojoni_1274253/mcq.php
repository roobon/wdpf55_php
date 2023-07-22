<?php 
function calc($price, $tax)	    {        
$total = $price + $tax;    
}    
$pricetag = 15;    
$taxtag = 3;    

calc($pricetag, $taxtag);

echo"<hr>";
Function add(){

    STATIC $n=5;
    
    $n=$n+5;
    
    echo $n;
    
    }
    
    add();

    echo"<hr>";


    $price = 10; 

$tax = 5; 

$total =50;

function calcSalesTax($price, $tax){

$total = $price + ($price * $tax);

}

echo "Total cost: $total";

echo"<hr>";

function foo($msg) {            
    echo "$msg";        
 }        
 $var1 = "foo";        
 $var1("will this work"); 
 
 

 
// echo"<hr>";
//  function $calcSalesTax($price, $tax=.02){

//     $total = $price + ($price * $tax);
    
//     echo "Total cost: $total";
    
//     }
    
//     $price = 10;
    
//     $calcSalesTax($price);


    
echo"<hr>";

$op2 = "blabla";              
function foo($op1) {       
 echo $op1;        
 echo $op2;    
}    
foo("hello"); 

echo"<hr>";

function add(){

    STATIC $n=15; 
    $n = $n + 5; 
    echo $n;

}

add();

add(); 



echo"<hr>";
function my_func($variable) {
    return (is_numeric($variable) && $variable % 2 == 0);
 }








?>