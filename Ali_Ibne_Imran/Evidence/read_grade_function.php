<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="grade">
        <input type="submit" name="submit" value="Check">
    </form>

    <?php 
        if(isset($_POST["submit"])){
            $grade = $_POST["grade"];
           
            function checkResult($gt){
                if($gt == "A"){
                    return "Excellent";
                }else if($gt =="B"){
                    return "Good";
                }else if($gt =="C"){
                    return "Fair";
                }else if($gt =="D"){
                    return "Poor";
                }else if($gt =="F"){
                    return "Failure";
                }
            }  
            echo checkResult($grade); 
        }
    ?>
</body>
</html>