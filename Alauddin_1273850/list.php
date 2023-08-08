<?php 

$colors = ["Green", "Orange", "Gray"];

print_r($colors);
echo "<hr>";

list($val1, $val2, $val3,) = $colors;


echo "<br>", $val2, $val3;

echo "<hr>"
?>


<?php 
    function userProfile(){
        $user[] = "Masum";
        $user[] = "masum@gmail.com";
        $user[] = "016748964213";
        return $user;
    }

    list($name, $email, $phone) = userProfile();

    echo "Student name is {$name} . His email id is {$email} and phone number is {$phone} ."; 



?>
<?php 

$fruits = array ("apple", "orange", "banana");   

 echo (next($fruits));	    
 echo (next($fruits));    

?>
<?php    

$districts= array ("Dhaka", "Sylhet", "Khulna",    "Rangpur");    

echo (array_search ("Sylhet", $districts ) );    

?>
<?php
$colors = array("red", "blue", "green");
list($red, $blue, $green) = $colors;

echo $red. " is one of Element of  " . '$colors';
?>
<?php
$array = array("size" => "XL", "color" => "GOLD");
print_r(array_values($array));
?> 
 <?php
$color=array("red","yellow","white");
$x= in_array("black",$color);
if($x==1){
echo "good bye";}
if($x==0){
echo "Hello";}
?> 
<?php    

$students= array ("Tokey", "Zobaed", array ("Aklima", "Sultana"),   "Hasan");    

echo (count($students  , 1));   


$states = array("Florida");

$state = "Ohio";

printf("\$states is an array: %s <br />", (is_array($states) ? "TRUE" : "FALSE"));



?>
 <?php    
// function calcPrice($price, $tax="") 
// {      $total = $price + ($price * $tax);        
//         echo "$total";    
//  }    

// calc(42); 

function calcSalesTax($price, $tax=.02){

    $total = $price + ($price * $tax);
    
    echo "Total cost: $total";
    
    }
    
    $price = 10;
    
    calcSalesTax($price);       

?>
<?php

// Function add(){

// STATIC $n=5;

// $n=$n+5;

// echo $n;

// }

// add();

?>
<?php    
function a() {        
      function b() {    
            echo 'I am b'; 
        }

        echo 'I am a';    
}    
a();       
?>
<?php
echo "<br>";
function zz(& $x) {
$x=$x+5;
}
$x=10;
zz($x);
echo $x; 

?>
<?php        
// function foo($msg) {            
//    echo "$msg";        
// }        
// $var1 = "foo";        
// $var1("will this work"); 

// $price = 10; 

// $tax = 5; 

// $total =50;

// function calcSales($price, $tax){

// $total = $price + ($price * $tax);

// }

// echo "Total cost: $total";

echo "<br>";

function add(){

    STATIC $n=15; 
    $n = $n + 5; 
    echo $n;

}

add();

add(); 
?>
<?php    
$op2 = "blabla";              
function foo($op1) {       
 echo $op1;        
  echo $op2;    
}    
foo("hello");    
?>

<?php
function my_func($variable) {
   return (is_numeric($variable) && $variable % 2 == 0);
}
?>

<?php    
function calc($price, $tax)	    {        
$total = $price + $tax;    
}    
$pricetag = 15;    
$taxtag = 3;    

calc($pricetag, $taxtag);	    
?>

