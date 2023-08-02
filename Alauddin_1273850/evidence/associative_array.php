<?php 

    $result = array("Abdullah"=>30, "Abbus"=>28, "Shifat"=>36, "Babul"=>27, "David"=>52);


    // echo "<pre>";
    // print_r($associative_array);

    echo "<table border ='1' style='background-color: bisque; width: 200px; border-radius: 10px; border-collapse: collapse;'>
        <tr><th>Student Name</th>
        <th>Score</th></tr>";
    foreach ($result as $name=>$score){
        echo "<tr><td>$name</td><td>$score</td></tr>";
    }
    echo "</table>";
    echo "<br>";

    $maxValue = max($result);
    $maxKey = array_search($maxValue, $result);


    echo "Maximum Score is $maxValue and scorer is $maxKey";

    // echo "Topper Student is $maxKey<br>";
    // echo "Hightest Score is $maxValue";

?>