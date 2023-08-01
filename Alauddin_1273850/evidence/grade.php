<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_GET['submit'])){
            $mynumber = $_GET['number'];
            $mynum = strtoupper($mynumber);
            if($mynum == "A"){
                echo "Excellent";
            } elseif ($mynum == "B"){
                echo "Good";
            } elseif ($mynum == "C"){
                echo "Fair";
            } elseif ($mynum == "D"){
                echo "Poor";
            } elseif ($mynum == "E"){
                echo "Failure";
            }
        }
    
    ?>


    <form action="">
    <input type="text" name="number" placeholder="Enter your grading letter">
    <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>



