<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $districts_number = 64;

        printf("Bangladesh has %d Districts", $districts_number);
        
        echo "<br>";
        printf("Today's temparature is %d and yesterday was %.2f", 33, 34.5);
        echo "<br>";
        printf("Today's temparature is %.2f and yesterday was %d", 33, 34.5);

        echo "<br>";
        printf("%s is a good boy", "Masum");
    ?>
</body>
</html>