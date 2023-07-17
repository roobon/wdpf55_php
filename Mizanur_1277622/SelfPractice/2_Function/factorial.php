<?php 
//Factorial with if condition //////////////
function factorial($n){
    if($n<=1){
        return 1;
    }else{
        return $n*factorial($n-1);
    }
}
//echo "factorial of 10 is " . factorial(10);
?>


<?php 
//Factorial with for loop //////////////
function fact(int $x){ //we define only integer value will be accepted otherwise this code show fatal error
 $output = 1;
 for($i=$x; $i>1; $i--){
    $output *= $i;
 }
 return $output;
}
$x = "5";
//echo "Factotial of $x is " .fact($x);
?>


<?php 
//Factorial with for loop and show if user input is string//////////////
function factori($x){ 
    if(gettype($x)!="integer"){
        return "invalid input";
    }
 $output = 1;
 for($i=$x; $i>1; $i--){
    $output *= $i;
 }
 return $output;
}
$x = 4;
echo "Factotial of $x is " .factori($x);
?>