<?php 
class Human{
    public $name;
    public $age;
    function __construct($personName, $personAge=""){
        
        $this->name = $personName;
        $this->age = $personAge;
    }
    function sayName(){
        if($this->age){
        echo "Hi from $this->name & Age is $this->age \n";
        }else{
        echo "Hi from $this->name & Age is unknown \n";
        }
    }
}
$h1 = new Human("Mizanur Rahman", 25);
$h1->sayName();

$h2 = new Human("Mehedi Hasan", 30);
$h2->sayName();

$h3 = new Human("Sadid");
$h3->sayName();


?>