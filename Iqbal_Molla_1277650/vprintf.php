<?php
    $students = [];

    $students[] = array("Iqbal","iqbal@gmail.com", "01755415475");
    $students[] = array("Masum","masum@gmail.com", "01755415476");
    $students[] = array("Mizan","mizan@gmail.com", "01755415477");
    $students[] = array("Mamun","mamun@gmail.com", "01755415478");

    echo "<pre>";

    print_r($students);

    foreach($students as $student){
        //print_r($students)
        echo "<hr>";
        foreach($student as $st){
            echo $st . "<br>";
        }
       
    }
    echo "<hr>";

    foreach($students as $student){
        echo "<hr>";
        vprintf("Name: %s Email: %s Phone: %s", $student);

    }
?>