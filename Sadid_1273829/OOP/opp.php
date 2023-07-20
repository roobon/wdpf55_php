<?php

class Fruits{
    public $name;
    public $color; // public, protected, private

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$fruit1 = new Fruits;
$fruit1->set_name("Mango");
$output = $fruit1->get_name();

echo $output;


