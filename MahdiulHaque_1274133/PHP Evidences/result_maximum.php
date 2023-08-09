<?php 
    $students = array(
        "Rahim"=>65, 
        "Karim"=>80, 
        "Shofiq"=>75, 
        "Tuhin"=>60, 
        "Jobbar"=>65
    );
    echo "<pre>";
    
    print_r($students);
    echo "</pre>";

    echo "<table border=1>";
    echo "<tr>
                <th>Student Name</th>
                <th>Marks</th>
            </tr>";
    foreach($students as $name=>$marks){
        echo "<tr>
                <td> $name </td>
                <td> $marks </td>
            </tr>";
    }
    echo "</table>";

    $max = max($students);
    $person = array_search($max, $students);
    echo "$person get the maximum marks $max";

?>