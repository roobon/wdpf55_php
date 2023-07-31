<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
function validateEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Email address is Valid";
    } else {
        return "Email address is Invalid";
    }
}

function validatePassword($pass) {
    if (strlen($pass) <= 8 && strlen($pass) >= 4) {
        return "Password is Valid";
    } else {
        return "Use password 4 to 8 characters";
    }
}

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    if ($email == "" || $pass == "") {
        echo "You can't leave the field empty";
    } else {
        echo validateEmail($email) . "<br>";
        echo validatePassword($pass);
    }
}
?>

<body>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter email address"> <br>
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" name="submit" value="VALIDATE">
    </form>
</body>

</html>