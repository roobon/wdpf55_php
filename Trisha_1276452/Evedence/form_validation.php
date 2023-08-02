<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if($email == '' || $pass == ''){
        echo "Must be entered email and password";
    }else{
    //ceho $email
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Email Adress is VALID<br>";

    }else{
        echo "INVALID EMAIL<br>";

    }
    if(strlen($pass)<=8 && strlen($pass)>=4){
        echo "Valid";
    }else{
        echo "Use password 4 to 8 character";
    }
}
}

?>


<form action="" method="post">
    <input type="text" name="email" placeholder="Enter Email Adress">
    <input type="password" name="password" placeholder="Enter password">
    <input type="submit" name="submit" value="VALIDATE">


</form>


</body>
</html>