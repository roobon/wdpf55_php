<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" name="myForm">
        <input type="number" name="InputNum" placeholder= "Input your exam mark">
        <button type="submit">Verify</button>
    </form>

<?php 
if(isset($_POST['InputNum'])){

    if($_POST['InputNum'] >= 0 && $_POST['InputNum'] < 40){
        echo "You Failed";
    }else if ($_POST['InputNum'] >= 40 && $_POST['InputNum'] <= 60){
        echo "You got C";
    }else if ($_POST['InputNum'] >= 61 && $_POST['InputNum'] < 80){
        echo "You got B+";
    }else if ($_POST['InputNum'] >= 80 && $_POST['InputNum'] <= 100){
        echo "You got A+";
    }else{
        echo "Obtained marks can't be 100+";
    }
}
?>

</body> 
</html>