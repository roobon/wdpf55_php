<!DOCTYPE html>
<html>
<head>
    <title>Login and Registration System</title>
</head>
<body>
    <h1>Register</h1>
    <form method="post" action="">
        <input type="text" name="email" placeholder="User Name"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>


<?php
    if(isset($_POST['submit'])) {
        $user = $_POST["email"];

        if (strlen($user) < 4 || strlen($user) > 8 || strpos($user, '@') === false) {
            echo "Invalid username. Username must be between 4 to 8 characters and must be '@' symbol.";
        } else {
            echo "Registration successful for username";
        }
    }
?>





