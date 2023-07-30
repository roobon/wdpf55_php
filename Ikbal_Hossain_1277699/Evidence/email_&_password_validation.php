<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
        if(isset($_POST["email"])){
            $email = $_POST["email"];
            $pass = $_POST["password"];
            // echo $email;
          if($email == ""  || $pass == ""){
            echo "You can't empty the field";

          } else {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Email address is Valid <br>";
            } else {
                echo "Email address is Invalid <br>";
            }

            if(strlen($pass) <=8 && strlen($pass) >= 4){
                echo "Password is Valid";
            } else {
                echo "Use password 4 to 8 character";
            }
          }
        }
      
    ?>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter email address"> <br>
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" name="submit" value="VALIDATE">
    </form>
</body>

</html>