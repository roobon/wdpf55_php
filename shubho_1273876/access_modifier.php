<?php
class ParentClass
{
    public $name = "MHS";
    public function getName()
    {
        echo $this->name;
    }
}
class ChildClaa extends ParentClass
{
    public function getName(){
        echo $this -> name;
    }
}
// create object
$obj1 = new ParentClass;
$obj1->getName();
