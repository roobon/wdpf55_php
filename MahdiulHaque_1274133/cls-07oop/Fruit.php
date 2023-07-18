<?php

class Fruit {
    public $name; //protected, private
    public $color;
    public function set_name($x){
        $this->name = $x;
    }
   public function get_name(){
       return $this->name;
   }
} 
// End Of class

// Object create
$fr1 = new Fruit;
$fr2 = "";
$fr1->color = "Red";
$fr1->set_name("Mango");
echo  $fr1->get_name();
echo "<br>";
var_dump($fr1);


if($fr1 instanceof Fruit){
    echo "Yes";
}  else {
    echo "No";
}