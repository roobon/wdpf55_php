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
            // echo $email;
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Email address is Valid";
            } else {
                echo "Email address is Invalid";
            }
        }
      
    ?>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter email address">
        <input type="submit" name="submit" value="VALIDATE">
    </form>
</body>

</html>