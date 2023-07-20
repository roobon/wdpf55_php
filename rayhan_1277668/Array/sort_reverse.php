<?php 


$numbers = [1,5,7,12,10,25,3,86,420,69,96,54,84,48];

sort($numbers);  // main array ke change kore
echo"<pre>" ;
print_r($numbers) ;

$reversed = array_reverse($numbers) ; // main array ke change kore na. new array dey
echo"<pre>" ;
print_r($reversed);
