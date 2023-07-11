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
    
    $guess = $_POST["guess"];
    switch($guess){
        case $guess>=8:
        echo "Excellent";
        break;
        case $guess>=5:
        echo "Good";
        break;
        default;
        case $guess>=3:
        echo "Poor";
        break;

    }
}
   ?>

<form method="post" action="">
    <input type="number" name="guess" placeholder="Input the secreat number">
    <input type="submit" value="CHECK">
    
</form>    

</body>
</html>