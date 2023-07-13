<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $x = 75.5;
         if (is_numeric($x)){
            echo "Yes,This is numeric value";

         } 
         echo "<br>";


         $y = false;

         echo is_bool($y);
    
    
    ?>
    
</body>
</html>