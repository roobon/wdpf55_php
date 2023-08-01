<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
       <input type="text" name="number" placeholder="Enter a number">
       <input type="submit" name="submit" value="submit">

    </form>

    <?php 
       if(isset($_REQUEST['submit'])){
         $myNumber = $_REQUEST["number"];

        function checkPrime($number){
            if($number == 0){
                 return "Never input 0";
            }else if($number == 1){
                return "1 is not a prime number";
            }else if($number == 2){
                return "2 is a prime number"
            }else{
                for(i = 2;  $i<$number; $i++){
                    if($number % $i == 0){
                            return ""
                    } 
                }
            }
        }





       }
    
    
    
    
    
    
    ?>
</body>
</html>