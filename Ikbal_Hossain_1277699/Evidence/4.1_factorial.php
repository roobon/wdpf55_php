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

    echo "<hr>";
    
?>


<?php 
    function factorial1($n) {
        if ($n === 0 || $n === 1) {
            return 1;
        } else {
            return $n * factorial1($n - 1);
        }
    }
    
    $number = 5;
    $factorial1 = factorial1($number);
    echo "Factorial of $number is $factorial1";

    echo "<hr>";
    
?>

<?php 
    function factorial3($n){
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