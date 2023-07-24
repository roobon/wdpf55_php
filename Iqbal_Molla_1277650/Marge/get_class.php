<?php
    class Student{
        function __construct(){
            echo "My name is ". get_class($this);
        }
    }
    $st = new student;
    echo get_class($st);