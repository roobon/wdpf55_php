<?php 
    function factorial($n){
        $result = 1;
        for($i = $n; $i > 1; $i--){
            $result *= $i;
        }
        return $result;
    }

    $x = 5;
    echo "Factorial of {$x} is " . factorial($x);

    echo "<hr>";
?>