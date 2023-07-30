<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];
       
        if ($email== null || $pass == ''){
            echo "Must be entered both email and password" ;
        } else {
             // echo $email ;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email Address is Valid";
        } else {
            echo "Invalid Email  <br>";
        }

        if (strlen($pass) <= 8 && strlen($pass) >= 4) {
            echo "Password is valid";
        } else {
            echo "password must be 4 to 8 character";
        }
        }
    }
    ?>



    <form action="" method="post">

        <input type="text" name="email" placeholder="Enter Email"> <br>
        <input type="password" name="password" placeholder="Enter Password">

        <br>
        <input type="submit" name="submit" value="REGISTER">

    </form>
</body>

</html>