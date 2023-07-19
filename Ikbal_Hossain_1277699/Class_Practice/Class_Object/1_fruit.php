<?php
class Fruit
{
    public $name; // protected, private
    public $color;

    function set_name($x)
    {
        $this->name = $x;
    }
    function get_name()
    {
        return $this->name;
    }
}
// End of class

// Object create
$fr1 = new Fruit;
$fr1->color = "Red";  // Access color property
$fr1->set_name("Mango");  // Setting name
echo $fr1->get_name();  // Getting name
echo "<br>";
var_dump($fr1);


echo "<br>";
if($fr1 instanceof Fruit){
    echo "Yes";
} else {
    echo "NO";
}
