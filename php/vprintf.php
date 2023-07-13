<?php 

    $students = [];

    $students[] = array("Masum", "masum@gmail.com", "0175522");
    $students[] = array("Ikbal", "ikbal@gmail.com", "0175522");
    $students[] = array("Sadid", "sadid@gmail.com", "0175522");
    $students[] = array("Sakib", "sakib@gmail.com", "0175522");

    echo "<pre>";    
    print_r($students);

    foreach($students as $student) {
        //print_r($student);
        echo "<hr>";
        foreach($student as $info){
            echo $info . "<br>";
        }
        
    }
        
        foreach($students as $student) {
            echo "<hr>";
           vprintf("Name: %s Email: %s Phone: %s", $student);
            
        }    

?>