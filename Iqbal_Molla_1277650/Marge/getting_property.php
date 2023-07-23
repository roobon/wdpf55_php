<?php
class Employee {
    public $name;
    public $city;
    protected $wage;

    public function __get($propName){
        echo "__get called!<br />";
        $vars = array("name", "city");

        if (in_array($propName, $vars))
        {
        return $this->$propName;
        } else {
        return "No such variable!";
        }
    }
}

        $emp = new Employee;
        $emp->adderess ="Badda";

        var_dump($emp);
