<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

if(isset($_REQUEST["submit"])){
 $email=   $_REQUEST["email"];
 $pass=   $_REQUEST["pass"];
 
 if($email =='' || $pass = ''){

echo "Must be Enter Email and pass";
 }
 else{
    
 if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "valid email <br>";
 }
 else{
    echo "Invalid Email <br>";
 }
 if(strlen($pass)<=8 && strlen($pass)>=4){
    echo " valid";
 }
 else{
    echo "pass must be  between 4 to 8 character";
 }

 }
}
    ?>
    <form action="" method="post">
        <input type="text" name="email" id="" placeholder="Enter Email Address"> <br>
        <input type="password" name="pass" id="" placeholder="Enter password"> <br>
        <input type="submit" name="submit" id="" value="VALIDATE">
    </form>
</body>
</html>