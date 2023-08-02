<!-- <!DOCTYPE html>
<html>
<head>
    <title>Grade Description</title>
</head>
<body>
    <h2>Enter your grade (A, B, C, D, or F):</h2>
    <form method="post">
        <input type="text" name="grade" maxlength="1">
        <input type="submit" value="Submit">
    </form>
    <?php
    // if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //     $grade = strtoupper($_POST["grade"]);
    //     if ($grade === 'A') {
    //         echo "Excellent";
    //     } elseif ($grade === 'B') {
    //         echo "Good";
    //     } elseif ($grade === 'C') {
    //         echo "Fair";
    //     } elseif ($grade === 'D') {
    //         echo "Poor";
    //     } elseif ($grade === 'F') {
    //         echo "Failure";
    //     } else {
    //         echo "Invalid grade";
    //     }
    // }
    ?>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
    <title>Grade Description</title>
</head>
<body>
    <h1>Grade Description</h1>
    <form method="post" action="">
        <label for="grade">Enter the grade (A, B, C, D, or F): </label>
        <input type="text" name="grade" id="grade" required>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grade = strtoupper($_POST["grade"]);

        if ($grade == "A") {
            echo "Excellent";
        } elseif ($grade == "B") {
            echo "Good";
        } elseif ($grade == "C") {
            echo "Fair";
        } elseif ($grade == "D") {
            echo "Poor";
        } elseif ($grade == "F") {
            echo "Failure";
        } else {
            echo "Invalid grade";
        }
    }
    ?>
</body>
</html>
