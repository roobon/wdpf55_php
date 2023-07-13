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
    $from = "Cumilla"
    ?>
        <p>Name is <?php echo $name ; ?></p>
        <p>Age is <?php echo $age ; ?></p>
    <?php 
        echo "<p>{$name} lives in {$city}</p>";
    ?>
    <?php 
        echo "He origin is {$from}";
    
    ?>


<?php 
    $x = 5;
    $y = 6;

    echo ($x),  //echo $x; echo $y;
    print ($x); // print $y;


?>
</body>
</html>