<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>TYpe Casting in PHP</h3>
    <?php 
        $number = (double)150;

        var_dump($number);
        echo"<br>";

        $txt ="Today is Monday";//this is string
        $txt = (int)$txt;//convert to integer
        var_dump($txt);
        echo "<br>";

        $x = 75.56;
        $x = (integer)$x;
        var_dump($x);
        echo "<br>";


        $score =256;
        $score = (array)$score;
        echo "<pre>";
        var_dump($score);
        echo "<br>";
        
        print_r($score);


    ?>
    
</body>
</html>