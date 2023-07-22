<?php 
 
//  $color=array("red","yellow","white");
//  $x= in_array("black",$color);
//  if($x==1){
//  echo "good bye";}
//  if($x==0){
//  echo "Hello";}
 

// $numbers = range(1,6);
//  print_r($numbers);

// $districts= array ("Dhaka", "Sylhet", "Khulna",    "Rangpur");    

// echo (array_search ("Sylhet", $districts ) );    

// $states = array("Ohio", "New York");

// array_unshift($states, "California", "Texas");
// $states = array("Florida");

// $state = "Ohio";

// printf("\$states is an array: %s <br />", (is_array($states) ? "TRUE" : "FALSE"));

// $students= array ("Tokey", "Zobaed", array ("Aklima", "Sultana"),   "Hasan");    

// echo (count($students  , 1));  


// $array = array("size" => "XL", "color" => "GOLD");
// print_r(array_values($array));

// $countries = array(

//     "Bangladesh" => array    ("population" => "17 Crores", "capital" => "Dhaka"), "China" => array( "population" => "100 Crores",    "capital" => "Beijing"),"Japan" => array( "population" => "5 Crores",    "capital" => "Pyong Yong"),  
    
//      );
    
//         echo $countries["China"]["population"];  
// $fruits = array ("apple", "orange", "banana");   

//  echo (next($fruits));	    
//  echo (next($fruits));    
// $countries = array(

//     "Bangladesh" => array    ("population" => "17 Crores", "capital" => "Dhaka"), "China" => array( "population" => "100 Crores",    "capital" => "Beijing"),"Japan" => array( "population" => "5 Crores",    "capital" => "Pyong Yong"),  
    
//      );
    
//         echo $countries["China"]["population"]; 
// // 
// function calc($price, $tax="") 
// {      $total = $price + ($price * $tax);        
//         echo "$total";    
//  }    

// calc(42);    
// function add(){

//     STATIC $n=15; 
//     $n = $n + 5; 
//     echo $n;

// // }
// function zz(& $x) {
//     $x=$x+5;
//     }
//     $x=10;
//     zz($x);
//     echo $x; 
// function a() {        
//     function b() {    
//           echo 'I am b'; 
//       }

//       echo 'I am a';    
// }    
// a();       
// function foo($msg) {            
//     echo "$msg";        
//  }        
//  $var1 = "foo";        
//  $var1("will this work"); 
$price = 10; 

$tax = 5; 

$total =50;

function calcSalesTax($price, $tax){

$total = $price + ($price * $tax);

}

echo "Total cost: $total";


?>