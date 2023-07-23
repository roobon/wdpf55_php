<?php
class Employee{
    public $name;
    public $city;
    public $age;

    public function __get($name)
    {
        $var = array("name", "city");
        if (in_array($name, $var)) {
            return $this->$name;
        }else{
            return "No such variable";
        }
    }
}
$emp = new Employee;

var_dump($emp);

// accessor & 