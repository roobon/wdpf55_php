<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

    //print_r($_GET);

   if(isset($_REQUEST['submit'])){
        



        function primeCheck($number){ //start function
            if($number==0){
                return "0 is not allowed";
            }
            else if($number==1){
                return "1 is not a prime number";
            }
            else if($number==2){
                return "2 is a prime number";
            }
            else {
                for($i=2; $i<$number; $i++){
                    if($number % $i == 0){
                        return " $number is not a prime number";
                    }
                }
                return " $number is a prime number";
            }
           } //end of function
           $mynum =  $_REQUEST['mynum'];
           echo primeCheck($mynum);
   }


   

// function primetest(){
//     
//     if(x==0){
//         return "you can not input 0";
//     } else if($x==1){
//         return "1 is not a prime number";
//     } else if($x==2){
//         return "2 is a prime number";
//     } else {
//         for($i=2; $i<$x; $i++){
//             if($x%$i==0){
//                 return $x + " is not a prime number";
//                 //vag shesh na thakle = not a prime
//             }
//         }
//         return $x + " is a prime number";
//         //vag shesh thakle/ = is a prime
//     }
// }

?>

<h2>Prime number testing</h2>
    <form name="prime" method="post" >
        <input type="text" name="mynum">
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>