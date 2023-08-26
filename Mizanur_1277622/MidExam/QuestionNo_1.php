<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Question 1</title>
</head>

<body>
    <div class="container">
        <h2>Check Prime or Not</h2>
        <form action="" method="post" class="form-control">
            <input type="text" name="number" placeholder="Enter any number" class="form-control"><br>
            <input type="submit" value="SUBMIT" name="submit" class="btn btn-primary">
        </form>
    </div>
    
    <div class="container">
    <?php
    if (isset($_POST["number"])) {
        $num = $_POST["number"];

        if ($num == 0) {
            echo "<h3>Please enter a valid number without 0</h3>";
        } else if ($num == 1) {
            echo "<h3>1 is not a Prime number</h3>";
        } else if ($num == 2) {
            echo "<h3>2 is a Prime number</h3>";
        } else if ($num % 2 == 0) {
            echo "<h3>$num is a not a Prime number</h3>";
        } else {
            echo "<h3>$num is a Prime Number</h3>";
        }
    }
    ?>
    </div>
</body>

</html>