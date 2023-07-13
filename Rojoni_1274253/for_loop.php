<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      for ($x=1;$x<=10;$x++){
        echo "The number is : $x<br>" ;

      } 


    ?>

    <?php 
        $days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
        for($x=0;$x<count($days);$x++){
            echo $days[$x]. "<br>";

        }


    ?>
    
</body>
</html>