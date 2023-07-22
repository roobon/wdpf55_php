<?php 
class Fruit {
    public $name;//protected,privet (property)

    public $color;
    public function set_name($x){ //By default public
        $this->name = $x;

    }

    public function get_name(){
        return $this->name;
    }
}
//End of class
//Object Create
$fr1 = new Fruit;

$fr2 = "";

$fr1->color = "Red";//Access color property
$fr1->set_name("Mango");//Calling Function
echo $fr1->get_name();//
echo "<br>";
var_dump($fr1);


if($fr2 instanceof Fruit){
    echo "Yes";
}else{
    echo"no";
}


