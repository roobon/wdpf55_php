<?php 
$n = 10;
if ($n == 11){
    echo "Ten";
}else{
    echo "Not Ten";
}
echo PHP_EOL;

$numInWord = 11 == $n ? "Ten" : "Not Ten"; //ternaryOperator
echo $numInWord ."\n";
if ($n % 2 == 0){
    echo "$n is even number";
}else{
    echo "$n is odd number";
}
echo PHP_EOL;
$evenOdd = ($n % 2 == 0) ? "$n is even number" : "$n is odd number"; //ternaryOperator
echo $evenOdd;
?>