<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Type juggling in php</h3>
    <?php 
    $s = 100;
    $y = "10";
    $sum = $s+$y;
    var_dump($sum);
   
    echo "<br>";
    $p = 50;
    $q = "15.5";
    $result  = $p*$q;
    var_dump($result);
    

    $n = 50;
    $t = "400 result";
    $total = $n + $t;
    var_dump($total);
    ?>
</body>
</html>