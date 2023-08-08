<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  <form action=""  method="post">
        <input type="text" name="guess" id="">
        <button type="submit">Check</button>
    </form> -->
    <?php 
    // $number = 444;
    // if($_POST['guess']==$number){
    //     echo "congratulations!";
    // }
   
    // else{
    //     echo "sorry";
    // }
    ?> 

    <form action="" method="post">
        <input type="text" name="num" id="" placeholder="Enter the number">
        <button type="submit">Check</button>
    </form>
    <?php 
    
    // $number = 5555;
    // if($_POST["num"]==$number){
    //     echo 'Congratulation';
    // }
    // else{
    //     echo "sorry";
    // }

    if(isset($_POST["num"])){
        $number =4545;
   if( $_POST["num"]==$number){
    echo"copngratulations";
   }
   else{
    echo"sorry";
   }
    }
    ?>
</body>
</html>