<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $x = "Hello";
    $y=  &$x;
    $y = "World";
    echo $y;
    echo "<br>";
    echo $x;
    ?>
</body>
</html>