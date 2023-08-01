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
        $email = $_POST['email'];//$_POST  index value
        $pass = $_POST['password'];//$_POST  index value

      if($email == '' || $pass == ''){
            echo "Must be enter email and password";

        }else{
               //echo email;

            if (filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo "Email address is VALID<br>";
            }else{
                echo "INVALID Email<br>";
            }
    if(strlen($pass)<=8 && strlen($pass)>=4){
       echo "Valid";
    }else{
        echo "Use password 4 to 8 character";
    }
        }//validation end



    }//isset end
    ?>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter email address"><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <input type="submit" name="submit" value="VALIDATE"><br>

    </form>
    
</body>
</html>