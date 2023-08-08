<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $languages = $_POST["Language"];

        echo "<h2>Form Data:</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Languages: " . implode(', ', $languages) . "</p>";
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" id="" placeholder="Email">
        <select name="Language[]" id="" multiple>
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Java">Java</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>

</html>