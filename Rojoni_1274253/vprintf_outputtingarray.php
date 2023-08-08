<?php 

     $students = [];

     $students[] = array("Masum","masum@gmail.com","014556764");
     $students[] = array("Iqbal","iqbal@gmail.com","014552364");
     $students[] = array("Sadid","sadid@gmail.com","0145523364");
     $students[] = array("Tisha","tisha@gmail.com","0145567764");
     
     echo "<pre>";
     print_r($students);

     foreach($students as $student){
        echo "<hr>";
        foreach($student as $st){
            echo $st."<br>";
        }

     }
     echo "<hr>";


     foreach($students as $student){
        echo "<hr>";
        vprintf("Name: %s Email: %s Phone: %s" , $student);

     }
?>