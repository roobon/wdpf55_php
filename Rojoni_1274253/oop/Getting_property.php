<?php 
class Employee{
    public $name;
    public $city;
    protected $wage;
    public function __get($propName){
        echo "__get call!<br />";
        $vars = array("name","city");
        

    }
}
?>