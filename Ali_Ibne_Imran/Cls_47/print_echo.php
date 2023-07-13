<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = "Ali Imran";
        $age = 20;
        $city = "Barisal";
    ?>
    <p>Name is <?php echo $name?></p>
    <p>Age is <?php echo $age?></p>
    <p>City in <?php echo $city?></p>
    <p><?php echo $name." come from ".$city?></p>
    <?php 
        echo "His origin is {$city}";
    ?>
    <br>
    <?php
        $a = 6;
        $b = 5;
        echo $a, $b;
    ?>


</body>
</html>