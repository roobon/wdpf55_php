<?php

// Define the login validation function
function validate_login($username, $password) {
    // Replace this with your actual login validation logic
    // For simplicity, let's assume the correct username and password are "admin" and "password123" respectively.
    $correct_username = 'admin';
    $correct_password = 'password123';

    if ($username === $correct_username && $password === $correct_password) {
        return true;
    } else {
        return false;
    }
}

// Process the login form
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (validate_login($username, $password)) {
        // Redirect to the dashboard or any other page on successful login
        header('Location: dashboard.php');
        exit();
    } else {
        $error_message = "Invalid username or password. Please try again.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
