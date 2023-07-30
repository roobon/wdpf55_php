<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST["submit"])){
        $myNum = $_POST["num"];

        $output = $myNum;
        for($i= 1; $i<$myNum; $i++){
            $output = $output * $i;       
        }
        echo "Factorial of $myNum is : $output";
    }

    // $myNum = $_POST["num"];
    // $output = $myNum;
    // for($i= 1; $i<$myNum; $i++){
    //     $output = $output * $i;       
    // }
    // echo $output;
    ?>

    <form action="" method="post">
    <input type="text" name="num" placeholder="Enter a number">
    <input type="submit" name="submit" value="Check">

    </form>
</body>
</html>