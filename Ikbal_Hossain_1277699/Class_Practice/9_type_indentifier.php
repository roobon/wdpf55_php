<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3> Type Identifier </h3>
    <h4> In PHP, the is_ prefix is commonly used for a family of functions that are used to check the type or characteristics of variables or values. These functions return a boolean value true(1) or false(0) based on whether the specified condition is true or not.</h4>
    <?php
    // it shows the result by 0(false) or 1(true) according to the condition
        $x = 75.5;
        echo is_numeric($x);
        echo "<br>";

        $y = 75.6;
        if (is_numeric($y)) {
            echo "Yes, This is a numeric value";
        }
        echo "<br>";

        $z = false;

        echo is_bool($z);

    ?>
</body>

</html>