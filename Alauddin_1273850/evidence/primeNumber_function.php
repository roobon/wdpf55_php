<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    // print_r($_GET)
    

    if (isset( $_POST["submit"])) {   // jodi button e click kora hoy then aita show korbe
       

    function primeTest ($number) {
        
        if ($number == 0) {
            return "you can not input 0" ;
        } else if ( $number == 1 ) {
            return " 1 is not a prime number" ;
        } else if ( $number == 2) {
            return " 2 is a prime number" ;
        } else {
            for ( $i = 2; $i < $number ; $i++ ) { 
                if ( $number % $i == 0 ) {
                    return  " $number is not a prime number" ;
                }
            } 
            return  " $number is a prime number" ;
            // vaag shesh thakle = prime 
            // vaag shesh na thakle = not prime 
        }
    } // end of function

    $myNum =  $_POST['myNum'] ;        
   echo primeTest($myNum) ;
} 
    
    ?>


    <form action="" method="post">
        <input type="text" name="myNum" placeholder="Enter a Number"> <br>
        <input type="submit" value="SUBMIT" name="submit" >

    </form>
</body>
</html>