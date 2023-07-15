<?php 

    $students = [];

    $students[] = array("Masum", "masum@gmail.com", "01364798865");
    $students[] = array("Sakib", "sakib@gmail.com", "01564798865");
    $students[] = array("Ikbal", "ikbal@gmail.com", "01364798865");
    $students[] = array("Afra", "afra@gmail.com", "01364798865");

    echo "<pre>";
    print_r($students);
    echo "<hr>";

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
        vprintf("Name: %s<br> Email: %s<br> Phone: %s<br>", $student);
    }


?>