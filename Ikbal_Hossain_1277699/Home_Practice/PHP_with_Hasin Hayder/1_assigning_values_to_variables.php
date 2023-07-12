<h3> (01) Assigning values to variables </h3>
<?php
    $color = "red";
    $number = 12;
    $age = 12;
    $sum = $age + "15";

    echo $age + "15";
    echo "<br>";

    // echo "The sum of variable age = $age + '15' = " . $age + "15";
?>

<h3> (02) Various ways to assign values to variables </h3>
<?php 
    $name = "Bangladesh";
    $age = 16;
    $question = "How are you?";

    echo "1 Hello Bangladesh";
    echo "<br>";

    echo "2 Hello " . "Bangladesh";
    echo "<br>";

    echo "3 Hello" . " " . "Bangladesh";
    echo "<br>";

    echo "4 Hello " .$name;
    echo "<br>";

    echo "5 Hello $name";
    echo "<br>";

    echo '6 Hello $name'; // Hello $name >= single quotation will consider "string" here.
    echo "<br>";

    echo "7 Hello {$name}";
    echo "<br>";

    echo "8 Hello {$name}, {$question}"; // Looking good/
    echo "<br>";

    echo "9 Hello " . $name . ", " . $question; // Looks not fine
    echo "<br>";


   
?>
