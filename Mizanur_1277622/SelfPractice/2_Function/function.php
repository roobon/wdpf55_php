<?php 
function isEven($n){ //this is parameter
if ($n % 2 == 0) {
    return true;
}
    return false;
}
//we can use seperate following code for public so that we don't need to show this code to public.
$x = 121;
if(isEven($x)){  //this is argument
    echo "$x is an Even number";
}else{
    echo "$x is an Odd number";
}
?>