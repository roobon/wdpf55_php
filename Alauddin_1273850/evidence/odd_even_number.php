<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php 
        // function oddeven($x){
        //     if($x % 2 == 0){
        //         return $x . " is a Even number";
        //     } else {
        //         return $x . "is a Odd number";
        //     }
        // }

        if(isset($_GET['submit'])){
            $mynum = $_GET['number'];

            if($mynum % 2 == 0){
                echo "$mynum is a Even number";
            } else {
                echo "$mynum is a Odd number";
            }
        }
    
    
    
    ?>


    <input type="number" name="number" placeholder="Enter a Number"><br>
    <input type="submit" name="submit" value="SUBMIT">
</body>
</html>