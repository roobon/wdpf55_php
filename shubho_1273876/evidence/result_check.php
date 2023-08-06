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

$output = '';

if (isset($_POST['submit'])) {
    $grade = strtoupper($_POST['grade']);
    $output = getGradeDescription($grade);
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
    <form action="" method="post">
        <input type="text" name="grade" maxlength="1" placeholder="Enter grade (A, B, C, D, F)">
        <input type="submit" value="Check" name="submit">
    </form>

    <?php if (!empty($output)) { ?>
        <h3><?php echo $output; ?></h3>
    <?php } ?>

</body>

</html>