<?php 
$students = array("Mizanur Rahman" => 80, "Iqbal Molla" => 70, "Mehedi Hasan" => 85, "Mamun" => 75, "Sadid" => 90);
//print_r($students);
echo "<table border=3, width=250,>";
echo "<tr>
        <th> Name </th>
        <th> Score </th>
        </tr>";

foreach ($students as $name => $score) {
    //echo "$name and score $score <br>";
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$score</td>";
    echo "</tr>";
}
echo "</table>";

$maxNum = max($students);
$person = array_search($maxNum, $students);
echo "<h3>$person got highest marks and score is $maxNum</h3>";

?>