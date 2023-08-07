<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST['submit'])){
            $mynum = $_POST['mynum']; 
            $output = $mynum;    //3
            for($i = 1; $i<$mynum; $i++){
            $output = $output * $i;    //3x1, 3x2  
            }
            echo "{$mynum}'s Factorial number is :{$output}";
            }
      
    ?>
    <form action="" method="post">
        <input type="text" name="mynum" placeholder="Enter a number">
        <input type="submit" name="submit" value="CHECK">
    </form>

</body>
</html>