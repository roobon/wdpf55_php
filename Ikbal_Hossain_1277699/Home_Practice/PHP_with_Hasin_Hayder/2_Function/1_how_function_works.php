<?php 
    function evenOrOdd($n){
        if($n %2 == 0){
            return "even number";
        } else {
            return "odd number";
        }
    }

    $x = 12;
    evenOrOdd($x);
?>