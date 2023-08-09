<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="number" placeholder="Enter a number">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php 
        if(isset($_POST["submit"])){
            $myNumber = $_POST["number"];

            function checkPrime($n){
                if($n == 0){
                    return "Never input 0";
                }else if($n == 1){
                    return "1 is not a Prime number";
                }else if($n == 2){
                    return "2 is a Prime number";
                }else{
                    for($i=2; $i<$n; $i++){
                        if($n%$i == 0){
                            return "$n is not a Prime number";
                        }else{
                            return "$n is a Prime number";
                        }
                    }
                }
            }
            echo checkPrime($myNumber);
        }
    ?>
</body>
</html>

