<?php 
    class Student {
        function __construct()
        {
            echo "My name is " . get_class($this). "<br>";
        }
    }

    $st = new Student;
    echo "Newly object is created from this class " . get_class($st);

?>