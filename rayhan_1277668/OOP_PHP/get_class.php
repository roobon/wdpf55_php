<?php 

class Teacher {
    function __construct()
    {
        echo " My name is " . get_class($this) . "<br>"  ; // ai name / parent class name 
    }
}

$st =  new Teacher ;

echo " Newly object is created from this class " . get_class($st) ;


?>