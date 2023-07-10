<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
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