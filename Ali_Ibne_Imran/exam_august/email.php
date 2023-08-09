<!DOCTYPE html>
<html>
<head>
    <title>Login and Registration System</title>
</head>
<body>
    <h1>Register</h1>
    <form method="post" action="">
        <label for="reg_username">Username:</label>
        <input type="text" id="reg_username" name="reg_username" required><br>
        <button type="submit">Register</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $regUsername = $_POST["reg_username"];

            // Validate username
            if (strlen($regUsername) < 4 || strlen($regUsername) > 8 || strpos($regUsername, '@') === false) {
                echo "Invalid username. Username must be between 4 to 8 characters and contain '@' symbol.";
            } else {
                // In a real-world scenario, store user registration data in a database.
                echo "Registration successful for username: $regUsername";
            }
        }
    ?>

</body>
</html>
