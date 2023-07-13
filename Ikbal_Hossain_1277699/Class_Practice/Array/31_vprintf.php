<?php 
    $students = [];

    $students[] = array("Masum", "masumsona@gmail.com", 01698-998855);
    $students[] = array("Ikbal", "ikbal@gmail.com", 01698-998855);
    $students[] = array("Sadid", "sadid@gmail.com", 01698-998855);
    $students[] = array("Sakib", "sakib@gmail.com", 01698-998855);

    echo "<pre>";
    print_r($students);

    foreach($students as $student){
        //print_r($student);
        echo "<hr>";
        foreach($student as $info){
            echo $info . "<br>";
        }
    }
    echo "<hr>";

    foreach($students as $student){
        echo "<hr>";
        vprintf("Name: %s Email: %s Phone: %s", $student);
    }
?>