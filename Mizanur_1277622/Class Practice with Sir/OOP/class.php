<?php 
class employee{
    private $name;
    private $title;

    public function getName(){
        return $this->name;
    }

    public function setName(){
        $this->name = $name;
    }

    public function sayHello(){
        echo "Hi, My name is {$this->getName()}.";
    }
}
?>