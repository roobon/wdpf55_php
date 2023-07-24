<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// print_r($_GET);

if(isset($_REQUEST["submit"])){

    echo $_REQUEST["number"];

    function primeCheck($number){
        if($number==0){
            return "0 is not allowed";
        }
        if($number==1){
            return "1 is not a prime number";
        }
        if($number==2){
            return "2 is a prime number";
        }
        else{
            for($i=0; $i<$number; $i++){
                if($number % $i == 0){
                    return "$number is not a prime number";
                }
            
            } return "$number is  a prime number";
        }

        }
    }
    $mynum = $_REQUEST["mynum"];
    echo primeCheck($mynum)



?>
    <form method="post" action="">

        <input type="text" name="number" placeholder="Enter a number"> <br>
        <input type="submit" name="submit" value="SUBMIT">
        
    </form>
</body>
</html>