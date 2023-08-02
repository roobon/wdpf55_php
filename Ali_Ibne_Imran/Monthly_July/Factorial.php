<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">  
        <input type="number" name="number" placeholder="Enter A Number">  
        <input type="submit" name="submit" value="Submit"/>  
    </form>
    
    <?php 
        if(isset($_POST["submit"])){
            $myNumber = $_POST["number"];
            
            function Factorial($n){ 
                $total = 1;
                while($n>1){
                 $total = $total*$n;
                 $n--;
                }
                echo "Calculate my factorial is : $total";
             }   
             echo Factorial($myNumber);
        }
    ?>
</body>
</html>