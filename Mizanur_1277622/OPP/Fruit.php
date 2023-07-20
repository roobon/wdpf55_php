<?php 
//Class Start
class Fruit{
  //It's properties
  public $name; //3P is public, protected, privet
  public $color;
  //It's Method
  function set_name($x){
    $this->name = $x;
  }
  function get_name(){
    return $this->name;
  }
}
//Class End

//Object Start
$fruit1 = new Fruit;
$fruit1->color = "Green";
$fruit1->set_name("Mango");

//$fruit2 = new Fruit;
//$fruit2->set_name('Jackfruit');

echo $fruit1->get_name() ."\n";

//var_dump($fruit1);
//echo $fruit2->get_name();
if($fruit1 instanceof Fruit){
  echo "Yes";
} else{
  echo "No";
}
//Object End
?>