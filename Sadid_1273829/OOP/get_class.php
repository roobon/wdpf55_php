<?php

class Student{
    function __construct()
    {
        echo "My name is ". get_class($this);
    }
}
new Student;

?>