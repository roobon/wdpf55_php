<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="mynum" placeholder="Enter a number">
        <input type="submit" name="submit" value="CHECK">
    </form>

    <?php
      
        if (isset($_POST["submit"])) {
            $mynum = $_POST["mynum"];

            $output = $mynum; // 3
            for($i = 1; $i < $mynum; $i++){
                $output = $output * $i;  // 3*1 = 3, 3*2 = 6
            }
            echo "Factorial number of {$mynum} is: {$output}";
        }
    ?>
</body>

</html>