<?php

class SimpleClass
{
    public $var = 'a default value';
    private const a = "America";
    public function displayVar()
    {
        echo $this->var;
    }
}

$object = new SimpleClass();


$object->var = 'Hello World';


$object->displayVar();
