<?php 
    class Fruit{
        public $name;
        public $color;
        public function set_name($x){
            $this->name = $x;
        }
        public function get_name(){
           return $this->name;
        }  
    }
    //end class

    $fr1 = new Fruit; //create object
    $fr1->color = "Green";
    $fr1->set_name("Mango");
    $output = $fr1->get_name();
    echo $output;
    echo "<br>";
    // echo "<pre>";
    var_dump($fr1);

    if($fr1 instanceof Fruit){
        echo "Yes";
    }else{
        echo "No";
    }
?>

