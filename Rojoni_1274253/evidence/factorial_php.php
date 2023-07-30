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
    $output = $mynum;
   for($i = 1; $i<$mynum; $i++){
    $output = $output * $i; 

   }
     echo "{$mynum}'s Factorial number of is :$output";
}
    
    
    ?>




    <form action="" method="post">
        <input type="text" name="mynum" placeholder="Enter a number">
        <input type="submit" name="submit" value="CHECK">
    </form>
    
</body>
</html>