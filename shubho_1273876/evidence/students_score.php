<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $results = array("Masum" => 50, "Sakib" => 48, "Sadid" => 46, "Ikbal" => 50);

    $max = max($results);
    $person = array_search($max, $results);

    echo "<table border='1'>";

    echo "<tr><th>Name</th> <th>Score</th></tr>";

    foreach ($results as $name => $score) {
        echo "<tr><td>{$name}</td><td>{$score}</td></tr>";
    }
    echo "<table><br>";
    echo "Maximum number $max and scored $person";
    ?>


</body>

</html>