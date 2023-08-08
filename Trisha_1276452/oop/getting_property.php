<?php 
 class Employee{//parent class start
    public $name;//proparty
    public $city;
    protected $wage;
    public function __get($propName ){
        echo "_get called!","\n";
        $vars =array("name","city");
        if (in_array($propName,$vars))
        {
        return $this->$propName;    
        }else {
        return "No such variable!";    
        }
    }
 } //parent class end



