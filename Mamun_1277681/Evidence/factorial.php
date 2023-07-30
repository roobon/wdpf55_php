<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial</title>
</head>
<body>

<?php 
if(isset($_POST['submit'])){ //if(isset($_request['submit'])
    $myNum = $_POST['myNum'];
    $outPut = $myNum;
    for ($i=1; $i<$myNum; $i++){
    $outPut = $outPut*$i;
    }
    echo "Factorial number of {$myNum} " . " is " . $outPut;
}

if(isset($_REQUEST["submit"])){
    $number = $_REQUEST['myNum'];
    
}


?>
    <form action="" method="post">
        <input type="text" name="myNum" id="" placeholder="Enter a number">
        <input type="submit" name="submit" id="" value="Check">
    </form>
</body>
</html>