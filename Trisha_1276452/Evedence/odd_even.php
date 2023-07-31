<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Find out odd or even number</h2>
<form action="" method="post">
<input type="number" name="number">
<input type="submit" name="submit" value="CHECK">

<?php

if(isset($_POST['submit'])){
    $mynum = $_POST['number'];

 
    if ($mynum % 2 == 0){
        echo "is an even number";
    } else {
        echo " is an odd number";
    }
}
?>
</form>
</body>
</html>









