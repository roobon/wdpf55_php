<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $line = "This is one line \n This is another line";
    echo $line;
    echo "<br>";

    $tabbedline = "Name \t\t Address \t Phone \t";  
    echo $tabbedline;
    echo "<br>";

    $carrageReturn = "This is one line \r This is another line";
    echo $carrageReturn;
    echo "<br>";

    echo "The price is $200";
    echo "<br>";

    echo 'This string will $print exactly as it\'s\n declared'

    ?>

    <?php 
    $cities["Dhaka"] = 250;
    $cities["Sylhet"] = 150;
    $cities["Barisal"] = 450;
    echo "<pre>";
    print_r($cities);

    
    ?>
</body>
</html>