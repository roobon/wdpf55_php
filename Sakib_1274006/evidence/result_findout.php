<?php 

$students = [
    "Sakib" => "85",
    "Akib" => "75",
    "Rakib" => "65",
    "Nakib" => "55",
];

$max = max($students);
$person = array_search($max, $students);

echo "<table border='3'>";
echo "<tr><th>Student Name</th><th>Score</th></tr>";

foreach ($students as $name => $score){
    echo "<tr><td>$name</td><td>$score</td></tr>";
}
echo "</table>";

echo "<p>Student with the highest score:</p>";
echo "<p>Name: $person</p>";
echo "<p>Score:  $max </p>";

?>