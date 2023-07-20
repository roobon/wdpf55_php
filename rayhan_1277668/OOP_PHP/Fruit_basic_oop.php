<?php 

class Fruit {
    public $name ;  // public deya variable gula shob jagay access pawa jay.
    public $color ; // public lekha na thakleo by default public thake.
    function set_name($x) {
        $this->name = $x; // public $name kei indicate kortese
    }


    public function get_name(){
        return $this->name ;
    }
}

//======== end of Fruit class ===========


// object create
$fr1 = new Fruit ; // this is an instance of Fruit class 
$fr1->color = "Red" ; // value set korlam 
$fr1 -> set_name("mango"); // fr1 variable a mango set name kore deyahoyeche
echo $fr1->get_name() ;

echo "<br>" ;
var_dump($fr1);
echo "<br>" ;
var_dump($fr1 instanceof Fruit ) ; 