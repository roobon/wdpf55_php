<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Registration</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="user" placeholder="User name"> <br>
    <input type="email" name="email" placeholder="Enter Email"> <br>
    <input type="submit" value="REGISTER">
</form>    


<?php 
if ( isset ($_POST['user']) ){
    $user =  $_POST['user'];
    $email =  $_POST['email'];

    if ( strlen($user)<=8 &&  strlen($user)>=4 ){
        echo " User Created..!! " ;
    } else {
       echo "user name must be 4 to 8 character" ;
    }


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email Address is Valid";
    } else {
        echo "Invalid Email  ";
    }
    
}

?>

</body>
</html>