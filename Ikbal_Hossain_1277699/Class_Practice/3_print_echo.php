<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = "Masum Ahmed";
    $age = 20;
    $city = "Dhaka";
    $from = "Cumilla";
    ?>

    <p> Name is <?php echo $name; ?></p>
    <p> Age is <?php echo $age; ?> </p>

    <?php
        echo "<p> {$name} lives in {$city} </P>"
    ?>

    <?php
        echo "His origin is {$from}";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        $x = 5;
        $y = 6;

        echo $x + $y;  // Summation
        echo "<br>";

        echo $x - $y;  // Subtraction
        echo "<br>";

        echo $x * $y;  // Multiplication
        echo "<br>";

        echo $x / $y;  // Division
        echo "<br>";

        echo $y % $x;  // Modulus
        echo "<br>";
        echo "<br>";


        // Concatenation
        echo $x . $y;
        echo "<br>";

        echo $x; echo $y;
        echo "<br>";

        // WE can use 
        print $x;
        print $y;
        echo "<br>";

        // not  print $x, $y;
        echo ($x); // We can use brackets
        print($x); // We can use brackets
    ?>





</body>

</html>