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
    

    <p>Name is <?php echo $name;?></p>
    <p>Age is <?php echo $age;?></p>
    <?php 
       echo "<p>{$name} lives in {$city} </p>"
    ?>

    <?php 
       echo "His origin is {$from}";
    ?>

    <?php 
       $x = 5;
       $y = 6;


       echo ($x); $y; //We can use brackets
       echo $x, $y; //Echo can print multiple cariable using comma
       print ($x); print $y; //We can use brackets
    ?>
</body>
</html>