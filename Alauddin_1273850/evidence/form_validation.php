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
            //echo $email;
            if($email == '' || $pass == ''){
                echo "Must be entered email and password";
            } else {
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "Email address is VALID<br>";
                } else{
                    echo "INVALID email<br>";
                }
    
                if(strlen($pass)<=8 && strlen($pass)>=4){
                    echo "VALID";
                } else {
                    echo "Use password 4 to 8 caracter";
                }
            } // validation end

        } //isset
    ?>

    <form method="post" action="">
        <input type="text" name="email" placeholder="Enter email address"><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <input type="submit" name="submit" value="VALIDATION">
    </form>
</body>
</html>