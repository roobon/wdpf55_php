<?php 
    function factorial($n) {
        if ($n === 0 || $n === 1) {
            return 1;
        } else {
            $result = 1;
            for ($i = 2; $i <= $n; $i++) {
                $result *= $i;
            }
            return $result;
        }
    }
    
    $number = 5;
    $factorial = factorial($number);
    echo "Factorial of $number is $factorial";
    
?>