<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $name = "Molla";
    $age = 25;
    $country = "Bangladesh";
    $content = <<<MASUM
    <p>
        A boy name is $name his age is $age and lives in $country
    </p>
    MASUM;

    echo $content;
    ?>
</body>
</html>