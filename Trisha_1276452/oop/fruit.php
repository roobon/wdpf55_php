<?php 
class Fruit {
    public $name;//protected, private 
    public $color;

    public function set_name($x){
        $this->name = $x;
    }

    public function get_name(){
        return $this->name;
    }
}
//end of class

//object Creat
$fr1 = new Fruit;
$fr1->color = "Red";// Access color proparty
$fr1->set_name("Mango");// setting Name
echo $fr1->get_name();//getting name
echo "<br>";
var_dump($fr1);
echo "<br>";

//Testing instance  or not
if($fr1 instanceof Fruit){
    echo "Yes";

}else {
    echo "No";
}



