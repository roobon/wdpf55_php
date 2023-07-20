<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test Prime or Factorial Numbers</h1>
    <form action="" method="post">
    <input type="text" name="number" placeholder="enter a number">
    <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>

<?php 
//print_r($_GET);
//echo $_GET["number"];

if(isset($_POST["submit"])){   //_GET method is default and it show value on url also
    //echo $_POST["number"];      //_POST method is secure & it not show value on users url.


    //Function Start//
    function PrimeCheck($n){
        if($n==0){
            return "0 is not prime number";
        }
        else if($n==1){
            return "1 is not prime number";
        }
        else if($n==2){
            return "2 is not prime number";
        }else{
            for($i=2; $i<$n; $i++){
                if($n%$i==0){
                    return "$n is not a prime number";
                }
            }
            return "$n is a prime number";
        }
    }
    //Function End//

    $inputNum = $_POST["number"];
    echo PrimeCheck($inputNum);
}


?>
