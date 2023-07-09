<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PHP Datatype</h3>
    <?php 
    // string Data type
    $a = "Mizanur Rahman";
    var_dump($a);
    echo gettype($a);
    echo "<br>";

    // integer Data type
    $x = 10;
    var_dump($x); //to get Datatype of a variable with output.
    echo gettype($x); //to get Datatype only.
    echo"<br>";

    // float Data type
    $y = 15.60;
    var_dump($y);
    echo gettype($y);
    echo"<br>";

    //boolean Data type
    $z = true;
    var_dump($z);
    echo gettype($z);
    ?>
</body>
</html>