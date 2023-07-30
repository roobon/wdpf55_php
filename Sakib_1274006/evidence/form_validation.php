<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="email" placeholder="Enter a valid email address">
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="submit" value="VALIDATE">

        
    </form>
    <?php 
    
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        // echo $email;

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email Address is Valid";
        }else {
            echo "Invalid Email";
        }
        if(strlen($pass)<=8 && strlen($pass)>=4){
            echo "Password is Valid";
        }else{
            echo "Use password 4 to 8 character";
        }
    }
    
    ?>
</body>
</html>