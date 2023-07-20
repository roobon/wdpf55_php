<?php 
$x = 85;
//evenOdd detect
if($x % 2 == 0){
    echo "$x is an even number";
}else {
    echo "$x is an odd number";
}
echo PHP_EOL;
//lessthan or greaterthan
if ($x > 10){
    echo "$x is greater than 10";
}else{
    echo "$x is less than 10";
}
echo PHP_EOL;

//LeapYear check
$year = 2024;
if($year % 4 == 0){
    echo "Yes! $year is a leapyear";
}else{
    echo "No! $year is not a leapyear";
}

echo PHP_EOL;

$m = 45;
$n = 45;
if($m != $n){
    echo "$m is not equal to $n";
}else{
    echo "$m is equal to $n";
}
echo PHP_EOL;
$fish = "Hilsha";
if("Hilsha" == $fish){
    echo "$fish is a fish name";
}else{
    echo "$fish is not a fish name";
}
?>