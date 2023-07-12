<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php 
 if(isset($_POST["guess"])){
    $number = 555;
 if ($_POST["guess"] == $number){
    echo "CONGRATULATION";
}else {
    echo"WRONG NUMBBER INPUTED!!!";
}
 }
 ?>

<form method="post" action="">
    <input type="number" name="guess" placeholder="Input the secreat number">
    <input type="submit" value="CHECK">
    
</form>    

</body>
</html>