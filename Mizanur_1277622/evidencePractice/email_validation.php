<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_POST["email"])) {
            $email = $_POST["email"];
            $pass = $_POST["password"];
            //echo $email;
            if($email == "" || $pass == ""){
                echo "Must be enter email and password";
            }else{
                            //Email Validation Start//
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Email address is valid <br>";
            }else {
                echo "Email address is invalid <br>";
            }
            //Email Validation End//

            //Password Validation Start//
            if(strlen($pass)<=8 && strlen($pass)>=4){
                echo "valid  <br>";
            }else{
                echo "Please enter 4 to 8 chracter <br>";
            }
            //Password Validation End//
            }

        }
    ?>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter your Email"><br>
        <input type="password" name="password" placeholder="Enter your Password"><br>
        <input type="submit" value="Check">
    </form>
</body>
</html>