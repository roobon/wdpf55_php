<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = 0;
        while($a <= 10){
            echo"My Number: $a<br>";
            $a++;
        }
    ?>
    <hr>  
    <h3> Find square value using while loop </h3>
    <?php 
        $count = 0;
        while ($count <=5){
            // echo "$count squared = <br>";
            // echo "$count squared = " . pow($count, 2);
            echo "$count squared = " . pow($count, 2) . "<br>";
            $count++;
        }

    ?>
    <hr>
     <h3> Find square value using while loop </h3>
     <?php 
        $count = 0;
        while ($count <=5){
            // echo "$count squared = <br>";
            // echo "$count squared = " . pow($count, 2);
            echo "$count squared = ";
            echo pow($count, 2);
            echo "<br>";
            $count++;
        }

    ?>

</body>
</html>