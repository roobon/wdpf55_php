<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" name="myForm">
        <input type="number" name="InputNum" placeholder= "Guess Number">
        <button type="submit">Verify</button>
    </form>

<?php 
if(isset($_POST['InputNum'])){
    $MyNum = 123;
    if($_POST['InputNum'] == $MyNum){
        echo "Congreats";
    }else {
        echo "Not Match";
    }
}
?>

</body> 
</html>