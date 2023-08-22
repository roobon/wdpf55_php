<?php 
class Info{
public function greeting(){
    echo "Hi! I am greeting.";
}
}
class Doing extends Info{
    public function eat(){
        echo "I am eating";
    }
    public function run(){
        echo "I am running";
    }
    public function sleep(){
        echo "I am Sleeping";
    }
}
$person1 = new Info;
$person1->greeting();
$person2 = new Doing;
$person2->sleep();

?>