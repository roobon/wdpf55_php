<?php 
function displayNum($number){
    if($number<=5){
        echo $number . "\n";
        $number++;
        return displayNum($number);
    }
}
displayNum(1);
?>