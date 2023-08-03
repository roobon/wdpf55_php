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
    switch ($_POST['InputNum']) {
        case ($_POST['InputNum'] >= 0 && $_POST['InputNum'] < 40):
            echo "You Failed";
            break;
            
        case ($_POST['InputNum'] >= 40 && $_POST['InputNum'] <= 60):
            echo "You got C";
            break;        

        case ($_POST['InputNum'] >= 61 && $_POST['InputNum'] < 80):
            echo "You got B+";
            break;        

        case ($_POST['InputNum'] >= 80 && $_POST['InputNum'] <= 100):
            echo "You got A+";
            break;
        
        default:
        echo "Obtained marks can't be 100+";
            break;
    } 

}
?>

</body> 
</html>