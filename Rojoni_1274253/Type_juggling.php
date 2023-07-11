<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Type Juggling in PHP</h3>

    <?php 
        $x = 100;
        $y = "10";

        $sum = $x + $y ;

        var_dump($sum);
        echo "<br>";

        $p = 50;
        $q = "15.5";

        $result = $p * $q ;
        var_dump($result);
        echo "<br>";

        $txt = "500 Cows";
        $more = 50;

        $total = $txt +$more;
        echo $total;

        


    ?>
    
</body>
</html>