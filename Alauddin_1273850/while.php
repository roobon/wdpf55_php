<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $count = 0;
    $a = 1;
    // while($count < 10){
    //     $count++;
    //     echo"<br>";
    //     echo $count;
    // }

    while ($a <= 10){
        echo "My Number: $a<br>";
        $a++;
    }
    
    ?>

    <?php 
    $count = 1;
    while ($count <5){
        echo "$count squared = " . pow($count, 2) . "<br>";
        $count++;
    }
    
    ?>
</body>
</html>