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

    $guess = $_POST["guess"];

    switch($guess){
        case $guess>= 8:
        echo "Excelent";
        break;
        case $guess>= 6:
        echo "good";
        break;
        default:
        echo "Poor"
    }
       
        //if($_POST['Guess']>=15){
        //    echo "This is Execelent";
       // }else if($_POST['Guess']>=10){
       //     echo "This vary Good";
       // }else if($_POST['Guess']>=8){
       //     echo "This is Avarage";
       // }
       //  else{
        //    echo "This is Poor";
       // }   
   }
?>
</body>
</html>