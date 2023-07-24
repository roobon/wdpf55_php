<?php 
class Student {
    function __construct()
   {echo "My name is". get_class($this);
    }
}

$st = new Student;
echo "Newly object is created from this class".get_class($st);