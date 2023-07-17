<?php 
$n = 7;
for($i=$n, $factorial=1; $i>1; $i--){
    $factorial = $factorial * $i;
}
printf("Factorial of %d is %d",$n, $factorial);
?>