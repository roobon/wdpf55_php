<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd/Even Checker</title>
</head>

<body>
    <h1>Odd/Even Checker</h1>
    <form action="" method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = intval($_POST['number']);
        if ($number % 2 == 0) {
            echo "<p>$number is Even.</p>";
        } else {
            echo "<p>$number is Odd.</p>";
        }
    }
    ?>
</body>

</html>