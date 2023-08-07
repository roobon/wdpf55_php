<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Find out Odd/Even Number</h2>
    <form method="get" action="">
        <input type="number" name="number" placeholder="Input a Number">
        <input type="submit" name="submit" value="CHECK">
        
    </form>

    <?php 
   
   if(isset($_GET["submit"])){
    $mynum = $_GET['number'];

    if($mynum % 2 == 0){
        echo "$mynum Even Number";
    }else {
        echo "$mynum Odd Number";
    }
   }
   
    
    ?>
</body>
</html>