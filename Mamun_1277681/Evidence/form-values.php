<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php 

 if(isset($_GET["submit"])){
    // echo $_GET["num"];
  

    function primeCheck($number){ //funcitom start
        if($number ==0){
            return " you can not input 0";
        }

        else if($number == 1){
            return " 1 is not a prime number";
        }
        else if($number ==2){
            return " 2 is a prime number";
        }
        else{
            for ($i = 2; $i<$number; $i++){ 
                if($number  %2 ==0){
                    return "$number is not a prime number";
                }
            }
            return "$number is a prime number";
        }
    }
    $mynum = $_REQUEST["num"];
    echo primeCheck($mynum);
 }
// $_GET["num"];
// echo $_GET["num"];
 ?>
    <form action="" name="myForm">
        <input type="number" name="num" id="" placeholder="Enter a number"> <br>
        <input type="submit" name="submit" id="" value="submit">
    </form>
</body>
</html>