<?php 
    class Employee{
        public $name;
        public $city;
        protected $wage;
        public function __get($propName){
            // echo "__get called!<br />";
            // $vars = array("name", "city");
            // if (in_array($propName, $vars))
            // {
            // return $this->$propName;
            // } else {
            // return "No such variable!";
            // }
        }
    }
    $emp = new Employee;
    echo $emp->name = "imran" ."<br>";
    echo $emp->city = "dhaka"  ."<br>";
    // echo $emp->wage = "imran";
    echo $emp->age =20  ."<br>";
    echo $emp->address ="mirpur";
    echo "<pre>";
    print_r($emp)
    
?>