<h3> Basic function declaration </h3>
<?php
    function evenOrOdd($n)  // ($n) is a parameter.
    {
        if ($n % 2 == 0) {
            return "even number";
        } else {
            return "odd number";
        }
    }

    echo evenOrOdd(12);  // (12) is a value or argument.
    echo "<hr>";
?>


<?php
    function evenOrOdd1($n) // ($n) is a parameter.
    {
        if ($n % 2 == 0) {
            return "$n is an even number";
        } else {
            return "$n is an odd number";
        }
    }

    $x = 13;
    echo evenOrOdd1($x);  // ($x) is a value or argument.
    echo "<hr>";
?>


<?php
    function evenOrOdd2($n)  // ($n) is a parameter.
    {
        if ($n % 2 == 0) {
            return "$n is an even number";
        } else {
            return "$n is an odd number";
        }
    }

    $x = 60;

    $check = evenOrOdd1($x);  // ($x) is a value or argument.
    echo $check;
    echo "<hr>";
?>

<h3>Function declaration another way</h3>

<?php
    function evenOrOdd3($n)  // ($n) is a parameter.
    {
        if ($n % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    $x = 48;
      

    if(evenOrOdd3($x)){  // ($x) is a value or argument.
        echo "$x is an even number";
    } else {
        echo "$x in an odd number";
    }
    echo "<hr>";
?>


<?php 
    function evenOrOdd4($n)  // ($n) is a parameter.
    {
        if($n % 2 == 0){
            return true;
        }
        return false;
    }

    $x = 699;

    $check = evenOrOdd4($x);  // ($x) is a value or argument.

    if($check){
        echo "$x is an even number";
    } else {
        echo "$x is an odd number";
    }
    echo "<hr>";
?>