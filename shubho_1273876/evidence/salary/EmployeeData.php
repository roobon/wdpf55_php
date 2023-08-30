<!DOCTYPE html>
<html>

<head>
    <title>Employee Data Result</title>
</head>

<body>

    <h2>Employee Data Result</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $designation = $_POST["designation"];
        $basic = (int)$_POST["basic"];
        $houseRent = (int)$_POST["houseRent"];
        $transport = (int)$_POST["transport"];

        $totalSalary = $basic + $houseRent + $transport;

        echo "<p>Employee ID: $id</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Total Salary: $totalSalary</p>";
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>

</body>

</html>