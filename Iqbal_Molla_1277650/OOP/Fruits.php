<?php
//its class
class Fruits {
    //its properties
    public $name; //public, protected, privet
    public $color;
    //its methord
    public function set_name($x){
        $this->name = $x;
    } 
    //its methord
    public function get_name(){
        return $this->name;
    }
}
//End of class 

//Object create
$fr1 = new Fruits;
$fr2 = " ";

$fr1->set_name("Mango"); //Seting name
$fr1->color = "Green"; //Acces color property


echo  $fr1->get_name(); //Geting name
echo "<br>";
var_dump($fr1);


if($fr1 instanceof Fruits){
    echo "Yes";
} else{
    echo "No";
}
?>