<?php 
class Fruits{
    public $name;
    public $color; //protected, private

    public function setName($x){
        $this->name = $x;
    }
    public function getName(){
        return $this->name;
    }
}
//End of class 

//object
$fr1 =new Fruits;

$fr1->setName('Mango');
$fr1->setName("Apple");
$fr1->color ='Red';

echo $fr1->getName();
echo "<br>";
var_dump($fr1);
echo "<br>";
if($fr1 instanceof Fruits){
    echo"yes";
}
else{
    echo"no" ;
}

?>


<?php 
class 

?>