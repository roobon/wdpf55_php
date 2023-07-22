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
       $guess = $_POST["num"];
   switch($guess){

    case $guess>=8:
    echo"excellent"
    break;

    }}

 
   
    ?>

   
</body>
</html>