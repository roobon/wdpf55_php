<?php 
    function factorial($n){
        $result = 1;
        for($i = $n; $i > 1; $i--){
            $result *= $i;
        }
        return $result;
    }

    $x = "abcd"; // => result = 1. this is not right. That's why we have to use type hinting 
    
    echo "Factorial of {$x} is: " . factorial($x);

    echo "<hr>";
?>


<h4> Factorial using TYPE HUNTING </h4>
<?php 
    function factorial1(int $n){
        $result = 1;
        for($i = $n; $i > 1; $i--){
            $result *= $i;
        }
        return $result;
    }

    $x = 5;
    
    echo "Factorial of {$x} is: " . factorial1($x);

    echo "<hr>";
?>


<?php 
    function factorial2(int $n){
        $result = 1;
        for($i = $n; $i > 1; $i--){
            $result *= $i;
        }
        return $result;
    }

    $x = "abcd";  // you can't use a string after using type hinting of int. The argument has to be an integer.
    
    echo "Factorial of {$x} is: " . factorial2($x);

    echo "<hr>";
?>
