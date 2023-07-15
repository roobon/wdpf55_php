<?php 
function isEven($n){ //this is parameter
if ($n % 2 == 0) {
    return true;
}
    return false;
}

$x = 21;
if(isEven($x)){  //this is argument
    echo "$x is an Even number";
}else{
    echo "$x is an Odd number";
}
?>