<?php 
class Fruit {
    public $name; // protected, private
    public $color;
    function set_name($x){
        $this->name = $x;
    }
    public function get_name(){
        return $this->name;
    }
}
// End of class

// Object create
$fr1 = new Fruit; // create instance
$fr2 = "";
$fr1->color = "Red"; // Access color property
$fr1->set_name("Mango"); // Setting name
echo  $fr1->get_name(); // Getting name
echo "<br>";
var_dump($fr1);

if($fr1 instanceof Fruit){
    echo "Yes";
} else {
    echo "No";
}





