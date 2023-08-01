<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $students = array("Sadid"=> 55, "Mamum"=> 65, "Molla"=> 67, "Masum"=> 70, "Sirazi"=> 55);

        // $studentsNumber = count($students);

        // for($i = 0; $i < $studentsNumber; $i++){
        //     $keys = array_keys($students);
        //     $currentKey = $keys[$i];
        // }

        echo "<table border = 1 width = 200> ";
        echo "<tr><th>Name</th><th>Score</th></tr>";
        foreach($students as $name=>$score){
            echo "<tr><td>{$name}</td><td>$score</td></tr>";
        }

        echo "</table>";

        $max = max($students);
        $candidate = array_search($max, $students);

        echo "Maximum number $max and scored $candidate";
    ?>
</body>
</html>