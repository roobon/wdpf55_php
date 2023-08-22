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
        return false;  // function a jodi akbar return call hoy and seta true hoy tahole porer code ar run korbe na. tai else deoyar ar dorkar nei. only return false holei hobe. karon ture hole porer code se ar jabei na
    }

    $x = 699;

    $check = evenOrOdd4($x);  // ($x) is a value or argument.

    if($check){
        echo "$x is an even number";
    } else {
        echo "$x is an odd number";
    }
    echo "<hr>";

    // acca ei function dekhe ki buja jacce even hole true hobe or odd hole true hobe?? seta janar jonno amake code a giye check korte hocce. tai amader function ar akta meaningful name dite hobe
?>


<h3> More meaningful way of function declaration </h3>
<?php 
    // Determines if the argument is even or odd
    function isEven($n)
    {
        if($n % 2 == 0){
            return true;
        }
        return false;
    }

    $x = 1277699;

    $check = isEven($x);

    if(isEven($x)){  // eikhane function name dekhei buja jacce je even hole true check korbe otherwise false check korbe.
        echo "$x is an even number";
    } else {
        echo "$x is an odd number";
    }

    // *** eikhane ami caile function likhar kaj tuku onno file likhe rakhte pari ja amar user ar joono proyojon nai. user ar kache sudu value input korar option thakbe. backend ar code tar janar dorkar nai => => => this concept is called encapsulation.
?>
