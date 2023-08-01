<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php
   if(isset($_GET["submit"])){
    $mynum = $_GET["number"];


        if($mynum % 2 == 0){
            echo "$mynum is Even number";
        }else{
            echo "$mynum is Odd number";
        }
    
   }
  
   
   ?>
   <h2>Find out Odd/Even Number</h2>
    <form method="get" action="">
        <input class="form-control" type="number" name="number" placeholder="Enter Your Number">
        <input class="form-control" type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>