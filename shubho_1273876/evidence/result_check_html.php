<?php

function getGradeDescription($grade)
{
    if ($grade === 'A') {
        return "Excellent";
    } elseif ($grade === 'B') {
        return "Good";
    } elseif ($grade === 'C') {
        return "Fair";
    } elseif ($grade === 'D') {
        return "Poor";
    } elseif ($grade === 'F') {
        return "Fail";
    } else {
        return "Invalid grade";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Description</title>
</head>

<body>

    <h2>Grade Description</h2>
    <?php
    if (isset($_POST['submit'])) {
        $grade = strtoupper($_POST['hello']);
        $gradeDescription = getGradeDescription($grade);
        echo "<h3>" . $gradeDescription . "</h3>";
    }
    ?>
    <form action="" method="post">
        <input type="text" name="hello" maxlength="1" placeholder="Enter grade (A, B, C, D, F)">
        <input type="submit" value="Check" name="submit">
    </form>
</body>

</html>