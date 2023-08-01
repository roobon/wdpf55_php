<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST["submit"])){
            $mynum = $_POST["number"];

            $output = $mynum;
            for($i = 1; $i<$mynum; $i++){
                $output = $output*$i;
            }
            echo "$mynum's factorial number of is : $output";
        }
        
    ?>

    <form method="post">  
        <input type="number" name="number" placeholder="Enter the Number">  
        <input type="submit" name="submit" value="Submit" />  
    </form> 
</body>
</html>