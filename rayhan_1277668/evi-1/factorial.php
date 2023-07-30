<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>

<form action="" method="post">
<input type="text" name="mynum" placeholder="Enter a Name">
<input type="submit" name="submit" value="CHECK">
</form>


<?php 
function factorial($num) {
   if ($num < 0){
    return -1 ;
   }  elseif ($num == 0) {
    return 1;
} else {
    return $num * factorial($num - 1);
}
       
}

if (isset($_POST['submit']) ) {
    $myNum = $_POST['mynum'];
    echo "Factorial of $myNum is " . factorial($myNum);
}
?>
</body>
</html>