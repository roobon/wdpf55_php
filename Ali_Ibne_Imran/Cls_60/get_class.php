<?php

    class Student{
        function __construct(){
            echo "My name is " . get_class($this)."<br>";
        }
    }

    // create an object
    $st = new Student();
    echo "This class name is ".get_class($st);

?>