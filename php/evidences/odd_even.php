<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Find out Odd/Even Number</h2>
    <?php 
    if(isset($_POST['submit'])){
        $mynum =  $_POST['number'];

        if($mynum % 2 == 0){
            echo 'Even number';
        } else {
            echo 'ODD number';
        }
    }    
    ?>
    <form action="" method="post">
        <input type="number" name="number">
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>