<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Find out Even or Odd number</h2>
    <form method="post" action="">
        <input class="form-control" type="number" name="number">
        <input class="form-control" type="submit" name="submit" value="Submit">
    </form>

    <?php 
        if(isset($_POST["submit"])){
            $mynum = $_POST["number"];

            function checkNumber($num){
                if($num % 2 == 0){
                    echo "$num is Even number";
                }else{
                    echo "$num is Odd number";
                }
            }
           checkNumber($mynum);
        }
    ?>
</body>
</html>