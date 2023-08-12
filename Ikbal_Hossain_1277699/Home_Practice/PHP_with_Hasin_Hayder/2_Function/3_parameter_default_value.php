<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4> Basic function </h4>
    <?php 
        function serve($foodType, $numberOfItems){
            echo "{$numberOfItems} of {$foodType} have  been served";
        }
        $ft = "Coffee";
        $n = "2 cups";

       serve($ft, $n);
       echo "<hr>";
    ?>

<h4> Function parameter default value or optional parameter </h4>
<?php 
        function serve1($foodType, $numberOfItems){
            echo "{$numberOfItems} of {$foodType} have  been served";
        }

        $ft = "Coffee";
        // $n = "";

       serve1($ft, $n);
       echo "<hr>";
    ?>


<?php 
        function serve2($foodType, $numberOfItems = "1 cup"){  // set a default parameter 
            echo "{$numberOfItems} of {$foodType} has  been served";
        }

        $ft = "Coffee";

       serve2($ft);
       echo "<hr>";
    ?>



<?php 
        function serve3($foodType = "Coffee", $numberOfItems = "3 cup"){  // set a default parameter 
            echo "{$numberOfItems} of {$foodType} have  been served";
        }

       serve3();
       echo "<hr>";
    ?>

<h4> Default parameter overwrite </h4>
<?php 
        function serve4($foodType, $numberOfItems = "1 cup"){  // set a default parameter 
            echo "{$numberOfItems} of {$foodType} has  been served";
        }

        $ft = "Coffee";
        $n = "4 cups";  // default parameter deoyar por o jodi argument set kore dei tahole se oi argument er value ke default parameter ar jaygay overwrite kore nibe


       serve4($ft, $n);
       echo "<hr>";
    ?>





<?php 
        function serve5($foodType = "Coffee", $numberOfItems = "3 cup"){  // set a default parameter 
            echo "{$numberOfItems} of {$foodType} have  been served";
        }

       serve5();
       echo "<hr>";
    ?>
</body>
</html>