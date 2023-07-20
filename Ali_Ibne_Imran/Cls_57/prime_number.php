<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="">
        <input type="text" name="number" placeholder="enter a number">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php 
        // print_r($_GET);
        if(isset($_REQUEST["submit"])){
            $myNumber = $_REQUEST["number"];

            function checkPrime($number){ //start function
                if($number == 0){
                    return "Never inpute 0";
                }else if($number == 1){
                    return "1 is not a Prime number";
                }else if($number == 2){
                    return "2 is a Prime number";
                }else{
                    for($i = 2; $i<$number; $i++){
                        if($number % $i == 0){
                            return "$number is not a Prime number";
                        }return "$number is a Prime number";
                    }
                }
            }//end of function
            echo checkPrime($myNumber);
        }
       
    ?>
</body>
</html>

