<?php

function printGradeDescription($grade)
{
    if ($grade === 'A') {
        echo "Excellent";
    } elseif ($grade === 'B') {
        echo "Good";
    } elseif ($grade === 'C') {
        echo "Fair";
    } elseif ($grade === 'D') {
        echo "Poor";
    } elseif ($grade === 'F') {
        echo "Fail";
    } else {
        echo "Invalid grade";
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
    <?php if (isset($_POST['submit'])) {
        $grade = strtoupper($_POST['grade']);
        printGradeDescription($grade);
    }
    ?>
    <form action="" method="post">
        <input type="text" name="grade" maxlength="1" placeholder="Enter grade (A, B, C, D, F)">
        <input type="submit" value="Check" name="submit">
    </form>

</body>

</html>