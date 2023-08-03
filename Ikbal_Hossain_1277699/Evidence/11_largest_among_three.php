<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest Number</title>
</head>

<body>
    <h1>Find the Largest Number</h1>

    <?php
    // Check if the form is submitted
    if (isset($_POST["submit"])) {
        // Get the input values from the form
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        // Function to find the largest number
        function findLargestNumber($num1, $num2, $num3)
        {
            $largest = $num1; // Assume the first number is the largest

            if ($num2 > $largest) {
                $largest = $num2; // If the second number is larger, update $largest
            }

            if ($num3 > $largest) {
                $largest = $num3; // If the third number is larger, update $largest
            }

            return $largest;
        }

        // Call the function to find the largest number
        $largestNumber = findLargestNumber($num1, $num2, $num3);

        // Display the result
        echo "The largest number is: " . $largestNumber;
    }
    ?>

    <form action="" method="post">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" required>
        <br>

        <label for="num2">Number 2:</label>
        <input type="number" name="num2" required>
        <br>

        <label for="num3">Number 3:</label>
        <input type="number" name="num3" required>
        <br>

        <input type="submit" name="submit" value="Find Largest">
    </form>
</body>

</html>
