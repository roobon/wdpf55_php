<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // So, the sprintf() function can be used for both printing the output and sending the formatted output to a variable, making it a versatile function for string formatting in PHP.
    
    $districts_number = 64;

    printf("Bangladesh has %d District", $districts_number);

    echo "<br>";
    printf("Today's temperature is %d and yesterday was %.2f", 33, 34.5);
    echo "<br>";
    printf("Today's temperature is %f and yesterday was %d", 33, 34.5);
    echo "<br>";

    printf("%s is a good boy", "Masum");

    ?>
</body>

</html>