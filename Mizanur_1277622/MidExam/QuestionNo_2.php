<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Question 2</title>
</head>
<body>
    <?php
    $username = $password = $confirmPassword = '';
    $usernameErr = $passwordErr = $confirmPasswordErr = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST['username'])) {
            $usernameErr = 'Username is required';
        } elseif (!preg_match('/^[a-zA-Z0-9]{4,8}@/', $_POST['username'])) {
            $usernameErr = 'Username must be 4 to 8 digit and must use @ symbol';
        } else {
            $username = $_POST['username'];
        }

        if (empty($usernameErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
            echo '<p>Registration successful!</p>';
        }
    }
    ?>
    <h3>Registration Form</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?php echo $username; ?>"><br>
        <?php echo $usernameErr; ?><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
