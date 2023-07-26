<h4> Example: 01 </h4>
<?php
    $num = 10;
    echo 'What is her age? \n She is $num years old';
    echo "<hr>";
?>


<h4> Example: 02 </h4>
<?php
    $score = 1234;
    $scoreboard = (array) $score;
    echo $scoreboard[0];
    echo "<hr>";
?>


<h4> Example: 03 </h4>
<?php
    $a;
    if ($a) {
        echo "hi";
    } else {
        echo "How are you";
    }
    echo "<hr>";
?>

<h4> Example: 04 </h4>
<?php
    $a = "1";
    switch ($a) {
        case 1:
            echo "Hasan";
            // Remember to include 'break' or 'exit' to prevent fall-through behavior
            break;
        case 2:
            echo "Rabbany";
            // Remember to include 'break' or 'exit' to prevent fall-through behavior
            break;
        default:
            echo "It is Naymur Rahman";
            // Optional: 'break' is not necessary in the 'default' case, as it's the last case.
    }
    echo "<hr>";
?>

<h4> Example: 05 </h4>
<?php
    $s = 15;
    $y = 20;
    if ($s < ++$s || $y < ++$y) {
        echo "Hello World";
    } else {
        echo "Hii everyone";
    }
    echo "<hr>";
?>

