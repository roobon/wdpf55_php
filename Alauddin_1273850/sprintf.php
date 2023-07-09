<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $output = sprintf("%s is our new Candidate","Hero Alam");

        echo $output;
    
    ?>

    <?php 
    $cost = sprintf("$%.2f", 43.2); // $cost = $43.20

    echo "<br>";
    echo $cost
    ?>
</body>
</html>