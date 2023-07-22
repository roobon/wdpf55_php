<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    <form action="" method="post">
        <input type="text" name="num" id="" placeholder="Enter the number">
        <button type="submit">Check</button>
    </form>


    <?php 
    if(isset($_POST["num"])){
       
   if( $_POST["num"]>=8){
    echo"Excellent";
   }
   else if($_POST["num"]>=5){
    echo "good";
   }
   else{
    echo"Poor";
   }
    }
    ?>

    <?php 
    if(isset($_POST["num"])){
        if($_POST["num"]>=8){
            echo "Excellent";
        }
        else if($_POST["num"]>=5){
            echo"good";
        }
        else{
            echo "poor";
        }
    }
    ?>
</body>
</html>