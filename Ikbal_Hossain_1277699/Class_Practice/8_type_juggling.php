<h3> Type Juggling in PHP </h3>
<h4> Type juggling in PHP refers automatically convert data from one type to another as necessary to make the arithmetic operations, comparisons, and when passing arguments to functions possible.</h4>


<?php
    $x = 100;
    $y = "10";

    $sum = $x + $y;

    var_dump($sum);
    echo "<br>";

    $P

?>

<h3> More example about type juggling </h3>
<?php
    // Type juggling during arithmetic operation
    $numberString = "42";
    $number = $numberString + 5;
    // Here, $numberString is automatically converted from string to integer for the addition to be performed.
    echo $number;
    echo "<hr>";

    // Type juggling during comparison
    $intVar = 10;
    $stringVar = "10";
    if ($intVar == $stringVar) {
        // The values are equal, even though $intVar is an integer and $stringVar is a string.
        echo "true";
    } else {
        echo "false";
    }
    echo "<hr>";

    // Type juggling when passing arguments to a function
    function concatenateStrings($str1, $str2)
    {
        return $str1 . $str2;
    }

    $result = concatenateStrings("Hello", 42);
    echo $result;
    // Here, the integer value 42 is automatically converted to a string to concatenate with "Hello".
?>