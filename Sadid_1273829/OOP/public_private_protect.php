<?php

class ParentClass {
    public $name = "Hasnain";

    function get_name (){
        echo $this->name;
    }
}

class ChildClass extends ParentClass{
    function get_name(){
        echo $this->name;
    }
}

$obj1 = new ChildClass;
$obj1->get_name();