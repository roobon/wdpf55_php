<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Form value</h3>
    <?php
       //print_r($_GET);
    if(isset($_REQUEST['submit']));{ //submit checking
         function PrimeCheck($number){ //function start
                if($number==0){
                    return "0 is not allowed";
                }
                else if($number==1){
                    return "1 is not prime number";
                }
                else if($number==2){
                    return "2 is a prime number";
                }
                else{
                    for($i=2; $i<$number; $i++){
                            if($number % $i ==0){
                                return "$number is not a prime number";
                            }
                           
                    }
                    return "$number is a prime number";
                }
               
        }//end of the funtion
        $mynum = $_REQUEST['mynum'];
        echo PrimeCheck($mynum);
    }
    ?>

    <form action="" method="post">
        <input type="text" name="mynum" placeholder="Enter a number"> <br> <br>
        <input type="submit" name="sumbmit"  value="Submit">

    </form>
</body>
</html>