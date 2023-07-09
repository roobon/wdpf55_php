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
    $from = "Comilla";
    ?>
    <p>Name is <?php echo $name; ?></p>
    <p>Age is <?php echo $age; ?></p>

    <?php 
    echo "<p>{$name} lives in {$city} </p>";
    ?>
    <?php 
    echo "His origin is {$from}";
    ?>

    <?php 
    $x = 5;
    $y = 8;
    echo $x. $y;
    print $x; print $y;
    ?>

<?php
# Title: My first PHP script
# Author: Jason Gilmore
echo "This is a PHP program."; # Some comment here
?>
   

</body>
</html>