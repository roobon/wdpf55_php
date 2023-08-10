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
            $password = $_POST["password"];
            // echo $email;
           

            $pattern = '/^[a-zA-Z0-9]{4,8}@([a-zA-Z0-9]+\.)+[a-zA-Z]{2,4}$/';
            
            if (preg_match($pattern, $email)) {
                echo "Successfully login";
            } else {
                echo "Invalid email format. Username must be 4 to 8 character";
            }
            
            
        }
      
    ?>
    <form action="" method="post">
        Email: <input type="text" name="email" placeholder="Enter email address"> <br>
        Password: <input type="password" name="password" placeholder="Enter email password"> <br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>

</html>