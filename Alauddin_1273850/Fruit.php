<?php 

class Fruit {
    //== properties ==
    public $name; // protected, private
    public $color;
    // == method ==
    public function set_name($x){
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
$fr1->color = "Red"; // 
$fr1->set_name("Mango");
echo $fr1->get_name();
echo "<br>";
var_dump($fr1);
echo "<br>";
var_dump($fr1 instanceof Fruit);
echo "<br>";
if($fr1 instanceof Fruit){
    echo "Yes";
} else {
    echo "No";
}







