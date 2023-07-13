<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="Guess" placeholder="Guess a number">
    <input type="submit" value="CHECK">
</form>
<?php
   if(isset($_POST['Guess'])){
        $number = 555;
        if($_POST['Guess']== $number){
            echo "Congratulation!";
        } else{
            echo "Sorry! to say";
        }   
   }
?>
</body>
</html>