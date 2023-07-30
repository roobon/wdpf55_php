<?php
// Associative array of student names and corresponding scores
$studentScores = array(
    "John" => 85,
    "Alice" => 92,
    "Michael" => 78,
    "Emily" => 95,
    "David" => 88
);

// Function to find the student with the maximum score
function findMaxScoreStudent($scores) {
    $maxScore = -1;
    $maxScoreStudent = "";

    foreach ($scores as $student => $score) {
        if ($score > $maxScore) {
            $maxScore = $score;
            $maxScoreStudent = $student;
        }
    }

    return array("name" => $maxScoreStudent, "score" => $maxScore);
}

// Finding the student with the maximum score
$maxScoreInfo = findMaxScoreStudent($studentScores);
$maxScoreStudent = $maxScoreInfo["name"];
$maxScore = $maxScoreInfo["score"];

// Displaying the result sheet using a table
echo "<table border='1'>";
echo "<tr><th>Student Name</th><th>Score</th></tr>";

foreach ($studentScores as $student => $score) {
    echo "<tr><td>$student</td><td>$score</td></tr>";
}

echo "</table>";

// Displaying the student with the maximum score
echo "<p>Student with the highest score:</p>";
echo "<p>Name: $maxScoreStudent</p>";
echo "<p>Score: $maxScore</p>";
?>
