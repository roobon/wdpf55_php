<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Values</title>
</head>
<body>

<?php 
if(isset($_REQUEST['submit'])){

    
    function PrimeCheck($number){// start function
        if($number==0){
            return "0 is not allowed";
        }
         else if($number==1){
            return "1 is not a prime number";

        }
        else if($number==2){
            return "2 is a prime number";
        }
        else{
            for($i=2; $i<$number; $i++){
                if($number% $i ==0){
                    return "$number is not a prime number";
                }
        }
        return $number . "is a prime number";
    }
}

//end of function
$mynumber = $_REQUEST['mynum'];
    echo PrimeCheck($mynumber);
}

//print_r($_GET);
// $GET['mynum'];
?>


<form action="" method="get">
    <input type="text" name="mynum" placeholder="Enter a Number"> <br>
    <input type="submit" name="submit" Value="SUBMIT">
</form>
</body>
</html>