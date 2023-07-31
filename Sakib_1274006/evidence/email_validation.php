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
        <input type="submit" name="submit" value="VALIDATE">
        
    </form>
    <?php 
    
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        // echo $email;

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email Address is Valid";
        }else {
            echo "Invalid Email";
        }
    }
    
    ?>
</body>
</html>