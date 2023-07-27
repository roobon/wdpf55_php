<?php 
 class Employee{//parent class start
    public $name;//proparty
    public function __set($name,$value ){
        echo "Nonexistant proparty: \$$name";//magic method
        $this->age = $name;
    }
 } //parent class end

 $emp =new Employee; //object
 $emp->name="Masum";//Access proparty
 $emp->age = 20; //Another property
 $emp->adress = "Dhanmondi";

 var_dump($emp);