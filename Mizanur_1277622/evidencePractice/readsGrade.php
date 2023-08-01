<?php 
if (isset($_POST["submit"])) {
    if ($_POST["text"] == "A") {
        echo "EXCELLENT";
    }elseif ($_POST["text"] == "B") {
        echo "GOOD";
    }elseif ($_POST["text"] == "C") {
        echo "FAIR";
    }elseif ($_POST["text"] == "D") {
        echo "POOR";
    }elseif ($_POST["text"] == "F") {
        echo "FAIL";
    }else{
        echo "Invalid Grade! Please enter A/B/C/D/F";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Check Grade Status</h3>
    <form action="" method="post">
        <input type="text" name="text"><br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>