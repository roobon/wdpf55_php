<?php 

class Fruit {
    public $name; // Protected , Privet
    public $color;
    public function set_name($x){
        $this->name = $x;

    }
public function get_name(){
    return $this -> name;
}

}
//end of class
// boject creat
$fr1 = new Fruit;
$fr1-> color = "Red";
$fr1->set_name("Mango");
$output = $fr1->get_name();
echo $output;
echo "<br>";

var_dump($fr1);

if ($fr1 instanceof Fruit){
    echo "yes";
} else {
    echo "NO";
}

?>


