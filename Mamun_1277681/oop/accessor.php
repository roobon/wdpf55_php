<?php

use Employee as GlobalEmployee;

class Employee{
    public $city;
    public $name;
    protected $wage;
    public function __get($propName)
    {
        echo "Get called! <br>";
        $var = array("name"," value");
        if(in_array($propName, $var)){
            return $propName->
        }
    }
}
$emp = new Employee;

?>